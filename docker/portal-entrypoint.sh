#!/bin/sh
# DZD portal (Laravel) container entrypoint:
# first boot -> composer install, .env, app key, sqlite db + migration
set -e

cd /var/www/html

if [ ! -f vendor/autoload.php ]; then
    echo "[DZD] First run: installing Laravel dependencies (a few minutes)..."
    composer install --no-dev --no-interaction --prefer-dist --no-progress
fi

if [ ! -f .env ]; then
    echo "[DZD] Creating .env from .env.example"
    cp .env.example .env
fi

if ! grep -q "^APP_KEY=base64" .env; then
    echo "[DZD] Generating application key..."
    php artisan key:generate --force
fi

# SQLite by default — create + migrate on first run
if grep -q "^DB_CONNECTION=sqlite" .env; then
    mkdir -p database
    [ -f database/database.sqlite ] || touch database/database.sqlite
    php artisan migrate --force || true
fi

chown -R www-data:www-data storage bootstrap/cache database 2>/dev/null || true

exec "$@"

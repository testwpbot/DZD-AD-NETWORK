#!/bin/sh
# DZD Ad Network container entrypoint
# - makes sure Revive's writable dirs exist
# - installs PHP dependencies (composer) on the very first run only
set -e

cd /var/www/html

mkdir -p var/cache \
         var/templates_compiled \
         var/plugins/cache \
         var/plugins/config \
         var/plugins/log \
         var/plugins/recover

if [ ! -f lib/vendor/autoload.php ]; then
    echo "[DZD] First run: installing PHP dependencies with composer (a few minutes)..."
    composer install --no-dev --no-interaction --prefer-dist --no-progress
    echo "[DZD] Dependencies installed."
else
    echo "[DZD] Dependencies already present, skipping composer install."
fi

exec "$@"

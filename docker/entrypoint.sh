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
         var/plugins/recover \
         var/plugins/DataObjects \
         www/admin/plugins

# Local dev: make sure the web server user can write where Revive needs to
# (bind mounts from NTFS drives or other uid mismatches otherwise break the
# installer). Production should use proper ownership instead of 777.
chmod -R 777 var www/images plugins www/admin/plugins 2>/dev/null || true

if [ ! -f lib/vendor/autoload.php ]; then
    echo "[DZD] First run: installing PHP dependencies with composer (a few minutes)..."
    composer install --no-dev --no-interaction --prefer-dist --no-progress
    echo "[DZD] Dependencies installed."
else
    echo "[DZD] Dependencies already present, skipping composer install."
fi

exec "$@"

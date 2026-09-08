#!/usr/bin/env bash
# =============================================================
#  DZD Ad Network — native (no Docker) setup for Ubuntu/Debian
#  Installs Revive Adserver's PHP dependencies locally so you
#  can run it with Apache/Nginx or `php -S`.
# =============================================================
set -e

CD_DIR="$(cd "$(dirname "$0")" && pwd)"
REVIVE_DIR="$CD_DIR/revive"

echo ""
echo "=============================================="
echo "  DZD Ad Network — setup"
echo "=============================================="
echo ""

# ---- 1. Check PHP -----------------------------------------------------------
if ! command -v php >/dev/null 2>&1; then
    echo "[!] PHP not found. Installing PHP + required extensions (needs sudo)..."
    sudo apt-get update
    sudo apt-get install -y php-cli php-mysql php-gd php-intl php-zip \
                            php-mbstring php-xml php-curl unzip
fi

PHP_VER="$(php -r 'echo PHP_VERSION;')"
PHP_MAJOR="$(php -r 'echo PHP_MAJOR_VERSION;')"
PHP_MINOR="$(php -r 'echo PHP_MINOR_VERSION;')"
echo "[ok] PHP $PHP_VER found"

if [ "$PHP_MAJOR" -lt 8 ] || { [ "$PHP_MAJOR" -eq 8 ] && [ "$PHP_MINOR" -lt 1 ]; }; then
    echo "[!] Revive Adserver 6.x needs PHP >= 8.1. You have $PHP_VER."
    echo "    On Ubuntu: sudo add-apt-repository ppa:ondrej/php && sudo apt update"
    echo "    sudo apt install php8.2 php8.2-mysql php8.2-gd php8.2-intl php8.2-zip php8.2-mbstring php8.2-xml php8.2-curl"
    exit 1
fi

# ---- 2. Check / get Composer ------------------------------------------------
cd "$REVIVE_DIR"

if command -v composer >/dev/null 2>&1; then
    COMPOSER="composer"
    echo "[ok] composer found: $(composer --version 2>/dev/null | head -1)"
elif [ -f composer.phar ]; then
    COMPOSER="php composer.phar"
    echo "[ok] composer.phar found"
else
    echo "[i] Composer not found — downloading composer.phar into the project..."
    if command -v curl >/dev/null 2>&1; then
        curl -sS https://getcomposer.org/installer | php -- --quiet
    else
        wget -qO- https://getcomposer.org/installer | php -- --quiet
    fi
    [ -f composer.phar ] || { echo "[!] Could not download composer. Install it: https://getcomposer.org/"; exit 1; }
    COMPOSER="php composer.phar"
    echo "[ok] composer.phar installed"
fi

# ---- 3. Install Revive's PHP dependencies -----------------------------------
if [ -f lib/vendor/autoload.php ]; then
    echo "[ok] Vendor dependencies already installed — skipping"
else
    echo "[i] Installing PHP dependencies (this can take a few minutes)..."
    $COMPOSER install --no-dev --no-interaction --prefer-dist --no-progress
fi

# ---- 4. Prepare writable dirs ------------------------------------------------
echo "[i] Preparing writable directories..."
mkdir -p var/cache var/templates_compiled \
         var/plugins/cache var/plugins/config \
         var/plugins/log var/plugins/recover var/plugins/DataObjects
chmod -R 777 var www/images plugins www/admin/plugins 2>/dev/null || true

# The installer refuses to start without this marker file (official release
# packages ship it; it is deleted automatically once installation completes)
[ -f var/UPGRADE ] || touch var/UPGRADE

echo ""
echo "=============================================="
echo "  Setup complete!"
echo "=============================================="
echo ""
echo "  Quick test (no web server needed):"
echo "      cd revive && php -S 0.0.0.0:8080"
echo "      then open  http://localhost:8080"
echo ""
echo "  With Apache:"
echo "      sudo cp -r \"$CD_DIR\" /var/www/html/dzd"
echo "      sudo chown -R www-data:www-data /var/www/html/dzd"
echo "      then open  http://localhost/dzd/"
echo ""
echo "  Admin panel after install:  http://localhost:8080/www/admin/"
echo ""

# DZD Ad Network — Revive Adserver 6.0.8 runtime image
# PHP 8.2 + Apache with every extension the Revive installer requires.
FROM php:8.2-apache

# System libraries for the PHP extensions Revive needs
RUN apt-get update && apt-get install -y --no-install-recommends \
        libzip-dev \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        libicu-dev \
        libonig-dev \
        libxml2-dev \
        libcurl4-openssl-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" \
        gd intl mysqli zip mbstring xml curl opcache

# Composer 2 (used on first boot to install Revive's PHP dependencies)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# DZD PHP tuning for Revive
COPY dzd-php.ini /usr/local/etc/php/conf.d/dzd.ini

# Entrypoint: prepares writable dirs + runs composer install on first run
COPY entrypoint.sh /usr/local/bin/dzd-entrypoint
RUN chmod +x /usr/local/bin/dzd-entrypoint

WORKDIR /var/www/html

ENTRYPOINT ["dzd-entrypoint"]
CMD ["apache2-foreground"]

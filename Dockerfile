FROM composer:2.4.4 AS composer
FROM php:7.4-fpm as base

COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN apt-get update && apt-get install -y \
    nginx \
    supervisor \
    zlib1g-dev \
    libzip-dev \
    libjpeg-dev \
    libxml2-dev \
    libonig-dev \
    libicu-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd soap zip intl

FROM base as config

COPY default.conf /etc/nginx/conf.d/default.conf
# Salin ke path utama Supervisor
COPY supervisord.conf /etc/supervisor/supervisord.conf

FROM config as app

WORKDIR /var/www/html
COPY . .
RUN composer install --ignore-platform-req=ext-bcmath --no-dev

EXPOSE 8080
# Tambahkan argumen "-c" untuk menentukan path konfigurasi
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]

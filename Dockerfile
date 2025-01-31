FROM composer:2.4.4 AS composer
FROM php:7.3-fpm-alpine as base
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

#INSTALL DEPS
RUN apk update && \
    apk add --no-cache \
    nginx \
    supervisor \
    zlib-dev \
    libzip-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    freetype-dev \
    libxml2-dev \
    oniguruma-dev \
    icu-dev \
    git

#SETUP PHP EXTENSIONS
RUN docker-php-ext-install gd soap zip intl
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/

FROM base as config

#COPY NGINX AND SUPERVISOR CONF
COPY default.conf /etc/nginx/conf.d/default.conf
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

FROM config as app

WORKDIR /var/www/html

COPY . .

RUN composer install --ignore-platform-req=ext-bcmath --no-dev

EXPOSE 8080
CMD ["/usr/bin/supervisord"]

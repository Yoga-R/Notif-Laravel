# # Stage 1: Build Laravel dengan PHP 7.4 dan Composer
# FROM php:7.4-fpm AS app

# # Install dependencies
# RUN apt-get update && apt-get install -y \
#   unzip \
#   git \
#   curl \
#   libpng-dev \
#   libjpeg-dev \
#   libfreetype6-dev \
#   libonig-dev \
#   libxml2-dev \
#   zip \
#   && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# # Install Composer
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# # Set working directory
# WORKDIR /var/www/html

# # Copy Laravel project files
# COPY . .

# # Install Laravel dependencies
# RUN composer install --no-dev --optimize-autoloader

# # Set permissions for storage and bootstrap cache
# RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# # Stage 2: Setup Nginx dengan Laravel
# FROM nginx:latest AS webserver

# # Set working directory
# WORKDIR /var/www/html

# # Copy Laravel app dari stage pertama
# COPY --from=app /var/www/html /var/www/html

# # Copy konfigurasi Nginx
# COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

# # Expose port 80 untuk Nginx
# EXPOSE 80

# # Jalankan Nginx
# CMD ["nginx", "-g", "daemon off;"]

# FROM php:7.4-fpm

# # Install dependencies
# RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git libmcrypt-dev libpng-dev libxml2-dev

# # Install PHP extensions
# RUN docker-php-ext-configure gd --with-freetype --with-jpeg
# RUN docker-php-ext-install gd pdo pdo_mysql

# # Install Composer
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# WORKDIR /var/www/html

# # Copy existing application directory contents
# COPY . .

# # Install Laravel dependencies
# RUN composer install --no-dev --optimize-autoloader

# CMD ["php-fpm"]
# work
# FROM php:7.4-fpm

# # Install dependencies
# RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git libmcrypt-dev libpng-dev libxml2-dev

# # Install PHP extensions
# RUN docker-php-ext-configure gd --with-freetype --with-jpeg
# RUN docker-php-ext-install gd pdo pdo_mysql

# # Install Composer
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# WORKDIR /var/www/html

# # Copy application files
# COPY . .

# # Install Laravel dependencies
# RUN composer install --no-dev --optimize-autoloader

# CMD ["php-fpm"]
#emd

# Gunakan image PHP resmi dengan nginx
# Gunakan image PHP resmi dengan nginx
# FROM php:7.4-fpm

# # Install dependensi untuk Laravel
# RUN apt-get update && apt-get install -y \
#   libpng-dev \
#   libjpeg-dev \
#   libfreetype6-dev \
#   zip \
#   git \
#   curl \
#   gnupg2 \
#   ca-certificates

# # Install Node.js (untuk npm)
# RUN curl -sL https://deb.nodesource.com/setup_12.x | bash - && \
#   apt-get install -y nodejs

# # Install Composer
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# # Set working directory
# WORKDIR /var/www/html

# # Salin file aplikasi Laravel
# COPY . .

# # Install dependencies Laravel
# RUN composer install --no-dev --optimize-autoloader

# # Install npm dependencies
# RUN npm install && npm run prod

# # Ekspos port
# EXPOSE 80

# # Tentukan perintah untuk menjalankan Laravel dengan nginx
# CMD ["php-fpm"]

# end

# Stage 1: Build PHP and install dependencies
FROM php:7.4-fpm-alpine as build

# Install PHP extensions needed by Laravel
RUN apk add --no-cache --virtual .build-deps gcc g++ make \
  && apk add --no-cache libpng libpng-dev libjpeg-turbo-dev libfreetype6-dev libmcrypt-dev \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install gd pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy application code into the container
COPY . .

# Install Composer and Laravel dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
  && composer install --no-dev --optimize-autoloader

# Stage 2: Nginx configuration
FROM nginx:alpine

# Copy Nginx config
COPY ./docker/nginx/default.conf /etc/nginx/conf.d/default.conf

# Copy application code from the build stage
COPY --from=build /var/www/html /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Expose port
EXPOSE 80

# Start PHP-FPM and Nginx
CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]



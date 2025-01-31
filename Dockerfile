# Stage 1: Build Laravel dengan PHP 7.4 dan Composer
FROM php:7.4-fpm AS app

# Install dependencies
RUN apt-get update && apt-get install -y \
  unzip \
  git \
  curl \
  libpng-dev \
  libjpeg-dev \
  libfreetype6-dev \
  libonig-dev \
  libxml2-dev \
  zip \
  && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy Laravel project files
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions for storage and bootstrap cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Stage 2: Setup Nginx dengan Laravel
FROM nginx:latest AS webserver

# Set working directory
WORKDIR /var/www/html

# Copy Laravel app dari stage pertama
COPY --from=app /var/www/html /var/www/html

# Copy konfigurasi Nginx
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

# Expose port 80 untuk Nginx
EXPOSE 80

# Jalankan Nginx
CMD ["nginx", "-g", "daemon off;"]

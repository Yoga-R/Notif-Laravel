# FROM php:7.4-fpm

# # Install system dependencies
# RUN apt-get update && apt-get install -y \
#   nginx \
#   libpng-dev \
#   libzip-dev \
#   libonig-dev \
#   unzip \
#   git \
#   && apt-get clean

# # Install PHP extensions
# RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# # Install Composer
# COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# # Configure environment
# ENV PORT 8080
# EXPOSE 8080

# WORKDIR /var/www

# # Copy application
# COPY . .

# # Generate .env dinamis dari environment variables Railway
# RUN touch .env && \
#   echo "APP_ENV=production" >> .env && \
#   echo "APP_KEY=${APP_KEY}" >> .env && \
#   echo "DB_CONNECTION=mysql" >> .env && \
#   echo "DB_HOST=${DB_HOST}" >> .env && \
#   echo "DB_PORT=${DB_PORT}" >> .env && \
#   echo "DB_DATABASE=${DB_DATABASE}" >> .env && \
#   echo "DB_USERNAME=${DB_USERNAME}" >> .env && \
#   echo "DB_PASSWORD=${DB_PASSWORD}" >> .env

# # Install dependencies
# RUN composer install --no-dev --no-interaction --optimize-autoloader

# # Fix permissions
# RUN chown -R www-data:www-data storage bootstrap/cache
# RUN chmod -R 775 storage bootstrap/cache

# # Generate application key jika belum ada
# RUN if [ -z "$APP_KEY" ]; then php artisan key:generate; fi

# # Cache configuration
# RUN php artisan config:cache && \
#   php artisan route:cache && \
#   php artisan view:cache 
  

# CMD bash -c "php-fpm -D && nginx -g 'daemon off;'"
# docker build -t laravel_app . && docker run -p 80:80 laravel_app
# Gunakan image PHP-FPM dengan Nginx
FROM php:7.4-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
  nginx \
  git \
  unzip \
  libpng-dev \
  libjpeg-dev \
  libfreetype6-dev \
  && docker-php-ext-configure gd \
  && docker-php-ext-install gd pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy semua file proyek ke dalam container
COPY . .

# Install Composer dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Konfigurasi permission storage dan bootstrap
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Setup Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Expose port 80 untuk Nginx
EXPOSE 80

# Start Nginx dan PHP-FPM
CMD service nginx start && php-fpm

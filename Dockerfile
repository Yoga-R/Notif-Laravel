FROM php:7.4-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
  nginx \
  libpng-dev \
  libzip-dev \
  unzip \
  git

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql gd zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Configure Nginx + PHP-FPM
COPY nginx.conf /etc/nginx/nginx.conf
# COPY .env.railway /var/www/.env

WORKDIR /var/www

# Copy aplikasi Laravel
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Permissions
RUN chown -R www-data:www-data /var/www/storage

# Build frontend assets (jika ada)
# RUN npm install && npm run production

# Generate key
# RUN php artisan key:generate

# Expose port dari environment Railway
EXPOSE $PORT

CMD bash -c "php-fpm -D && nginx -g 'daemon off;'"
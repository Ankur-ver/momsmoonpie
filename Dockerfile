# Use the official PHP image
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    nginx \
    supervisor \
    nano

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application files
COPY . .

# Install Laravel dependencies
RUN composer install --optimize-autoloader --no-dev
# Set permissions (Laravel-specific)
RUN chown -R www-data:www-data /var/www \
    && chmod -R ug+rwx /var/www/storage /var/www/bootstrap/cache
# Copy Nginx and Supervisor configs
COPY ./deploy/render/nginx.conf /etc/nginx/sites-available/default
COPY ./deploy/render/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80

# Start Supervisor to manage Nginx and PHP-FPM
CMD ["/usr/bin/supervisord"]

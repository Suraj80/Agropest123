# Use PHP with Apache
FROM php:8.2-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Enable Apache mod_rewrite (for frameworks like Laravel, etc.)
RUN a2enmod rewrite

# Copy all project files into Apache's web root
COPY . /var/www/html/

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose Apache port
EXPOSE 80

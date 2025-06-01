# Use the official PHP image with Apache
FROM php:8.1-apache

# Copy your PHP files into the container
COPY . /var/www/html/

# Enable mod_rewrite if needed
RUN a2enmod rewrite

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

# Expose the web server port
EXPOSE 80

# Start Apache in foreground
CMD ["apache2-foreground"]
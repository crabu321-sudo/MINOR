FROM php:8.1-apache

# Enable mysqli extension
RUN docker-php-ext-install mysqli

# Copy all project files to the web server
COPY . /var/www/html/

# Give proper permissions
RUN chown -R www-data:www-data /var/www/html/

EXPOSE 80

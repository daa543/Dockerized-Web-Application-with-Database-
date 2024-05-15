# Use an official PHP image as a base
FROM php:apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the contents of the current directory into the container at /var/www/html
COPY . .

# Install any necessary dependencies (if required)
# For example, install additional PHP extensions
RUN docker-php-ext-install mysqli 

# Expose port 80 to allow outside access to our web server
EXPOSE 80

# By default, Apache will be started when the container starts
CMD ["apache2-foreground"]
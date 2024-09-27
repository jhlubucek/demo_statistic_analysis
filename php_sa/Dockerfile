# Use an official PHP runtime as a parent image
FROM php:8.1-cli

# Set the working directory in the container
WORKDIR /app

# Install necessary PHP extensions for PHPStan
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_mysql

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHPStan via Composer
RUN composer global require phpstan/phpstan

# Install PHP CodeSniffer globally using Composer
RUN composer global require "squizlabs/php_codesniffer=*"

# Add Composer global bin to the PATH
ENV PATH="/root/.composer/vendor/bin:${PATH}"

# Verify installation
RUN phpstan --version

# Verify installation
RUN phpcs --version && phpcbf --version

# Command to run PHPStan
ENTRYPOINT ["/bin/sh", "-c"]

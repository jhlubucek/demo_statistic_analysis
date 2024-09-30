# Use an official PHP runtime as a parent image
FROM php:8.1-cli

# Set the working directory in the container
WORKDIR /usr/src/app

# Install Composer (for dependency management)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the current directory contents into the container
COPY . /usr/src/app

# Install nikic/php-parser using composer require
RUN composer require nikic/php-parser

# Make sure the parser.php script is executable
RUN chmod +x src/parser.php

# Set the entry point to the parser.php script
ENTRYPOINT ["php", "src/parser.php"]

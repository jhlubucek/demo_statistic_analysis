# Use an official PHP image with Composer support
FROM php:8.1-cli

# Set up working directory
WORKDIR /app

# Install necessary PHP extensions
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_mysql

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP Rector via Composer globally
RUN composer global require rector/rector

# Add Composer bin to the PATH
ENV PATH="/root/.composer/vendor/bin:${PATH}"

# Copy local project files into the container
COPY rector.php .

# Entry point: run Rector
CMD ["rector", "-h"]

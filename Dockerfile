# syntax=docker/dockerfile:1

# Sử dụng PHP 8.4 với Apache
FROM php:8.4.1-apache as final

# Cài đặt PDO và PDO_MySQL extension cho PHP
RUN docker-php-ext-install pdo pdo_mysql

# Chuyển cấu hình PHP từ file production
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Copy source code vào container
COPY ./src /var/www/html

# Thay đổi quyền người dùng của Apache để có thể truy cập thư mục
USER www-data

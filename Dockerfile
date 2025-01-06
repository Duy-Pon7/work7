# syntax=docker/dockerfile:1

# Sử dụng PHP 8.4 với Apache
FROM php:8.4.1-apache as final

# Cài đặt PDO và PDO_MySQL extension cho PHP
RUN docker-php-ext-install pdo pdo_mysql

# Cài đặt mod_rewrite cho Apache
RUN a2enmod rewrite

# Chuyển cấu hình PHP từ file production
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Copy source code vào container
COPY ./src /var/www/html

# Copy file .htaccess vào thư mục web gốc
COPY ./src/.htaccess /var/www/html/.htaccess

# Đảm bảo Apache cho phép sử dụng .htaccess bằng cách sửa file cấu hình Apache
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Thay đổi quyền người dùng của Apache để có thể truy cập thư mục
USER www-data

# Khởi động Apache
CMD ["apache2-foreground"]

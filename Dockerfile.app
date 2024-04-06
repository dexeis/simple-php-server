FROM php:8.2-fpm

COPY . /var/www/html/
CMD ["php", "app/run.php"]

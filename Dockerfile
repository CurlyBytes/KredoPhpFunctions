FROM php:8.5-apache
RUN docker-php-ext-install mysqli

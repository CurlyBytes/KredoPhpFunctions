FROM php:8.6-apache
RUN docker-php-ext-install mysqli

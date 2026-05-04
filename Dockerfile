FROM php:8.2-apache

RUN a2dismod mpm_event 2>/dev/null; \
    a2enmod mpm_prefork

RUN docker-php-ext-install pdo pdo_mysql
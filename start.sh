#!/bin/bash
set -e

# Iniciar PHP-FPM
php-fpm -D

# Esperar a que PHP-FPM esté listo
sleep 2

# Iniciar Nginx en primer plano
exec nginx -g 'daemon off;'
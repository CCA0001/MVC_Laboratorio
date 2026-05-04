#!/bin/bash
set -e

PORT=${PORT:-80}

# Debug: mostrar archivos en /var/www/html
echo "=== Contenido de /var/www/html ==="
ls -la /var/www/html/

sed -i "s/Listen 80/Listen $PORT/" /etc/apache2/ports.conf
sed -i "s/:80>/:$PORT>/" /etc/apache2/sites-enabled/000-default.conf

echo "ServerName localhost" >> /etc/apache2/apache2.conf

apache2ctl -D FOREGROUND
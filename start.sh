#!/bin/bash
set -e

# Railway asigna el puerto via $PORT
PORT=${PORT:-80}

# Configurar Apache para escuchar en ese puerto
sed -i "s/Listen 80/Listen $PORT/" /etc/apache2/ports.conf
sed -i "s/:80>/:$PORT>/" /etc/apache2/sites-enabled/000-default.conf

apache2ctl -D FOREGROUND
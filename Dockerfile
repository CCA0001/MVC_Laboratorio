FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y \
    apache2 \
    php8.1 \
    php8.1-mysql \
    libapache2-mod-php8.1 \
    && rm -rf /var/lib/apt/lists/*

RUN a2enmod php8.1 rewrite

# Eliminar página por defecto y copiar tu app
RUN rm -rf /var/www/html/*
COPY src/ /var/www/html/
RUN chown -R www-data:www-data /var/www/html

COPY start.sh /start.sh
RUN chmod +x /start.sh

CMD ["/start.sh"]
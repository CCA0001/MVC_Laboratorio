FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive
ENV CACHEBUST=2

RUN apt-get update && apt-get install -y \
    apache2 \
    php8.1 \
    php8.1-pgsql \
    libapache2-mod-php8.1 \
    && rm -rf /var/lib/apt/lists/*

RUN a2enmod php8.1 rewrite

RUN rm /var/www/html/index.html 2>/dev/null || true
COPY src/index.php /var/www/html/index.php
COPY src/config/ /var/www/html/config/
COPY src/controladores/ /var/www/html/controladores/
COPY src/modelos/ /var/www/html/modelos/
COPY src/vistas/ /var/www/html/vistas/

RUN chown -R www-data:www-data /var/www/html

COPY start.sh /start.sh
RUN chmod +x /start.sh

CMD ["/start.sh"]
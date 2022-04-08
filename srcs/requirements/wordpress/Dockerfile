FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install vim  php-fpm php-mysql wget unzip

# RUN rm -rf /var/wordpress/wp-config-sample.php
COPY wp-config.php .

ENTRYPOINT  [ ! -d "/var/www/wordpress/" ] \
            && wget -P /var/www/ https://wordpress.org/latest.zip  \
            && unzip /var/www/latest.zip -d /var/www/ \
            && mv wp-config.php /var/www/wordpress/ \
            && chown -R www-data:www-data /var/www/wordpress/ \
            ;echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf \
            ; mkdir -p /run/php/ \
            ; /usr/sbin/php-fpm7.3 -F -R

EXPOSE 9000

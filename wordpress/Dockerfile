FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install  php7.3-cli php7.3-cgi php7.3-fpm php-mysql wget
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xf latest.tar.gz 
RUN mv wordpress var/
RUN rm /var/wordpress/wp-config-sample.php
COPY wp-config.php /var/wordpress/
#RUN service php7.3-fpm start
WORKDIR /var/wordpress

CMD [ "php" , "-S", "0.0.0.0:9000" ]

EXPOSE 9000
FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install nginx
RUN rm -rf /etc/nginx/sites-enabled/default
COPY wordpress /etc/nginx/sites-available
RUN ln -s /etc/nginx/sites-available/wordpress /etc/nginx/sites-enabled/
# wp
RUN apt-get -y install  php7.3-cli php7.3-cgi php7.3-fpm php-mysql wget
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xf latest.tar.gz 
RUN mv wordpress var/
RUN rm /var/wordpress/wp-config-sample.php
COPY wp-config.php /var/wordpress/


RUN apt-get -y install mariadb-server
COPY cmd.sh .
RUN chmod +x cmd.sh
COPY init.sql .

CMD ["bash", "cmd.sh"]
EXPOSE 80
# CMD ["nginx", "-g", "daemon off;"]
# CMD ["sleep", "infinity"]
service mysql start
service php7.3-fpm start

mysql < init.sql

nginx -g 'daemon off;'
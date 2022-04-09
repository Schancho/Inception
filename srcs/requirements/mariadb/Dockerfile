FROM debian:buster

RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y mariadb-server

RUN sed -i 's/127.0.0.1/0.0.0.0/g' /etc/mysql/mariadb.conf.d/50-server.cnf

COPY wordpress.sql .

ENTRYPOINT  /etc/init.d/mysql start \
            && [ ! -d /var/lib/mysql/wordpress ] && mysql -u root < wordpress.sql \
            && mysql -u root  -e "USE mysql; ALTER USER 'root'@'localhost' IDENTIFIED BY '${DB_ROOT_PASSWORD}'; FLUSH PRIVILEGES;" \
            ; mysqladmin -u root -p$DB_ROOT_PASSWORD shutdown \
            ; mysqld_safe

EXPOSE 3306
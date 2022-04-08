FROM debian:buster

RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y mariadb-server


RUN sed -i 's/127.0.0.1/0.0.0.0/g' /etc/mysql/mariadb.conf.d/50-server.cnf

COPY wordpress.sql .

ENTRYPOINT /etc/init.d/mysql start \
            && mysql -u root < wordpress.sql \
            ; tail -f


#CHECK IF DATABASE EXIST
#TO FIX CHANGE ROOT PASSWORD

EXPOSE 3306
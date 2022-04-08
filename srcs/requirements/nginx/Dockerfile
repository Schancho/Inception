FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade

RUN apt-get install  -y nginx vim openssl

COPY confs/default /etc/nginx/sites-available/default

ENTRYPOINT mkdir -p /etc/nginx/ssl \
            && openssl req -newkey rsa:2048 -x509 -sha256 -nodes -out /etc/nginx/ssl/cert.pem -keyout /etc/nginx/ssl/certkey.key -subj "/C=MA/ST=REHAMNA/L=Benguerir/O=1337 Inc/OU=DevOps/CN=schancho.42.fr/emailAddress=schancho@1337.student.ma" \
            && nginx -g 'daemon off;'

EXPOSE 443

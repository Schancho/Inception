FROM debian:buster
RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install nginx
RUN rm -rf /etc/nginx/sites-enabled/default
COPY wordpress /etc/nginx/sites-available
RUN ln -s /etc/nginx/sites-available/wordpress /etc/nginx/sites-enabled/
CMD ["nginx", "-g" ,"daemon off;"]
# CMD ["bash"]
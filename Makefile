COMPOSE_FILE = srcs/docker-compose.yml

all : build
build :
	mkdir -p /home/schancho/data/wordpress
	mkdir -p /home/schancho/data/mariadb
	docker-compose -f ${COMPOSE_FILE} build
up :
	docker-compose -f ${COMPOSE_FILE} up -d
down:
		docker-compose -f ${COMPOSE_FILE} down --remove-orphans  --volumes
re : down up
fclean :
	docker system prune -a -f



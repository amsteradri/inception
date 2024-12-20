# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: adgutier <adgutier@student.42madrid.com    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2024/12/12 11:28:18 by adgutier          #+#    #+#              #
#    Updated: 2024/12/12 11:28:18 by adgutier         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #



COMPOSE         = docker compose
COMPOSE_FILE    = ./srcs/docker-compose.yml
PROJECT_NAME    = inception

.PHONY: all build up up-d down images stop start \
        restart ps logs ls volumes volumes-prune \
        networks networks-prune prune prune-all

all: build up

build:
	$(COMPOSE) -f $(COMPOSE_FILE) build 

up:
	$(COMPOSE) -f $(COMPOSE_FILE) up

up-d:
	$(COMPOSE) -f $(COMPOSE_FILE) up -d

down:
	$(COMPOSE) -f $(COMPOSE_FILE) down

images:
	$(COMPOSE) -f $(COMPOSE_FILE) images

stop:
	$(COMPOSE) -f $(COMPOSE_FILE) stop

start:
	$(COMPOSE) -f $(COMPOSE_FILE) start

restart:
	$(COMPOSE) -f $(COMPOSE_FILE) restart

ps:
	$(COMPOSE) -f $(COMPOSE_FILE) ps

logs:
	$(COMPOSE) -f $(COMPOSE_FILE) logs

ls:
	$(COMPOSE) -f $(COMPOSE_FILE) ls

volumes:
	@docker volume ls | grep $(PROJECT_NAME) || echo "Volumes not found"

volumes-prune:
	docker volume prune -f

networks:
	@docker network ls | grep $(PROJECT_NAME) || echo "Networks not found"

networks-prune:
	docker network prune -f

prune:
	docker system prune -af

prune-all: down prune volumes-prune networks-prune

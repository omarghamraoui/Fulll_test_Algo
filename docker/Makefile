include ../.env
export $(shell sed 's/=.*//' ../.env)

USER_ID:=$(shell id -u)
GROUP_ID:=$(shell id -g)
export UID = $(USER_ID)
export GID = $(GROUP_ID)
DOCKER_COMPOSE = cd .. && docker-compose
DOCKER = cd .. && docker
USER_DOCKER = $(USER_ID):$(GROUP_ID)


start: ## Start environnement docker.
start: ../docker-compose.yml
	UID=$(USER_ID) GID=$(GROUP_ID) $(DOCKER_COMPOSE) up -d --build

destroy: ## Destroy all containers & network
destroy:
	$(DOCKER_COMPOSE) down

stop: ## Stop all containers
stop:
	$(DOCKER_COMPOSE) stop
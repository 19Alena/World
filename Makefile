.DEFAULT_GOAL := up
export COMPOSE_PROJECT_NAME=simple_docker
export COMPOSE_PROJECT_NAME=simple_docker

.PHONY: up
up:
	docker-compose -f docker-compose.yml up -d

.PHONY: down
down:
	docker-compose -f docker-compose.yml down --remove-orphans

.PHONY: build
build:
	docker-compose -f docker-compose.yml build
	$(MAKE) up

.PHONY: shell
shell:
	docker exec -it $(COMPOSE_PROJECT_NAME)_web sh

.PHONY: logs
logs:
	docker-compose -f docker-compose.yml logs -f --tail=100

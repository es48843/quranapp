include .stub/*.mk

.PHONY: build
build:: ##@Docker Build all containers
build:: _build-info
	sudo chmod 777 -R postgresql || true
	docker compose -f docker-compose.yml build
	docker compose -f docker-compose.yml up -d
	docker exec -d $(CONTAINER_PREFIX)_php composer install
	docker exec -d $(CONTAINER_PREFIX)_php [ ! -f .env ] \
		&& docker exec -d $(CONTAINER_PREFIX)_php cp -n .env.example .env \
		&& docker exec -d $(CONTAINER_PREFIX)_php php artisan key:generate
	docker exec -d $(CONTAINER_PREFIX)_php chmod 777 .env storage
	make stop
	echo "Build complete"

.PHONY: run
run:: ##@Docker Start all containers, but without build
run:: _build-info
	docker compose -f docker-compose.yml \
		up

.PHONY: up
up:: ##@Docker Start all containers, with build
up::
	make build
	make run

.PHONY: stop
stop:: ##@Docker Stop all containers
stop::
	docker compose -f docker-compose.yml stop

.PHONY: down
down:: ##@Docker Stop and remove all containers
down::
	docker compose -f docker-compose.yml down

.PHONY: purge
purge:: ##@Docker Remove all containers and images
purge::
	docker rmi -f $(CONTAINER_PREFIX)
	sudo chmod -R +rwx postgresql
	sudo rm -rf postgresql

.PHONY: shell
shell:: ##@Local-Environment Open a shell into running app container
shell::
	docker exec -it $(CONTAINER_PREFIX)_php /bin/sh

.PHONY: analyse
analyse:: ##@Local-Environment Run static code
analyse::
	cd src && composer analyse 2>&1 | tee storage/logs/analyse.log

#.PHONY: build up stop down ex analyse purge start_services stop_services

# -----------------------------------------------------------------------------
# Helpers
# -----------------------------------------------------------------------------
.PHONY: _build-info
_build-info::
	@echo "";
	@echo "";
	@echo "${YELLOW}Update version to  ${GREEN}$(VERSION)/$(GIT_COMMIT) ${RESET}";
	@echo '{ "version": "$(VERSION)", "git": "$(GIT_COMMIT)", "timestamp": "$(TIMESTAMP)"}' > .buildinfo.json
	@mkdir -p src/build
	@cp .buildinfo.json src/build/
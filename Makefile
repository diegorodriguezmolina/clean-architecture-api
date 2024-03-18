SHELL=/bin/sh
.DEFAULT_GOAL := help
current-dir := $(dir $(abspath $(lastword $(MAKEFILE_LIST))))

.PHONY .SILENT:
help: ## Outputs this help screen
	grep -E '(^[a-zA-Z0-9_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'

##
## 🐳 Docker
.PHONY .SILENT:
start-api:
	docker-compose up -d api

.PHONY .SILENT:
destroy-api:
	docker-compose rm --stop --force --volumes api

.PHONY .SILENT:
start-mysql:
	docker-compose up -d mysql

.PHONY .SILENT:
destroy-mysql:
	docker-compose rm --stop --force --volumes mysql
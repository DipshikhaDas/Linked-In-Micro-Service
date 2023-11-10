user-service-shell:
	docker compose exec -it php-user-service bash

post-service-shell:
	docker compose exec -it php-post-service bash

# restart-rev-proxy:
# 	cd reverse-proxy && docker compose down
# 	cd reverse-proxy && docker compose up -d 
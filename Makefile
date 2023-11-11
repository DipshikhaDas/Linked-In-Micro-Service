user-service-shell:
	docker compose exec -it php-user-service bash

post-service-shell:
	docker compose exec -it php-post-service bash

notification-service-shell:
	docker compose exec -it php-notification-service bash
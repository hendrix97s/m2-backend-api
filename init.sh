cp .env.example .env

docker-compose build && sleep 5
docker-compose up -d --remove-orphans && sleep 5
docker-compose down && sleep 2
docker-compose up -d --remove-orphans && sleep 2


docker exec -it m2_backend_api composer install
docker exec -it m2_backend_api php artisan key:generate
docker exec -it m2_backend_api php artisan migrate:fresh --seed
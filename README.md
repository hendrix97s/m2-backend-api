# Run the commands to execute project

1. Run the command `cp .env.example .env` to create a new .env file.
2. Run the command `docker-compose build` to build the image.
3. Run the command `docker-compose up -d  --remove-orphans` to start the backend api container.
4. Run the command `docker exec -it m2_backend_api compose install` to install the composer dependencies.
5. Run the command `docker exec -it m2_backend_api artisan key:generate` to generate the key.
6. Run the command `docker exec -it m2_backend_api artisan migrate:fresh --seed` to seed the database.
7. Run the command `docker exec -it m2_backend_api artisan test` to run the tests.
8. Run the command `docker exec -it m2_backend_api bash` to enter the container.

## Or run the script to execute project

... 9. OR run the script `sh init.sh` to execute the commands.

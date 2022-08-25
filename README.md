# To run artisan commands 

Use docker `./docker/bin/sail artisan help` command to executa artisan commands or access docker bash shell with `./docker/bin/sail bash` and execute the command `php artisan help`.

## Run the commands to execute project

01. Run the command `cp .env.example .env` to create a new .env file.
02. Run the command `./docker/bin/sail build` to build the image.
03. Run the command `./docker/bin/sail up -d  --remove-orphans` to start the backend api container.
04. Run the command `./docker/bin/sail compose install` to install the composer dependencies.
05. Run the command `./docker/bin/sail artisan key:generate` to generate the key.
06. Run the command `./docker/bin/sail artisan migrate:fresh --seed` to seed the database.
07. Run the command `./docker/bin/sail artisan test` to run the tests.
08. Run the command `./docker/bin/sail bash` to enter the container.
09. Run the command `./docker/bin/sail queue:work` to start the queue worker.

## Or run the script to execute project

... 10. OR run the script `sh init.sh` to execute the project and start queue worker.

## Access documentation of api project

... 11. Run the command `./docker/bin/sail php artisan scribe:generate` to generate the documentation.

click here to access documentation of api project: [http://localhost:9000/docs](http://localhost:9000/docs)

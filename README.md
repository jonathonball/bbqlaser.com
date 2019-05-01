# bbqlaser.com
Source code for bbqlaser.com

## Setup

### Clone the repo

    $ git clone git@github.com:jonathonball/bbqlaser.com.git
    $ cd bbqlaser.com

### Fix some permissions

    $ chmod 777 src/storage/framework/{sessions,views}

### Create .env file in `docker/mysql/.env`.
Provide values for:
  - MYSQL_ROOT_PASSWORD=
  - MYSQL_DATABASE=
  - MYSQL_USER=
  - MYSQL_PASSWORD=

### Create .env file in `src/`

    $ cp src/.env.example src/.env

### Modify .env file in `src/`
Provide values for:
  - APP_ENV=development
  - APP_DEBUG=true
  - DB_CONNECTION=
  - DB_HOST=
  - DB_PORT=
  - DB_DATABASE=
  - DB_USERNAME=
  - DB_PASSWORD=

### Create and launch the stack

    $ cd docker
    $ docker-compose up

### Setup the app in the running containers

    $ docker-compose exec php-fpm php /var/www/artisan key:generate
    $ docker-compose exec php-fpm php /var/www/artisan migrate
    $ docker-compose exec php-fpm php /var/www/artisan config:cache

## References
- https://hub.docker.com/r/richarvey/nginx-php-fpm/
- https://bitpress.io/simple-approach-using-docker-with-php/

- https://medium.com/@jeffochoa/using-docker-for-local-development-3f7d975bbadb
- http://geekyplatypus.com/dockerise-your-php-application-with-nginx-and-php7-fpm/

- https://x-team.com/blog/docker-compose-php-environment-from-scratch/

- https://www.howtoforge.com/dockerizing-laravel-with-nginx-mysql-and-docker-compose/

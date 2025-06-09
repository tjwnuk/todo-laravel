# todo-laravel

## About

Todo-app done in Laravel 11 for recruitment purposes.

Author: Tomasz Wnuk

Email : tjwnuk@proton.me

## Clone

After cloning repository give the right permissions to the files in project folder, the easiest way is:

`cd todo-laravel`

`sudo chmod -R 777 storage`

## Run

Build:

`docker-compose build`

Run:

`docker-compose up`

After first run you need to initialize the database:

`docker-compose exec web bash`

in the container run:

`php artisan migrate`

and import sample data

`php artisan db:seed`

and its done

## Note

always stop previous containers on restart, otherwise the error will be thrown

`docker-compose down`

to reimport data delete previous volume dbdata by

`docker-compose down -v'

and import data again

## Users

Example users for testing:

Test User
email: test@example.com
password: pass1234

Marcin Testowy
email: marcin@example.com
password: pass1234

Tomasz Testowy
email: tomasz@example.com
password: pass1234
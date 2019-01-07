# LaravelAPI
Project using Laravel 5.4 for a RESTful API

FIRST STEP BEFORE RUN LOCALLY:
Run the following command in the root of this project (where you see composer.json file):

composer install

LARAVEL COMMANDS (Always in the root folder):

*Run the application (if it works you can browser this URL http://127.0.0.1:8000):

php arisan serve

*Command to create test migration tables:

php artisan migrate create_table_users

*To start the migration from a particular folder (otherwise run all the files on /database/migrations):

php artisan migrate --path=/database/migrations/laravelapi

*Create Model (adding -m it will create a migration file):

php artisan make:model API/Model/user

*Create Controller (-r for Resourses [show, store, delete, update, etc.]):

php artisan make:controller API/UserController -r

*To check the Laravel's routes after to add it in the routes/api.php file:

php artisan route:list


Laravel Official DOCS:
https://laravel.com/docs/5.4/

# Laravel & Vue Blog

This is Laravel and Vue blog Page using Tailwind CSS with admin panel allowing to :
- create, read, update and delete posts,
- using pagination,
- create comments,
- manage user roles and permissions,


## Setup

1. Install Composer Dependencies:
```
composer install
```
2. Install NPM Dependencies:
```
npm install
```
3. Generate an app encryption key:
```
php artisan key:generate
```
4. Create a new database for the application.

5. In the .env file, add database information to allow Laravel to connect to the database. 
In .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created.

6. Migrate the database:
```
php artisan migrate
```

7. Seed the database:
```
php artisan db:seed --class=DatabaseSeeder
```
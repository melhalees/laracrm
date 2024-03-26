# Laracrm

## Installation Steps
1. copy `.env.example` to `.env`
2. set env variables, especially for database connection.
3. run following commands in the same order:
```shell
composer i
php artisan migrate
php artisan db:seed
npm i
npm run dev
```
4. As default in laravel 10, `npm run dev`, it will run `php artisan serve`, too.

### For testing CRUD operations run:
```shell
php artisan test
```




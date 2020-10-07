## Project Cars

> A simple CRUD web app developed with [Laravel](https://laravel.com/) framework.
---

#### Local Deployment

To run this proyect locally follow these steps.

1. Make sure you have PHP installed in your machine. I recommend using [XAMPP](https://www.apachefriends.org/index.html).
2. Install [Composer](https://getcomposer.org/download/) dependency manager for PHP.
3. Clone the repository.
4. Open your terminal and run this command ```composer install``` to install all the dependencies needed.
5. Create an ```.env``` file in the main directory and copy the content from ```.env.example```.
6. Now you need to create your database. Navigate to the project directory using a terminal and run ```touch database/database.sqlite```.
7. Run ```php artisan key:generate``` to create your APP_KEY in your ```.env``` file.
8. Then run ```php artisan migrate```. It will create the tables needed in your database.
9. Finally you can start your server with this command ```php artisan serve```.


NOTES:
- If you are using Gitpod, you can skip steps 1 and 2.
- If you run into any problems while installing dependencies you can use 
```composer install --no-scripts --prefer-dist``` instead of ```composer install```.

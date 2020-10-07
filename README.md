## Project Cars

> A simple CRUD web app developed with [Laravel](https://laravel.com/) framework.
---

#### Local Deployment

To deploy this repository and run it locally follow this steps.

1. Make sure you have PHP installed in your machine. I used [XAMPP](https://www.apachefriends.org/index.html).
2. Install [Composer](https://getcomposer.org/download/) dependency manager for PHP.
3. Clone the repository from GitHub to your editor of choice.
4. Open your terminal and run this command ```composer install``` to install all dependencies needed.
5. Create an ```.env``` file in the main directory and copy the content from ```.env.example```.
6. Now you need to create your database. In your terminal run ```touch database/database.sqlite```.
7. Run ```php artisan key:generate``` in your terminal to create you APP_KEY in your ```.env``` file.
8. Then run ```php artisan migrate```, this will create the tables need in you database.
9. Finally you can start you server with this command ```php artisan serve```.


NOTES:
- If you are using Gitpod, you can skip steps 1 and 2.
- If you run into any problems while installing dependencies you can use 
```composer install --no-scripts --prefer-dist``` instead of ```composer install```.
 

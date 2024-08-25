1. Clone the project on GitHub repository <br>
    > For faster updates and bleeding edge features, or if you want to help test the next version, use the updated branch instead of the `master` or `main` branch. <br>
    > Example: `git checkout master` (if the most recent branch is named "master")<br>
2. Run `composer install` or `composer update` to install all dependencies<br>
3. Create ".env" in application root with the following command: <br>

-   `cp .env.example .env` or just copy any .env.example from a laravel project<br>

4. Update database details in `.env`<br>

# 5. Run `php artisan key:generate` to generate key<br>

6. Run migrations to fill your database with data: <br>

-   `php artisan migrate --seed` to migrate all table and insert default data<br>

7. Run `php artisan config:cache` (To refresh your configuration or when you ran composer command by adding a new package) <br>
8. `php artisan serve` <br>
9. Use the following credentials to log in: <br>
10. username => `admin@example.com` <br>
11. password: `password` <br>



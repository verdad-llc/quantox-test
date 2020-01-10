Steps: 
1. composer install
2. Create .env file
3. composer dump-autoload
4.  php artisan migrate
5. php artisan db:seed --class=BoardsTableSeeder
6. php artisan db:seed --class=StudentsTableSeeder
7. php artisan db:seed --class=GradesTableSeeder
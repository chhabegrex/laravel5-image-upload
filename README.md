# laravel5-image-upload
Example of uploading image by Laravel 5.2
----------

## Installation

1. `git clone https://github.com/inputx/laravel5-image-upload.git`
2. `cd laravel5-image-upload`
3. `composer install`
4. `php artisan clear-compiled`
5. `php artisan optimize`
6. `php artisan key:generate`

## Database Config
Please update /.env for the credential of your mysql server. than
run `php artisan migrate` to initize the database table.

## Run application
You can setup your localhost env by xampp or someone else you like. Also you are be able to use PHP Host by `php -S localhost:80` on `public` folder.

## Testing by codeception
Go to folder /tests

1. Initize testing scenario by `php codecept.phar bootstrap`
2. Update `acceptance.suite.yml` with your application url.
3. Run testing scenario by `php codecept.phar run`


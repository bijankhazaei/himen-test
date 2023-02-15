## Hi Himen

please run:

composer install

php artisan key:generate

php artisan migrate:fresh --seed

php artisan passport:install

user1 email: user1@example.com
user2 email: user2@example.com
user2 email: user3@example.com

password: password

login: api/login

product listL api/products  
use bearer token returned from login end point

make docker-build
sudo docker exec php-fpm composer update
sudo docker exec php-fpm cp .env.example .env
sudo docker exec php-fpm php artisan key:generate
sudo docker exec php-fpm php artisan migrate
sudo docker exec php-fpm php artisan db:seed

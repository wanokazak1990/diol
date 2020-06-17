
make docker-build<br/>
sudo docker exec php-fpm composer update<br/>
sudo docker exec php-fpm cp .env.example .env<br/>
sudo docker exec php-fpm php artisan key:generate<br/>
sudo docker exec php-fpm php artisan migrate<br/>
sudo docker exec php-fpm php artisan db:seed<br/>

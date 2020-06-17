названия контейнеров:<br/>
nginx, php-fpm, php-cli, node, mysql, redis<br/>
<br/><br/><br/>
в env прописать:<br/>
DB_CONNECTION=mysql<br/>
DB_HOST=localhost<br/>
DB_PORT=33061<br/>
DB_DATABASE=app<br/>
DB_USERNAME=app<br/>
DB_PASSWORD=secret<br/>
<br/><br/><br/>
make docker-build<br/>
sudo docker exec php-fpm composer update<br/>
sudo docker exec php-fpm cp .env.example .env<br/>
sudo docker exec php-fpm php artisan key:generate<br/>
sudo docker exec php-fpm php artisan migrate<br/>
sudo docker exec php-fpm php artisan db:seed<br/>

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

make node-install<br/>
make node-watch<br/>

сортировка выглядит следующим образом<br/>
SELECT *, if(count>0,1,0) as available FROM products order by available desc, {price}<br/>
<br/>
$query = Product::select('id','name','description','picture','price','count',DB::raw('if(count>0,1,0) as available'))
	->orderBy('available','desc');<br/>
if(isset($array['name']) && isset($array['value'])) :<br/>
	$query->orderBy($array['name'],$array['value']);	<br/>		
endif;<br/>
$products = $query->paginate(10)->appends(request()->only('page','name','value'));<br/>

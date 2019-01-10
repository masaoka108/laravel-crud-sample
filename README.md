# laravel-crud-sample

## GetStarted

$ docker-composer up -d  

以下、コンテナ内のプロジェクトルートで実行
$ composer update --no-scripts  

$ composer dump-autoload  
  
・.envファイルを作成（DB接続情報は下記）　　

ーーーーーーーーーーーーーー  
DB_CONNECTION=mysql  
DB_HOST=laravel_sample_crud_db  
DB_PORT=3306  
DB_DATABASE=laravel_db  
DB_USERNAME=root  
DB_PASSWORD=password  
ーーーーーーーーーーーーーー  
  
$ php artisan migrate  

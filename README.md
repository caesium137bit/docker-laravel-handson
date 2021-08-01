# docker-laravel-handson

参考URL
    https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4

dockerコマンド
    docker compose up -d --build

    docker compose ps

    docker compose exec app bash

    exit

    docker compose exec app php -v
    docker compose exec [サービス名] [実行したいコマンド]

    docker compose down

    docker compose exec web nginx -v

    docker network list

    docker network inspect docker-laravel-handson_default

laravelコマンド
    docker compose exec app bash

    composer create-project --prefer-dist "laravel/laravel=8.*" .

    php artisan -V

    tinkerでレコード追加
        php artisan tinker
        $user = new App\Models\User();
        $user->name = 'phper';
        $user->email = 'phper@example.com';
        $user->password = Hash::make('secret');
        $user->save();

dbコマンド
    docker compose exec db bash

    mysql -u $MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE

    SELECT * FROM users;
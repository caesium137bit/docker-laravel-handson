# docker-laravel-handson

cd Documents/Github/docker-laravel-handson

参考URL
    基盤
    https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4
    node.js
    https://qiita.com/3no3_tw/items/25cb7c0c09d51b56eb5a
    vue3
    https://reffect.co.jp/laravel/laravel8-vue3

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

    docker-compose down --rmi all --volumes --remove-orphans
    環境全破壊

    docker compose logs
    # -f でログウォッチ
    docker compose logs -f
    # サービス名を指定してログを表示
    docker compose logs -f app

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

    php artisan key:generate

    php artisan storage:link
    public/storage から storage/app/public へのシンボリックリンクを張る。
    システムで生成したファイル等をブラウザからアクセスできるよう公開するためにシンボリックリンクを張っている。

    chmod -R 777 storage bootstrap/cache
    storage, bootstrap/cache はフレームワークからファイル書き込みが発生するので、書き込み権限を与える必要がある。

dbコマンド
    docker compose exec db bash

    mysql -u $MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE

    docker-compose exec db bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'

    SELECT * FROM users;

    show tables;

    desc users;

npmコマンド
    npm install
    npm run dev

やり直し
    git reset --hard 6e3e19fcc0ffa9bb93842488935d01e0051d7afb
    docker compose down
    docker compose up -d --build
    docker compose exec app bash

クラスが見つからない時
    composer dump-autoload

502エラー
    docker-compose.ymlの
    command: /bin/sh -c "while sleep 1000; do :; done"
    をコメントアウトすると直る。

class名付け方
    .ComponentName_Element._modifire

マイグレート
    php artisan make:migration create_tests_table --create=tests
    //php artisan make:migration ファイル名 --create=テーブル名

    php artisan migrate:fresh
    php artisan migrate:fresh --seed

    php artisan make:seeder QuizzesTableSeeder

    php artisan make:controller QuizzesController
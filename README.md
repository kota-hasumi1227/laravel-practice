# laravel-practice
laravelでapiをサッと実装してみる

- PHP 7.4.6
- Laravel Framework 7.22.4

## やったことメモ
- `config/app.php`のtimexoneとlocaleを変更
  - `'timezone' => 'Asis/Tokyo'`
  - `'locale' => 'ja'`
- `composer require laravel/ui`
- `php artisan ui vue --auth`
- 認証に使用するテーブルを新たに追加し、デフォルトのものから変更
  - users -> accounts
- 認証に使用するモデルを新たに追加し、デフォルトのものから変更
  - user -> account
- `php artisan make:controller UserController --api`
- `php artisan make:request StoreUser`
- `routes/api.php`にルーティング追記

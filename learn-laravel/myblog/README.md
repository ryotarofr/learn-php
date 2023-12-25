## アプリケーションを開始

```zsh
curl -s "https://laravel.build/example-app" | bash
```

サーバー立ち上げ

```zsh
 ./vendor/bin/sail up -d
```

```php title="web.php"
Route::get('/posts/{id}', function ($id) {
    return view('posts.post', ['id' => $id]);
});
```

-   `posts.post`: dir のネストは「.」で区切る
-   `['id' => $id]`: ブラケットに id 渡すことで view ファイルで展開できる

以下のように id を展開

```php title="posts/post.blade.php"
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $id }}</title>
</head>

<body>
  <h1>{{ $id }}番目の記事</h1>
  <p>日付: {{ date('Y-m-d') }}</p>
</body>

</html>
```

<br />

## Route の関数コントローラーに関数を渡す

```php title="/web.php"
//
Route::get('/posts/{id}', function ($id) {
    return view('posts.post', ['id' => $id]);
});

Route::get('/posts/{id}', [PostsController::class, 'show']);
```

```php title="/PostsController.php"
<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    public function show($id)
    {
        $today = date('Y-m-d');
        return view('posts.post', ['id' => $id, 'today' => $today]);
    }
}
```

日付データを`$today`に置き換えている

```php title="post.blade.php"
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $id }}</title>
</head>

<body>
  <h1>{{ $id }}番目の記事</h1>
  <p>日付: {{ $today }}</p>
</body>

</html>
```

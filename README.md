# learn-php

## 疑問におもたこと

### `declare(strict_types=1);`

declare(strict_types=1);は PHP の型宣言を行うためのものです。strict_types が 1 に設定されている場合、PHP はスカラー型（int, float, string, bool）の厳密な型チェックを行います。これにより、型の暗黙的な変換を防ぎ、型の整合性を保つことができます。

#### 種類

- `declare(encoding = "UTF-8");` : スクリプト全体の文字エンコーディングを指定
- `declare(ticks=1);` : スクリプトの各命令の実行後に tick イベントが発生

<br />

ファイル生成コマンド

```zsh
./vendor/bin/sail php artisan make:[生成場所] [フォルダ名]
```

例 `/app/Http/Controllers/PostsController.php`を生成

```zsh
./vendor/bin/sail php artisan make:controller PostsController
```

### Route ファイルで Controller を使う

```php title="/web.php"
Route::get('/xxx', [xxxController::class, 'xxx関数']);
```

例　`PostsController`の`show`関数を呼び出す。

```php title="/web.php"
use App\Http\Controllers\PostsController;　//インポート

Route::get('/posts/{id}', [PostsController::class, 'show']);
```

`Controller`ファイルに関数が一つしかない場合
`__invoke`を関数名にすることで`Router`での関数宣言が不要になる

```php
<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    public function __invoke($id)
    {
        $today = date('Y-m-d');
        return view('posts.post', ['id' => $id, 'today' => $today]);
    }
}

```

```php title="/web.php"
Route::get('/posts/{id}', [PostsController::class]);
```

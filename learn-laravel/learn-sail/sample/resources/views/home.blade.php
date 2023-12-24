<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>トップ画面</title>
    </head>
    <body>
         <p>こんにちは!
         @if (Auth::check())
        {{ \Auth::user()->name }}さん
         </p>  
         <p><a href="/logout">ログアウト</a></p>

         @else
        ゲストさん</p>
        <p><a href="/login">ログイン</a></br><a href="/register">登録</a></p>

        @endif
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログインフォーム</title>
</head>
<body>
  @isset($errors)
  <p style="color:red">{{ $errors->first('message') }}</p>
  @endisset
  <form name="loginform" action="/login" method="post">
  {{ csrf_field() }}
    <dl>
      <dt>メールアドレス:</dt>
      <dd><input type="text" name="email" size="30" value="{{ old('email') }}"></dd>
      <dt>パスワード:</dt>
      <dd><input type="password" name="password" size="30" value="{{ old('email') }}"></dd>
    </dl>
    <button type='submit' name='action' value='send'>ログイン</button>
  </form>
</body>
</html>
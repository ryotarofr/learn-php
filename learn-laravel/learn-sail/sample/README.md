# Laravel Sail

## Install

```zsh
curl -s https://laravel.build/sample | zsh
```

## 起動

該当 dir に移動後

```zsh
./vendor/bin/sail up -d
```

`http://localhost/`

![localhost](learn-laravel/learn-sail/sample/public/images/sail-up-localhost.png)
<img src="learn-laravel/learn-sail/sample/public/images/sail-up-localhost.png" alt="" title="">

## 終了

```zsh

```

## エイリアスの登録

```zsh
alias sail="./vendor/bin/sail"
```

## コンテナの起動

```zsh
sail up

# バックグラウンドで起動
sail up -d
```

## コンテナの終了

```zsh
sail down
```

## コンテナへ接続

```zsh
sail shell
```

## 実行中のコンテナ一覧

```zsh
sail ps
```

## mysql への接続

```zsh
sail mysql
```

##

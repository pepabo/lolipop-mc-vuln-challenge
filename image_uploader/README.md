# Image Uploader

---

# アプリケーションの説明

与えられた URL を `getimagesize` に与えて、画像(mimetypeが `image/` から始まるもの)であればアップロード、そうでなければ `Invalid file type";` を返すものです。  
アップロード処理は問題の本質ではないため、 `upload successful` を返すだけとしています。

# 手順

1. このリポジトリを clone する

```
$ git clone ...
```

2. Makefile を書き換えあなたのプロジェクトにデプロイする

```
$ vim Makefile
$ make deploy
```

プロジェクト URL にアクセスし index.php の内容が表示されることを確認する。

3. テストが通ることを確認し、脆弱性を変更しデプロイする

```
$ make install
$ make test
$ make install
```

4. https://security-challenge.lolipop.io/ で対象の問題のフォームにプロジェクトURLを入力し検査を行い、OK と出ればクリア


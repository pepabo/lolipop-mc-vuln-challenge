# Scheme

---

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


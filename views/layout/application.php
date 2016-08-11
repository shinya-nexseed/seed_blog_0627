<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <p>ヘッダー</p>
  <!-- 新規作成ページへのリンク -->
  <form action="/seed_blog_20160627/blogs/add" method="post">
    <input type="submit" value="新規作成">
  </form>

  <!-- アクション名によって呼び出すviewを切り替え -->
  <!--
      1. リソース名
      2. アクション名
   -->
   <?php
      include("views/{$this->resource}/{$this->action}.php");
   ?>

  <p>フッター</p>
</body>
</html>

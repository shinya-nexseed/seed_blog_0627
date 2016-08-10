<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <p>ヘッダー</p>

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

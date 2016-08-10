<?php
    // ルーティングファイル
    echo 'ルーティング routes.php読み込み';
    echo '<br>';

    // URLのパラメータを取得 $_GET
    // explode()関数
    // 指定した文字列で、対象となる文字列を分割して配列データにする
    // $str = 'IsshinToyonaga';
    // $ary = explode('T', $str);
    // var_dump($ary);
    // echo '<br>';

    $params = explode('/', $_GET['url']);
    // echo $_GET['url'];
    // echo '<br>';
    // var_dump($params);

    // 必要なリクエスト (URL) を変数に代入
    $resouce = $params[0];
    $action = $params[1];
    // echo '<br>';
    // echo '$resouce = ' . $resouce;
    // echo '<br>';
    // echo '$action = ' . $action;


    // Controllerを呼び出す
    // Controllerの命名規則
    // リソース名(複数形)_controller.php
    // blogs_controller.phpが必要
    // require('controllers/blogs_controller.php');
    // echo 'controllers/' . $resouce . '_controller.php';
    // echo '<br>';
    // echo "controllers/{$resouce}_controller.php";
    // echo '<br>';
    require("controllers/{$resouce}_controller.php");





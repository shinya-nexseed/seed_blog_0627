<?php
    // モデルクラスのファイルを読み込む
    require('models/blog.php');
    // パスはroutes.phpを基準に考える

    echo 'blogs_controller呼び出し';
    echo '<br>';

    // URLのアクションにより呼び出したいアクションメソッドを分ける

    // クラスをインスタンス化して$controllerオブジェクトを生成
    $controller = new BlogsController();

    // switch文を使ってアクション名を元に
    // $controller内の呼び出すメソッドを変える
    switch ($action) { // $actionはグローバル変数
      case 'index':
        $controller->index();
        break;

      // case 他のアクション

      default:
        # code...
        break;
    }


    // Classを作成
    class BlogsController {
        // プロパティ
        private $blog = '';
        private $resource = '';
        private $action = '';

        // コンストラクタ
        function __construct () {
            // モデルクラスのインスタンス化を行う
            $this->blog = new Blog();
            $this->resource = 'blogs';
            $this->action = 'index';
        }

        // 記事一覧表示用メソッドである
        // indexアクションメソッドを定義
        function index() {
            echo 'BlogsControllerクラスのindex()呼び出し';
            echo '<br>';
            // Modelを呼び出し
            $this->blog->index();

            // Viewを呼び出し
            $this->display();
        }

        // View表示用メソッド
        function display() {
            require('views/layout/application.php');
        }
    }
 ?>





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

      case 'show':
        $controller->show($id);
        break;

      case 'add':
        $controller->add();
        break;

      case 'create':
        if (!empty($post['title']) && !empty($post['body'])) {
            $controller->create($post);
        } else {
            $controller->add();
        }

        break;

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
        private $viewOptions = '';

        // コンストラクタ
        function __construct () {
            // モデルクラスのインスタンス化を行う
            $this->blog = new Blog();
            $this->resource = 'blogs';
            $this->action = 'index';
            $this->viewOptions = array();
        }

        // 記事一覧表示用メソッドである
        // indexアクションメソッドを定義
        function index() {
            echo 'BlogsControllerクラスのindex()呼び出し';
            echo '<br>';
            // Modelを呼び出し
            $this->viewOptions = $this->blog->index(); // $rtnを返す
            // echo '<pre>';
            // var_dump($rtn[0]['title']);
            // echo '</pre>';

            // Viewを呼び出し
            $this->display();
        }

        // 記事詳細表示用メソッドである
        // showアクションメソッドを定義
        function show($id) {
            echo 'BlogsControllerクラスのshow()呼び出し';
            echo '<br>';
            echo 'URLから取得した$id = ' . $id;
            echo '<br>';
            $this->viewOptions = $this->blog->show($id); // $resutlsを返す
            $this->action = 'show';
            $this->display();
        }

        // 記事作成用メソッドである
        // addアクションメソッドを定義
        function add() {
            echo 'BlogsControllerクラスのadd()呼び出し';
            echo '<br>';
            $this->action = 'add';
            $this->display();
        }

        // 記事作成処理用のメソッドである
        // createアクションメソッドを定義
        function create($post) {
            echo 'BlogsControllerクラスのcreate()呼び出し';
            echo '<br>';
            $this->blog->create($post);

            // indexへ遷移
            header('Location: index');
        }

        // View表示用メソッド
        function display() {
            // viewOptions使用できる
            require('views/layout/application.php');
        }
    }
 ?>





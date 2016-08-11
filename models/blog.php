<?php
    // クラスとメソッドを定義
    class Blog {
        // プロパティ
        private $dbconnect = '';

        // コンストラクタ
        function __construct() {
            // DBファイルの読み込み
            require('dbconnect.php');
            // プロパティにDBファイルの$dbを渡す処理
            $this->dbconnect = $db;
        }


        function index() {
            echo 'Blogモデルクラスindex()呼び出し';
            // SQL作成 (blogsテーブルデータ全件取得)
            $sql = 'SELECT * FROM `blogs`';
            // SQL実行・結果の受け取り
            $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($db));
            // 繰り返し処理で配列を作成
            $rtn = array();
            while ($result = mysqli_fetch_assoc($results)) {
                $rtn[] = $result;
            }
            // echo '<pre>';
            // var_dump($rtn);
            // echo '</pre>';

            // 戻り値としてcontrollerへ結果を渡す
            return $rtn;
        }

        function show($id) {
            echo 'Blogモデルクラスshow()呼び出し';
            // DB処理
            $sql = 'SELECT * FROM `blogs` WHERE `id`=' . $id;
            $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($db));

            // 基本データは一件しか返ってこない
            return mysqli_fetch_assoc($results);
        }

        function create($post) {
            // $postを使ってデータを登録する
            $sql = sprintf('INSERT INTO `blogs` SET `title`="%s", `body`="%s", `delete_flag`=0, `created`=NOW()',
                        $post['title'],
                        $post['body']
                    );
            mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
        }
    }












  <h1>ブログ記事一覧</h1>
  <!-- 取得した記事データ全件をリストで表示 -->
  <?php foreach ($this->viewOptions as $viewOption): ?>
    <p><a href="/seed_blog_20160627/blogs/show/<?php echo $viewOption['id']; ?>"><?php echo $viewOption['title']; ?></a></p>
    <p style="font-size:8px;">
      <?php echo $viewOption['created']; ?>
      [<a href="/seed_blog_20160627/blogs/edit/<?php echo $viewOption['id']; ?>">編集</a>]
      [<a href="/seed_blog_20160627/blogs/delete/<?php echo $viewOption['id']; ?>">削除</a>]
    </p>
  <?php endforeach;?>












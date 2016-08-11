  <h1>ブログ記事一覧</h1>
  <!-- 取得した記事データ全件をリストで表示 -->
  <?php foreach ($this->viewOptions as $viewOption): ?>
    <p><a href="/seed_blog_20160627/blogs/show/<?php echo $viewOption['id']; ?>"><?php echo $viewOption['title']; ?></a></p>
    <p>
      <?php echo $viewOption['created']; ?>
    </p>
  <?php endforeach;?>












  <h1>ブログ記事編集</h1>
  <form action="/seed_blog_20160627/blogs/update/<?php echo $this->viewOptions['id']; ?>" method="post">
    <label for="title">タイトル</label><br>
    <input type="text" name="title" value="<?php echo $this->viewOptions['title']; ?>"><br>
    <br>
    <label for="body">記事本文</label><br>
    <textarea name="body"><?php echo $this->viewOptions['body']; ?></textarea><br>
    <br>
    <a href="/seed_blog_20160627/blogs/index">戻る</a>
    <input type="submit" value="更新">
  </form>











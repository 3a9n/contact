<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>contact form</title>
  <link href="index1.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main">
    <div class="top-message">確認画面</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>
      <form method="post" action="complete1.php">

      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name']; ?>

      <div class="form-item">■ 年齢</div>
      <?php echo $_POST['age']; ?>

      <div class="form-item">■ お問い合わせの種類</div>
      <?php echo $_POST['category']; ?>
      
      <div class="form-item">■ 内容</div>
      <?php echo $_POST['body']; ?>
      
      <input type="submit" value="確認">
    </div>
  </div>
</body>
</html>
  
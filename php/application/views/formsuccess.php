<html>
<head>
 <title>私のフォーム</title>
</head>
<body>
 <h3>あなたのフォームは送信に成功しました！</h3>
 <?php var_dump($_POST);?>
 <p><?= anchor('form','もう一回！') ;?></p>
</body>
</html>

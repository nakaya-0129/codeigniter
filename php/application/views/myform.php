<html>
<head>
 <title>私のフォーム</title>
</head>
<body>
   <?= form_open('form','post');?>
  <h5>ユーザー名</h5>
   <?= form_error('_name_test');?>
   <?= form_error('username');?>
   <?= form_input('username',set_value('username'));?>
  <h5>パスワード</h5>
   <?= form_error('password');?>
   <?= form_error('_password_test');?>
   <?= form_password('password',set_value('password'));?>
  <h5>パスワード確認</h5>
   <?= form_error('passconf');?>
   <?= form_password('passconf',set_value('passconf'));?>
  <h5>メールアドレス</h5>
   <?= form_error('email');?>
   <?= form_input('email',set_value('email'));?>
  <div><?= form_submit('','post');?></div>
  <?= form_close();?>
</body>
</html>

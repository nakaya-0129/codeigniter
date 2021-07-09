<html>
 <body>
   <a href=<?= site_url('/aomori/hurutu');?>>青森</a>
   <?= form_open('aomori/registar','post');?>
   名前：<?= form_input('name');?><br>
   mail:<?= form_input('email');?><br>
   チェックしてください:<?= form_checkbox('check','accept',TRUE);?><br>
   ラジオボタン:<?= form_radio('radio','accept',TRUE);?><br>
   <?= form_label('what is your Name','username');?>


   <?= form_submit('登録','post'); ?>
   <?= form_close(); ?>
 </body>
</html>

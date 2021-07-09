<?= form_open('company/registar/info','post');?>
名前:<?= form_textarea('name');?>
tel:<?= form_textarea('tel');?>
男:<?= form_radio('radio',1,true);?>
女:<?= form_radio('radio',0,true);?>
<?= form_submit('','post');?>
<?= form_close();?>


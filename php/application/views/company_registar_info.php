<html>
<?php var_dump($_POST);?><br>
名前:<?= $name;?><br>
誕生日:<?= $birthday;?><br>
住所:<?= $address;?>です。
<p>今日の学習</p>
<ul>
 <?php foreach($plan_list as $plan){;?>
  <li>
   <?= $plan;?>
  </li>
 <?php };?>
</ul>
</html>

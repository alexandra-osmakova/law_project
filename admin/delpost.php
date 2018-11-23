<?php
  require "../database_controll/db.php";
  $blog = R::load('blogs', $_GET['id']);
  R::trash($blog);
  header('Location: http://test.5186688.ru/admin/admin.php');
  exit;
?>
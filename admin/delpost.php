<?php
  require "../database_controll/db.php";
  $blog = R::load('blogs', $_GET['id']);
  R::trash($blog);
<<<<<<< HEAD
  header('Location: http://test.5186688.ru/admin/admin.php');
=======
  header('Location: http://test.5186688.ru/admin/admin_test.php');
>>>>>>> 66a3888cb199d963b2b61042334df81b5ce097a9
  exit;
?>
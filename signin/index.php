<?php
 	require "../database_controll/db.php";
    $data = $_POST;
  if( isset($data['do_login']) )
  {
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['login']));
    if( $user )
     {
       if( password_verify($data['password'], $user->password))
         {
           $_SESSION['logged_user'] = $user;
           header ('Location: http://test.5186688.ru/admin/admin.php');
           exit;
         }
       else
         {
          $errors[] = 'Пароль введен неверно!';
         }   
     }
     else
     {
      $errors[] = 'Пользователь с таким логином не найден';
     } 

     if ( !empty($errors))
  {
    echo '<div style="color: red;">'.array_shift($errors).'</div>';
  }

  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
  <link rel="shortcut icon" type="image/png" href="../img/logo1.png">
	<title>Войти | Инфомационный портал</title>
	<meta charset="utf-8">
</head>
<body>
<style>
	    #map{display:none}
	</style>
<?php
	require('../header.php');
	?>
  <div id="signin_section">
    <div class="col-md-6 signin_form">
      <h1>Вход в личный кабинет</h1>
      <form action="index.php" method="POST">
        <div class="signin_section_item">
          <span>Номер телефона</span>
          <input type="text" placeholder="Ваш номер телефона" name="login" value="<?php echo @$data['login']; ?>">
        </div>
        <div class="signin_section_item">    
          <span>Пароль</span>   
          <input id = 'signin_password' type="password" placeholder="Введите пароль" name="password" value="<?php echo @$data['password']; ?>">
          <span id = 'password_reload'>Я забыл пароль</span>
        </div>
        <div class="button_container">
          <button type="submit" name="do_login">Войти</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
<?php
require('../footer.php');
?>
<?php
 require "../database_controll/db.php";
?>

<!DOCTYPE html>
<html>

<head>
  <title>Регистрация</title>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/png" href="../img/logo1.png">
  <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,700&amp;subset=cyrillic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link href="https://fonts.googleapis.com/css?family=Marmelad" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
  <style>
    #map{display:none}
	</style>
<?php
	require('../header.php');
	?>
  <div id="signup_section" class="col-md-12">
    <div class="col-md-6 registration_form">
      <h1>Регистрация</h1>
      <p>Зарегистрируйтесь, чтобы стать участником нашей программы лояльности!</p>
      <div class="signup_section__content">
        <form action="index.php" method="POST">
          <div class="form_item">
            <span>ФИО</span>
            <input type="text" placeholder="Введите ФИО" name="login" value="<?php echo @$data['login']; ?>">
          </div>
          <div class="form_item">
            <span>E-mail</span>
            <input type="text" placeholder="Введите E-mail" name="e-mail">
          </div>
          <div class="form_item">
            <span>Номер телефона</span>
            <input id="phone-number" name="phone-number" type="text" maxlength="14" placeholder="Ваш телефон">
          </div>
          <div class="form_item">
            <span>Пароль</span>
            <input type="text" placeholder="Пароль" name="password">
          </div>
          <label class="form_item_checkbox">
            <input type="checkbox">
            <div class="form_item_checkbox_wrap">
              <span class="icon-check"></span>
            </div>
            <p class="form_item_checkbox_text">Нажимая кнопку "Зарегистрироваться", Вы даете согласие на обработку
              своих персональных данных и соглашаетесь с условиями Оферты</p>
          </label>
          <button type="submit" name="do_signup">Зарегистрироваться</button>
        </form>
      </div>
    </div>
  </div>
  <?php require('../footer.php'); ?>
  <?php
      $data = $_POST;
     if( isset($data['do_signup']))
     {
      // здесь регистрация
      $errors = array();
      if ( trim($data['login']) == '' )
      {
        $errors[] = 'Введите логин!';
      }
      if ( $data['password'] == '' )
      {
        $errors[] = 'Введите пароль!';
      }
      if ( $data['password_2'] != $data['password'] )
      {
        $errors[] = 'Повторный пароль введен неверно!';
      }
      if( R::count('users', "login = ? OR email = ?", array($data['login'], $data['email'])) > 0 )
      {
           $errors[] = 'Пользователь с таким логином/email уже существует';
      }

      if ( empty($errors))
      {
          
           $user = R::dispense('users');
           $user->login = $data['login'];
           $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
           R::store($user);
           echo '<div style="color: green;">Вы успешно зарегистрировались</div>';

      } else {
        echo '<div style="color: red;">'.array_shift($errors).'</div>';
      }
     }
     ?>
</body>

</html>
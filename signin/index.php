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
<<<<<<< HEAD
           header ('Location: http://test.5186688.ru/admin/admin.php');
=======
           header ('Location: http://test.5186688.ru/admin/index.php');
>>>>>>> 66a3888cb199d963b2b61042334df81b5ce097a9
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
<<<<<<< HEAD
	<meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
  <link rel="shortcut icon" type="image/png" href="../img/logo1.png">
=======
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
   <link rel="shortcut icon" type="image/png" href="../img/logo1.png">
   <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,700&amp;subset=cyrillic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
   <link href="https://fonts.googleapis.com/css?family=Marmelad" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="../css/style.css">	
>>>>>>> 66a3888cb199d963b2b61042334df81b5ce097a9
	<title>Войти | Инфомационный портал</title>
	<meta charset="utf-8">
</head>
<body>
<style>
	    #map{display:none}
	</style>
<<<<<<< HEAD
<?php
	require('../header.php');
	?>
=======
	<div class="navbar">
		<div class="container">
			<div class="navbar-top">
				<div class="nav-logo"><a class="nav-href" href="/">ООО «ЮРБИЗНЕСГРУП»</a></div>
				<div class="city">Ваш город:
					<select class='select_city'>
						<option class = 'select_city__option' value='moscow'>Москва</option>
						<option class = 'select_city__option' value='voronezh'>Воронеж</option>
						<option class = 'select_city__option' value='cheboksary'>Чебоксары</option>
						<option class = 'select_city__option' value='kazan'>Казань</option>
						<option class = 'select_city__option' value='ulyanovsk'>Ульяновск</option>
						<option class = 'select_city__option' value='samara'>Самара</option>
						<option class = 'select_city__option' value='izhevsk'>Ижевск</option>
						<option class = 'select_city__option' value='ufa'>Уфа</option>
						<option class = 'select_city__option' value='naberezhnyeChelny'>Набережные Челны</option>
						<option class = 'select_city__option' value='perm'>Пермь</option>
					</select>
				</div>
				</div>
		        <div class="right-block">
					<div class="right-block__content_wrap">
						<div class="nav-number"><a class="nav_href_tel" href="tel: +7(843)518-89-89"><i class="fa fa-phone"></i><span class='tel_number'>+7 (843) 518-89-89</span> </a></div>
		            	<div class="search-btn">
		              		<a class="search-ico"><i class="fa fa-search"></i></a>
		            	</div>
						</div>
		    		</div>
				</div>
			<hr />
			<div class="navbar-botom container">
				<ul>
					<li><a href="about">О нас</a></li>
					<li><a href="services">Услуги</a></li>
					<li><a href="article">Статьи</a></li>
					<li><a href="contact">Контакты</a></li>
					<li class="signup_nav_section"><a href="signup">Регистрация</a> | <a href="signin">Вход</a></li>
				</ul>
			</div>
		</div>
	</div>
>>>>>>> 66a3888cb199d963b2b61042334df81b5ce097a9
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
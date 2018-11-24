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
   <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
   <link rel="stylesheet" type="text/css" href="../css/style.css">	
 </head>

 <body>
 <style>
	    #map{display:none}
	</style>
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
              <p class="form_item_checkbox_text">Нажимая кнопку "Зарегистрироваться", Вы даете согласие на обработку своих персональных данных и соглашаетесь с условиями Оферты</p>
          </label>
          <button type="submit" name="do_signup">Зарегистрироваться</button>
        </form>
        </div>
  </div>
</div>
</section>
<script>
  	var select_city = document.getElementsByClassName('select_city')[0];
    var select_city__options = document.getElementsByClassName('select_city__option');
    var nav_href_tel = document.getElementsByClassName('nav_href_tel')[0];
    var tel_number = document.getElementsByClassName('tel_number')[0];
    var value_arr = [];
    var tel_numbers = ["+7 (843) 518-89-89", "+7 (843) 518-00-00", "+7 (843) 518-11-11", "+7 (843) 518-22-22", "+7 (843) 518-33-33", "611-111-111", "+7 (843) 518-44-44", "+7 (843) 518-55-55", "+7 (843) 518-66-66", "+7 (843) 518-77-77"];


  window.onload = function() {
      tel_number.innerHTML = tel_numbers[0];
      nav_href_tel.href = tel_numbers[0];

  }

  select_city.addEventListener('change', function() {
      for(var i = 0; i < select_city__options.length; i++) {
      value_arr.push(select_city__options[i].value);
    }
      for(var j = 0; j < select_city__options.length; j++) {
      if(select_city__options[j].selected === true && select_city__options[j].value == value_arr[j]) {
          tel_number.innerHTML = tel_numbers[j];
          nav_href_tel.href = tel_numbers[j];
      }
    }
  });
  </script>
  <?php
require('../footer.php');
?>
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

      } else
      {
        echo '<div style="color: red;">'.array_shift($errors).'</div>';
      }
     }
     ?>
 </body>
 </html>
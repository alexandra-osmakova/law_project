<?php
  header('Last-Modified: '.gmdate('D, M d Y H:i:s',filemtime('page.php')).'GMT');
  require "../database_controll/db.php";
  $blog = R::load('blogs', $_GET['id'] );
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $blog->title ?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
    <meta name="description" content="<?php echo $blog->descr ?>">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="../img/favicon.png">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
	<link rel="stylesheet" type="text/css" href="../css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="../css/modal.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">	
	
</head>
<body>
<?php
	require('../header.php');
	?>
    <section id="main">
    	<div class="swiper-container">
	    		<div class="swiper-slide slide-article" style="background-image: url(<?php if(isset($blog->img) && $blog->img != '../database_controll/uploads/') { echo '/'.$blog->img.''; } else { echo '../img/article-img.png'; } ?>);">
					<div class="overlay">
						<div class="container" style="text-align: center;">
			    			<h1><?php echo $blog->offer ?></h1>
			    			<a href="#" class="more-btn all-btn"><svg style="transform: rotate(180deg);margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" width="17" height="12">
	<style>
		tspan { white-space:pre }
		.shp0 { fill: #fff } 
	</style>
	<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
</svg> Все статьи</a>
			    		</div>
			    	</div>
				</div>
	    	<div class="swiper-button-prev main-prev"><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'><path d='M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z' fill='#fff'/></svg></div>
	    	<div class="swiper-button-next main-next"><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'><path d='M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z' fill='#fff'/></svg></div>
    	</div>
    </section>

    <section id="text">
    	<div class="container">
    		<div class="col-md-8">
    		<?php echo $blog->content ?>
<div class="date"><?php echo $blog->datetime ?></div><div class="shows"></div><div class="hashtag"></div>
<div class="links">
	<div class="prev-article"><svg style="transform: rotate(90deg);margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117 63" width="12" height="12">
	<style>
		tspan { white-space:pre }
		.shp0 { fill: #000 } 
	</style>
	<g id="Layer">
		<path id="Layer" class="shp0" d="M115.3,1.6c-1.6,-1.6 -4.2,-1.6 -5.8,0l-51,51.1l-51.1,-51.1c-1.6,-1.6 -4.2,-1.6 -5.8,0c-1.6,1.6 -1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2c1,0 2.1,-0.4 2.9,-1.2l53.9,-53.9c1.7,-1.6 1.7,-4.2 0.1,-5.8z" />
	</g>
</svg>Предыдущая статья</div>
	<div class="all-article">Все статьи</div>
	<div class="next-article">Следующая статья<svg style="transform: rotate(-90deg);margin-left: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117 63" width="12" height="12">
	<style>
		tspan { white-space:pre }
		.shp0 { fill: #000 } 
	</style>
	<g id="Layer">
		<path id="Layer" class="shp0" d="M115.3,1.6c-1.6,-1.6 -4.2,-1.6 -5.8,0l-51,51.1l-51.1,-51.1c-1.6,-1.6 -4.2,-1.6 -5.8,0c-1.6,1.6 -1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2c1,0 2.1,-0.4 2.9,-1.2l53.9,-53.9c1.7,-1.6 1.7,-4.2 0.1,-5.8z" />
	</g>
</svg></div>
</div>
    		</div>
    		<div class="col-md-4">
    			<h5>Последние статьи</h5>
    			<div class="col-md-12">
    				<div class="date">27.08.2018, 20:25</div><div class="shows"></div><div class="hashtag"></div>
    				<h6>Порядок регистрации фирмы</h6>
    				<p>Первостепенная задача – это составление действующего Устава фирмы, который должен быть оформлен в строгом соответствии с... </p>
    			</div>
    			<div class="col-md-12">
    				<div class="date">27.08.2018, 20:25</div><div class="shows"></div><div class="hashtag"></div>
    				<h6>Порядок регистрации фирмы</h6>
    				<p>Первостепенная задача – это составление действующего Устава фирмы, который должен быть оформлен в строгом соответствии с... </p>
    			</div>
    			<div class="col-md-12">
    				<div class="date">27.08.2018, 20:25</div><div class="shows"></div><div class="hashtag"></div>
    				<h6>Порядок регистрации фирмы</h6>
    				<p>Первостепенная задача – это составление действующего Устава фирмы, который должен быть оформлен в строгом соответствии с... </p>
    			</div>
    			<div class="col-md-12 social">
    				<h5>Поделиться в социальных сетях:</h5>
    				<i class="fa fa-vk"></i><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i>
    			</div>
    		</div>
    	</div>
    </section>

<?php
require('../footer.php');
?>
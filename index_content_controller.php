<?php
require "database_controll/db.php";
$blogs = R::findAll('blogs');
$keys = array_keys($blogs);

function last_articles() {
	global $blogs, $keys;
	$blogs = array_reverse($blogs);
	$result = "";
	
	for($i = 0; $i < 3; $i++) {
		$blog = $blogs[$i];
	
		$content = (mb_strlen($blog->content) > 100) ? mb_substr($blog->content, 0, 100)."..." : $blog->content;
		$img_url = (isset($blog->img) && $blog->img != 'database_controll/uploads/') ? "/".$blog->img : 'img/article-img.png';
	
		$result .= "<div class=\"col-md-4\">
   						<div class=\"img\" style=\"background-image: url(" . $img_url . ")\"></div>
						<h4>" . $blog->title . "</h4>
						<h4>" . $content .  "</h4>
						<a class=\"article-more\" href=\"article.php?id=" . $blog->id . "\">Читать далее <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 17 12\" width=\"17\" height=\"12\">
	
						<style>
							tspan { white-space:pre }
							.shp0 { fill: #272727 } 
						</style>	

						<path id=\"Forma 1 копия\" class=\"shp0\" d=\"M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z\" />
						</svg></a>
   					</div>";
	}
	
	return $result;
}
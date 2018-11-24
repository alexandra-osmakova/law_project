<?php
header('Last-Modified: '.gmdate('D, M d Y H:i:s',filemtime('page.php')).'GMT');
require "../database_controll/db.php";
$blogs = R::findAll('blogs');
$keys = array_keys($blogs);
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

function generate_blogs() {
	global $blogs, $page;
	$articles = array_chunk(array_reverse($blogs), 8, true);
	$result = "";
	$count = 0;
	
	foreach($articles[$page-1] as $blog) {
		$content = (mb_strlen($blog->content) > 150) ? mb_substr($blog->content, 0, 150)."..." : $blog->content;
		
		if($count === 0) {
			$result .= "<div class='row'>";
		}
		
		$result .= "<div class=\"col-md-6\">
	    				<div class=\"date\">" . $blog->datetime . "</div><div class=\"shows\"></div><div class=\"hashtag\"></div>
	    				<h3><a href=\"article.php?id=" . $blog->id . "\">" . $blog->title . "</a></h3>
	    				<p>" . $content . "</p>
	    			</div>";
	    $count++;
	    
	    if($count === 2) {
	    	$result .= "</div>";
	    	$count = 0;
	    }
	}
	
	return $result;
}

function pagination() {
	global $blogs, $page;
	$count = count(array_chunk($blogs, 8));
	$result = "";
	
	if($count < 15) {
		for($i = 1; $i <= $count; $i++) {
			$result .= ($page == $i) ? "<li><b><a href='index.php?page=$i'>$i</a></b></li>" : "<li><a href='index.php?page=$i'>$i</a></li>";
		}	
	}else {
		if($page < 5) {
			for($i = 1; $i <= 5; $i++) {
				$result .= ($page == $i) ? "<li><b><a href='index.php?page=$i'>$i</a></b></li>" : "<li><a href='index.php?page=$i'>$i</a></li>";
			}
			
			$result .= "<li>...</li><li><a href='index.php?page=$count'>$count</a></li>";
		}elseif($page > $count-4) {
			$result .= "<li><a href='index.php?page=1'>1</a></li><li>...</li>";
			
			for($i = $count-4; $i <= $count; $i++) {
				$result .= ($page == $i) ? "<li><b><a href='index.php?page=$i'>$i</a></b></li>" : "<li><a href='index.php?page=$i'>$i</a></li>";
			}
			
		}else {
			$result .= "<li><a href='index.php?page=1'>1</a></li>";
			
			$result .= "<li>...</li>";
			
			for($i = $page-2; $i <= $page+2; $i++) {
				$result .= ($page == $i) ? "<li><b><a href='index.php?page=$i'>$i</a></b></li>" : "<li><a href='index.php?page=$i'>$i</a></li>";
			}
			
			$result .= "<li>...</li>";
			
			$result .= "<li><a href='index.php?page=$count'>$count</a></li>";
			
			if($page == 5) {
				
			}
		}
	}
	
	return $result;
}

function pagination_arrow_left() {
	global $page;
	
	if($page != 1) {
		return "index.php?page=" . ($page-1);	
	}
	
	return "";
	
}

function pagination_arrow_right() {
	global $page, $blogs;
	$count = count(array_chunk($blogs, 8));
	
	if($page != $count) {
		return "index.php?page=" . ($page+1);	
	}
	
	return "";
}

function last_articles() {
	global $blogs, $keys;
	$blogs = array_reverse($blogs);
	$result = "";
	
	for($i = 0; $i < 3; $i++) {
		$blog = $blogs[$i];
	
		$content = (mb_strlen($blog->content) > 150) ? mb_substr($blog->content, 0, 150)."..." : $blog->content;
	
		$result .= "<div class=\"col-md-12\">
   						<div class=\"date\">" . $blog->datetime . "</div><div class=\"shows\"></div><div class=\"hashtag\"></div>
   						<h6><a href=\"article.php?id=" . $blog->id . "\">" . $blog->title . "</a></h6>
   						<p>" . $content . "</p>
   					</div>";
	}

	return $result;
}

function prev_article() {
	global $keys;
	
	$result = $_REQUEST['id'];
	
	for($i = 0; $i < count($keys); $i++) {
		if($result == $keys[$i] && $i != 0) {
			$result = $keys[$i-1];
			break;
		}
	}
	
	return "article.php?id=".$result;
}

function next_article() {
	global $keys;
	
	$result = $_REQUEST['id'];
	
	for($i = 0; $i < count($keys); $i++) {
		if($result == $keys[$i] && $i != (count($keys)-1)) {
			$result = $keys[$i+1];
			break;
		}
	}
	
	return "article.php?id=".$result;
}

/*
<div class="col-md-4">
	<div class="img"></div>
		<h4>Lorem ipsum</h4>
		<h4>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, sed do eiusmod tempor incididunt ut labore et dolore</h4>
		<a class="article-more" href="#">Читать далее <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" width="17" height="12">
		
		<style>
		tspan { white-space:pre }
		.shp0 { fill: #272727 } 
		</style>
	
		<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
		</svg></a>
			</div>
*/
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jermaine Forbes</title>
	<meta name="name" content="content">
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!-- <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-revision.css"/>
	<link rel="stylesheet" type="text/css" href="/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="/css/animation-settings.css"/>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript">
		var slideNo = 1;
		$.fn.extend({
		animateCss: function (animationName) {
		var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		this.addClass('animated ' + animationName).one(animationEnd, function() {
			$(this).removeClass('animated ' + animationName);
			});
		}
	});// animateCss
	</script>
    <script src="/js/slide.js"></script>


</head>
  <body>
	  <?php
		$footer = "col-sm-6 col-12";
	  	 $page =	$_SERVER['PHP_SELF'];
		switch($page){
			case "/index.php":
			$page = "index";
			$footer = "col-sm-4 col-12";
			break;
			case "/about.php":
			$page = "about";
			break;
			case "/skill.php":
			$page = "skill";
			break;

		}


	   ?>

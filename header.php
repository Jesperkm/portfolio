<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Jesper Portfolio</title>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(function() {  
		    var pull        = $('#pull');  
		        menu        = $('nav ul');  
		        menuHeight  = menu.height();  
		  
		    $(pull).on('click', function(e) {  
		        e.preventDefault();  
		        menu.slideToggle();  
		    });  
		});
	</script>

	<script>
		$(window).resize(function(){  
		    var w = $(window).width();  
		    if(w > 320 && menu.is(':hidden')) {  
		        menu.removeAttr('style');  
		    }  
		}); 
	</script>
</head>

<body>
<div id="wrapper">

<header>
	<div id="nav-wrap">
		<div id="logo"></div>	
		<nav class="clearfix">
			<ul class="clearfix">
				<li><a href="#home-banner" class="active">Home</a></li>
				<li><a href="#my-work">Work</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<a href="#" id="pull" class="clearfix"><p>Menu</p></a> 
		</nav>
	</div>
</header>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Assembly 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140330

-->
<head>
	<style>
		h1{
			margin-top: 50px !important;
			margin-bottom: 50px !important;
			margin-left: 180px !important;
		}

		form{
			margin-top: 50px;
			margin-bottom: 50px;
			margin-left: 450px !important;
			
		}

		.form-control{
			width: 550px !important;
			margin-top: 30px !important;
			margin-bottom: 30px !important;
		}

		.btn-dark{
			margin-top: 30px;
			width: 550px;
		}

		.container{
			margin-top: -60px !important;
			margin-bottom: 100px !important;
		}

		.navigation{
			text-decoration: None !important;
			color: black !important;
		}
	</style>
</head>

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title></title><meta name="keywords" content=""><meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"><meta name="description" content=""><link href="//fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet"><link href="/default.css" rel="stylesheet" type="text/css" media="all"><link href="fonts.css" rel="stylesheet" type="text/css" media="all"><!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]--></head><body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Assembly</a></h1>
		</div>
		<div id="menu">
			<ul><li class="{{ Request::path()==='/' ? 'active' : '' }}"><a href="#" accesskey="1" title="">Homepage</a></li>
				<li><a href="#" accesskey="2" title="">Our Clients</a></li>
				<li class="{{ Request::path()==='/about_us' ? 'active' : '' }}"><a href="/about_us" accesskey="3" title="">About Us</a></li>
				<li class="{{ Request::path()==='/career' ? 'active' : '' }}"><a href="/career" accesskey="4" title="">Careers</a></li>
				<li class="{{ Request::path()==='/contact_us' ? 'active' : '' }}"><a href="/contact_us" accesskey="5" title="">Contact Us</a></li>
			</ul></div>
	</div>
	
<div id="wrapper">
	@yield("content")

	
	
</div>

<div id="copyright" class="container">
	<p>Site made with: <a href="https://templated.co/">Templated.co</a></p>
</div>
</body></html>

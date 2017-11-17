<?
// Want to enable this "Staging Moved" message so that staging users are redirected to production?
// Just uncomment the appropriate lines in /.htaccess

$newServer = isset($_GET['newdomain']) 
	? 'http://' . $_GET['newdomain']
	: 'http://google.com.au';		// can hardcode URL here if needed (no trailing slash!)
$newUrl = $newServer . $_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<!-- Need to enable this staging site again?  look in /.htaccess -->
<html>
<head>
	<title>SITE DOWN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="noindex">
	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<style type="text/css">
		h1 { 
			margin: 0 0 10px; 
			font-size: 55px; 
			font-weight: normal; 
			xfont-style: italic;
			letter-spacing: -3px;
			xfont-family: Georgia, sans-serif;
		}
		.wrapper { 
			background-color: #ddd; 
			color: #333; 
			margin: 150px auto; 
			width: 700px; 
			padding: 35px; 
			border-radius: 15px;
			box-shadow: 0 0px 50px #000000;
			-moz-box-shadow: 0 0px 50px #000000;
			-o-box-shadow: 0 0px 50px #000000;
			-webkit-box-shadow: 0 0px 50px #000000;			
		}
		body { 
			font-family: Open Sans, sans-serif;
			font-weight: 300;
			font-size: 120%;
			background: #222;
			line-height: 1.8;
		}
		a { font-weight: bold; color: #444 }
	</style>
</head>
<body>
	<div class="wrapper">
		<h1>Site is now in production...</h1>
		<div class="message">
			This staging site is no longer available. <br/> The URL you were after has moved here:<br/>
			<a href="<?= $newUrl ?>" style="font-weight: bold" id="link"><?= $newUrl ?></a>		
		</div>
		<div style="margin-top: 35px; text-align: right">
			<!-- <a href="http://www.surfacedigital.com.au/" target="_blank"><img src="http://www.surfacedigital.com.au/themes/default/site/images/site_logo.png" alt="Surface Media" class="logo" border="0" width="150"/></a> -->
		</div>
	</div>
</body>
</html>


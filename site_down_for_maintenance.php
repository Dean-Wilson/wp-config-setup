<?
// SURFACE DIGITAL "SITE DOWN" MAINTENANCE PAGE
// To activate this maintenance page and block access to the whole site, uncomment these lines to .htaccess
// 		 RewriteCond %{HTTP_COOKIE} !Dev
//		 RewriteRule .* site_down_for_maintenance.php?until=2030 [last]		# last four digits should be the time you expect to return (24h time)

$downUntil = strtotime($_GET['until']);
$minsRemaining = ceil(($downUntil - time()) / 60);
$downUntil = date('g:ia', $downUntil);
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>SITE DOWN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	
		<h1>
			<? if ($minsRemaining > 2 && $minsRemaining <= 60) { ?>
				Back in <?= $minsRemaining ?> minutes...			
			<? } else { ?>
				We'll be back shortly...
			<? } ?>
		</h1>
		
		<div class="message">
			We're currently upgrading the site and expect to be finished 
			<? if ($minsRemaining > -10) { ?>
				approx <?= $downUntil ?>.
			<? } else { ?>
				very soon.
			<? } ?>
			<br/>
			Grab a coffee, then hit <a href="javascript:location.reload()">refresh</a> and we should be back in action.
		</div>
		
		
		<div style="margin-top: 35px; text-align: right">
			<!-- <a href="http://www.surfacedigital.com.au/" target="_blank"><img src="http://www.surfacedigital.com.au/themes/default/site/images/site_logo.png" alt="Surface Media" class="logo" border="0" width="150"/></a> -->
		</div>
	</div>
</body>
</html>


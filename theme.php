<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$Wcms->get('config','siteTitle')?> - <?=$Wcms->page('title')?></title>
	<meta name="description" content="<?=$Wcms->page('description')?>">
	<meta name="keywords" content="<?=$Wcms->page('keywords')?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<?=$Wcms->css()?>
	<link rel="stylesheet" href="<?=$Wcms->asset('css/style.css')?>">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>

   <script type="text/javascript">
   $(document).ready(function() {
   	   $("body").css("display", "none");

	   $("body").fadeIn(1000);
	 
	   $("a.fade").click(function(event){
		   event.preventDefault();
		   linkLocation = this.href;
		   $("body").fadeOut(1000, redirectPage);
	   });

	   function redirectPage() {
		   window.location = linkLocation;
	   }
   });
   </script>
</head>
<body>
	<?=$Wcms->settings()?>
	<?=$Wcms->alerts()?>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="col-sm-5 text-center">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMobile">&#9776;</button>
					<a href="./"><h1><?=$Wcms->get('config','siteTitle')?></h1></a>
				</div>
			</div>
			<div class="col-sm-7 text-center">
				<div class="collapse navbar-collapse" id="navMobile">
					<ul class="nav navbar-nav navbar-right">
						<?=$Wcms->menu()?>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="col-xs-12 col-sm-8">
			<div class="whiteBackground grayFont padding20 rounded5">
				<?=$Wcms->page('content')?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="visible-xs spacer20"></div>
			<div class="blueBackground padding20 rounded5">
				<?=$Wcms->block('subside')?>
			</div>
		</div>
	</div>

	<footer class="container-fluid">
		<div class="padding20 text-right">
			<?=$Wcms->footer()?>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.autosize/3.0.17/autosize.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?=$Wcms->js()?>
</body>
</html>

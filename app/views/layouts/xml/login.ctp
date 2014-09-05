<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title>
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			// <!-- META -->
			// <meta charset="utf-8">
			echo $this->Html->charset('utf-8');
			// <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->


			// <meta name="description" content="">
			echo $this->Html->meta(array('name' => 'description', 'content' => ''));

			// <meta name="author" content="">
			echo $this->Html->meta(array('name' => 'author', 'content' => 'sincomillas'));

			// <!-- Use the correct meta names below for your web application
			// 	 Ref: http://davidbcalhoun.com/2010/viewport-metatag -->
				 
			// <!-- <meta name="HandheldFriendly" content="True"> -->
			//echo $this->Html->meta(array('name' => 'HandheldFriendly', 'content' => 'True'));
			
			// <!-- <meta name="MobileOptimized" content="320">-->
			//echo $this->Html->meta(array('name' => 'MobileOptimized', 'content' => '320'));
			
			// <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
			echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'));


			//======CAKE PHP Specific code=====
			//Código para que se puedan cargar los css y los scripts desde las vistas
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
			//================================
		
		
			// <!-- Basic Styles -->
			// <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
			// <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">
			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('font-awesome.min');

			// <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
			// <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.css">
			// <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.css">
			echo $this->Html->css('smartadmin-production.css');
			echo $this->Html->css('smartadmin-skins.css');

			// <!-- SmartAdmin RTL Support is under construction
			// <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.css"> -->
			//echo $this->Html->css('smartadmin-rtl');

			// <!-- We recommend you use "your_style.css" to override SmartAdmin
			//      specific styles this will also ensure you retrain your customization with each SmartAdmin update.
			// <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->
			echo $this->Html->css('miestilo');


			// <!-- FAVICONS -->
			// <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
			// <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
			echo $this->Html->meta('favicon.ico','img/favicon/favicon.ico',array('type'=>'icon'));

			// <!-- GOOGLE FONT -->
			// <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
			echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700');
		?>
	</head>
	<body id="login" class="animated fadeInDown">
		<!-- possible classes: minified, no-right-panel, fixed-ribbon, fixed-header, fixed-width-->
		<header id="header">

			<div id="logo-group">
				<span id="logo"> <?php echo $this->Html->image('logo.png',array('alt'=>'El Rodeo S.A.')); ?></span>
			</div>


		</header>

		<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content" class="container">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>

			</div>

		</div>

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

	<?php 

		// <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		// <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		// <script>
		// 	if (!window.jQuery) {
		// 		document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
		// 	}
		// </script>

		// <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		// <script>
		// 	if (!window.jQuery.ui) {
		// 		document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
		// 	}
		// </script>



		// JQUERY
		// No se usan los scripts bajados de gooleapis comentados mas arriba
		echo $this->Html->script('libs/jquery-2.0.2.min');
		echo $this->Html->script('libs/jquery-ui-1.10.3.min');


		// JS TOUCH : include this plugin for mobile drag / drop touch events
		// <script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>
		//$this->Html->script('plugin/jquery-touch/jquery.ui.touch-punch.min');

		// <!-- BOOTSTRAP JS -->
		// <!-- <script src="js/bootstrap/bootstrap.min.js"></script> -->
		echo $this->Html->script('bootstrap/bootstrap.min');

		// <!-- CUSTOM NOTIFICATION -->
		// <!-- <script src="js/notification/SmartNotification.min.js"></script> -->
		echo $this->Html->script('notification/SmartNotification.min');

		// <!-- JARVIS WIDGETS -->
		// <!-- <script src="js/smartwidgets/jarvis.widget.min.js"></script> -->
		echo $this->Html->script('smartwidgets/jarvis.widget.min');

		// <!-- EASY PIE CHARTS -->
		// <!-- <script src="js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>-->
		echo $this->Html->script('plugin/easy-pie-chart/jquery.easy-pie-chart.min');

		// <!-- SPARKLINES -->
		// <!-- <script src="js/plugin/sparkline/jquery.sparkline.min.js"></script>-->
		echo $this->Html->script('plugin/sparkline/jquery.sparkline.min');		


		// <!-- JQUERY VALIDATE -->
		// <!-- <script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>-->
		echo $this->Html->script('plugin/jquery-validate/jquery.validate.min');

		// <!-- JQUERY MASKED INPUT -->
		// <!-- <script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>-->
		echo $this->Html->script('plugin/masked-input/jquery.maskedinput.min');

		// <!-- JQUERY SELECT2 INPUT -->
		// <!-- <script src="js/plugin/select2/select2.min.js"></script>-->
		echo $this->Html->script('plugin/select2/select2.min');

		// <!-- JQUERY UI + Bootstrap Slider -->
		// <!-- <script src="js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>-->
		echo $this->Html->script('plugin/bootstrap-slider/bootstrap-slider.min');

		// <!-- browser msie issue fix -->
		// <!-- <script src="js/plugin/msie-fix/jquery.mb.browser.min.js"></script>-->
		echo $this->Html->script('plugin/msie-fix/jquery.mb.browser.min');

		// <!-- FastClick: For mobile devices -->
		// <!-- <script src="js/plugin/fastclick/fastclick.js"></script>-->
		echo $this->Html->script('plugin/fastclick/fastclick');
	?>
		
		<!--[if IE 7]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->
		<?php
		// <!-- MAIN APP JS FILE -->
		// <script src="js/app.js"></script>
			echo $this->Html->script('app');
		?>

		<!-- PAGE RELATED PLUGIN(S) 
		<script src="..."></script>-->

		

		<script type="text/javascript">
			runAllForms();

			$(function() {
				// Validation
				$("#login-form").validate({
					// Rules for form validation
					rules : {
						"data[User][username]" : {
							required : true,
						},
						"data[User][password]" : {
							required : true,
						}
					},

					// Messages for form validation
					messages : {
						"data[User][username]" : {
							required : 'Favor ingresar un usuario válido',
						},
						"data[User][password]" : {
							required : 'Ingrese su contraseña',
						}
					},

					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});
			});
		</script>


	</body>

</html>
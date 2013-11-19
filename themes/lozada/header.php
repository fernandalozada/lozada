<!doctype html>
<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
		<title>|| Lozada</title>
	</head>
	<body>
		<div id='linea'>
		</div>
		<div id='wrapper'>
			<?php if(!is_home()) {  ?>
			<div id='sidebar'>
				<img id='logoside' src="<?php bloginfo('template_url'); ?>/Images/logo_N_web.png">
				<nav>
					<ul id='sidemenu'>
						<li><a href="<?php bloginfo('url');?>/">MAIN</a></li>
						<li><a href="<?php bloginfo('url');?>/about">ABOUT</a></li>
						<li><a href="<?php bloginfo('url');?>/category/motion">MOTION</a></li>
						<li><a href="<?php bloginfo('url');?>/category/interactivo">INTERACTIVO</a></li>
						<li><a href="<?php bloginfo('url');?>/category/grafico">GRÁFICO</a></li>
					</ul>
				</nav>
			</div> <!--END SIDEBAR -->

			<?php } ?>
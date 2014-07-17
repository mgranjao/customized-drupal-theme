<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <?php if ($default_mobile_metatags): ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width">
  <?php endif; ?>
  <meta http-equiv="cleartype" content="on">

  <?php print $styles; ?>
  <?php print $scripts; ?>
  <?php if ($add_html5_shim and !$add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5.js"></script>
    <![endif]-->
  <?php elseif ($add_html5_shim and $add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5-respond.js"></script>
    <![endif]-->
  <?php elseif ($add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/respond.js"></script>
    <![endif]-->
  <?php endif; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php if ($skip_link_text && $skip_link_anchor): ?>
    <p id="skip-link">
      <a href="#<?php print $skip_link_anchor; ?>" class="element-invisible element-focusable"><?php print $skip_link_text; ?></a>
    </p>
  <?php endif; ?>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>



<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8"/>
</head>
<body>
	<div class="head">
		<div class="container">
			<a class="logo_link" href="home.html"><div class="logo"></div></a>
				<ul class="menu">
					<li class="menu-item activo" id="menu-item-1"><a href="http://codyware.com/anima/salaverry/quienes-somos/">Inicio</a></li>
					<li class="menu-item"id="menu-item-2"><a href="http://codyware.com/anima/salaverry/tour-virtual/">Acerca de</a></li>
					<li class="menu-item menu-item-has-children " id="menu-item-3"><a href="#">Contenidos</a>
						<ul class="sub-menu">
							<li class="menu-item" id="menu-item-6"><a href="http://codyware.com/anima/salaverry/nuevos/">Productos del Seguro de Vida</a></li>
							<li class="menu-item" id="menu-item-7"><a href="http://codyware.com/anima/salaverry/quinta-antonella/">Derechos y Obligaciones</a></li>
							<li class="menu-item" id="menu-item-8"><a href="http://codyware.com/anima/salaverry/salaverry-i/">Recomendaciones</a></li>
							<li class="menu-item" id="menu-item-9"><a href="http://codyware.com/anima/salaverry/salaverry-ii/">Archivos Descargables</a></li>
						</ul>
				</li>
				<li class="menu-item" id="menu-item-3"><a href="http://codyware.com/anima/salaverry/contacto/">Preguntas Frecuentes</a></li>
				<li class="menu-item" id="menu-item-4"><a href="http://codyware.com/anima/salaverry/contacto/">Glosario</a></li>
				<li class="menu-item" id="menu-item-5"><a href="http://codyware.com/anima/salaverry/contacto/">Contacto</a></li>
				</ul>
		</div>	
	</div>
	<div class="center">
		<div class="container">
			<span class="centrado">
			<h2 class="undeline">Programa de EducaciÃ³n de Seguros</h2>

			<p class="home_text">El Seguro de Vida es una herramienta de protecciÃ³n familiar y empresarial extraordinaria, y es con toda seguridad, una de las adquisiciones mÃ¡s valiosas que usted puede hacer en su vida.</p>	

			</span>	

			<div class="center_imgs">
				<img src="sites/all/themes/vidasegura/img/centro_1.jpg">
				<img src="img/centro_2.jpg">
				<img src="img/centro_3.jpg">
				<img src="img/centro_4.jpg">

			</div>



		</div>


	</div>
	<div class="lower">
		<div class="container">
			<div class="lower_info">
				<h3>Sobre "Vida Segura"</h3>

				<span><strong>â€œVIDA SEGURAâ€�</strong> es un programa, desarrollado por Equivida S.A., que pretende ayudar  a todo el pÃºblico en general a mejorar la comprensiÃ³n del Seguro de Vida, de tal modo que pueda acceder a uno de los milagros financieros  y sociales mÃ¡s grandes de nuestro tiempo, con un conocimiento fundamental del mismo.<br><br>
                <strong>â€œVIDA SEGURAâ€�</strong> incluye, entre otras, una secciÃ³n para que usted pueda enviarnos cualquier pregunta que le oriente en el tema del Seguro de Vida y le permita tomar una decisiÃ³n acertada y adecuada a sus necesidades especÃ­ficas. </span>		

                <a class="fw_link" href="#"><p>MÃ¡s InformaciÃ³n</p></a>		

			</div>	

			<div class="lower_info">
				<h3>Consulta al Experto</h3>	


				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.<br><br>

				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</span>

				<a class="fw_link" href="#"><p>EnvÃ­a un correo a un experto</p></a>	





			</div>

			<div class="lower_info">
				<h3>NewsLetter</h3>

				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span><br><br>
				<strong>Email:</strong> <input class="email" type="text">
				<br><br>
				<a class="fw_link" href="#"><p>RegÃ­strarse</p></a>	


				
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
						<ul class="menu_footer">
					<li class="menu-item activo" id="menu-item-1"><a href="#">Inicio</a></li>
					<li class="menu-item" id="menu-item-2"><a href="#">Acerca de</a></li>
					<li class="menu-item" id="menu-item-3"><a href="#">Contenidos</a></li>
				<li class="menu-item" id="menu-item-3"><a href="#">Preguntas Frecuentes</a></li>
				<li class="menu-item" id="menu-item-4"><a href="#">Glosario</a></li>
				<li class="menu-item" id="menu-item-5"><a href="#">Contacto</a></li>
				</ul>

				<div class="sponsor"><span>Auspiciado por:</span><img src="img/equivida.jpg"></div>

		</div> 		
	</div>

</body>
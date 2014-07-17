


<div class="head">
		<div class="container">
			<a class="logo_link" href="index.php"><div class="logo"> <img src="<?=$base_path."/".$directory?>/img/logo.png" /></div></a>
				<ul class="menu">
				<!--	<li class="menu-item activo" id="menu-item-1"><a href="http://codyware.com/anima/salaverry/quienes-somos/">Inicio</a></li>
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
                                    -->
                                     
                                    <?php echo ($page['header']['nice_menus_1']['#markup']); ?>
    </ul>
		</div>	
	</div>

<?php $node = menu_get_object(); ?> 
<?php if($node->title == "Home"){ //Nodo 9 = Home ?> <?php //echo "<pre>"; ?> <?php //print_r($node) ?>
 
	<div class="center">
		<div class="container">
			<span class="centrado">
			<h2 class="underline">Programa de Educación de Seguros</h2>

			<p class="home_text">El Seguro de Vida es una herramienta de protección familiar y empresarial extraordinaria, y es con toda seguridad, una de las adquisiciones m&aacute;s valiosas que usted puede hacer en su vida.</p>	

			</span>	

			<div class="center_imgs">
				<!--<img src="sites/all/themes/vidasegura/img/centro_1.jpg">-->
                              
<!-- 
  <?php echo ($page['content']['block_2']['#markup']); ?>
	-->			
					<div class="banner"> <a href="productos-del-seguro-de-equivida"class="uno"> </a> </div>
					<div class="banner"> <a href="derechos-y-obligaciones"class="dos"> </a></div>
					<div class="banner"><a href="recomendaciones"class="tres"> </a></div>
					<div class="banner"><a href="http://<?=$base_path?>"class="cuatro"> </a></div>
					
			</div>



		</div>


	</div>

	<div class="lower">
		<div class="container">
			
			<div class="lower_info">
			<?php echo ($page['content']['block_3']['#markup']); ?>	

			</div>	

			<div class="lower_info">
			<?php echo ($page['content']['block_4']['#markup']); ?>	
			
			<form action="/" method="post" id="consulta_experto" accept-charset="utf-8">
				<p>
				<label>Nombre:</label>
				<input type="text" name="name" value="" id="name" class="required">
				</p>
				
				<p>
				<label>Email:</label>
				<input type="text" name="email" value="" id="email"  class="required email">
				</p>
				
				
				<p>
					<label>Mensaje:</label>
					<textarea name="mensaje" id="mensaje"  class="required"></textarea>
				</p>
				<p>
				<a class="more submit_consulta" href="#enviar" >Enviar un correo a un experto</a>
			</p>
			</form>
			
			</div>

			<div class="lower_info">
             <?php echo ($page['content']['block_5']['#markup']); ?>	
			<?php //echo ($page['content']['webform_client-block-13']['#markup']); ?>	
				
				<form action="/" method="post" id="newsletter" accept-charset="utf-8">
				<p>
				<label>Nombre:</label>
				<input type="text" name="name" value="" id="name" class="required">
				</p>
				
				<p>
				<label>Email:</label>
				<input type="text" name="email" value="" id="email" class="required email">
				</p>

				<p>
				<a class="more newsletter" href="#enviar">Registrarse</a>
				</p>

			</form>
			


			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
						<ul class="menu_footer">
					<li class="menu-item activo" id="menu-item-1"><a href="/">Inicio</a></li>
					<li class="menu-item" id="menu-item-2"><a href="acerca-de">Acerca de</a></li>
					<li class="menu-item" id="menu-item-3"><a href="contenidos">Contenidos</a></li>
				<li class="menu-item" id="menu-item-3"><a href="preguntas-frecuentes">Preguntas Frecuentes</a></li>
				<li class="menu-item" id="menu-item-4"><a href="glosario">Glosario</a></li>
				<li class="menu-item" id="menu-item-5"><a href="contacto">Contacto</a></li>
				</ul>

				<div class="sponsor"><span>Desarrollado por:</span><img src="sites/all/themes/vidasegura/img/equivida.jpg"></div>

		</div> 		
	</div>
<?php } else {?>
<div class="center_acerca">
		<div class="container">
			
		<h4><?php print $title; ?></h4>			
		<div class="page_img"></div>






		</div>


	</div>
	<div class="lower_acerca">
		<div class="container">
		


                        <div class="side_productos">
						<?php print render($page['content']); ?>

						</div>
                        <div class="indice">


                     

                        	


                            <?php echo($page['sidebar_first']['block_6']['#markup']); ?>
                            <?php echo($page['sidebar_first']['block_7']['#markup']); ?>
                            <?php echo($page['sidebar_first']['block_1']['#markup']); ?>
                            <?php echo($page['sidebar_first']['4']['#markup']); ?>
						</div>
                    


		</div>
	</div>
	<div class="footer">
		<div class="container">
						<ul class="menu_footer">
					<li class="menu-item" id="menu-item-1"><a href="/">Inicio</a></li>
					<li class="menu-item" id="menu-item-2"><a href="acerca-de">Acerca de</a></li>
					<li class="menu-item" id="menu-item-3"><a href="contenidos">Contenidos</a></li>
				<li class="menu-item" id="menu-item-3"><a href="preguntas-frecuentes">Preguntas Frecuentes</a></li>
				<li class="menu-item" id="menu-item-4"><a href="glosario">Glosario</a></li>
				<li class="menu-item" id="menu-item-5"><a href="contacto">Contacto</a></li>
				</ul>

				<div class="sponsor"><span>Desarrollado:</span><img src="sites/all/themes/vidasegura/img/equivida.jpg"></div>

		</div> 		
	</div>

<?php } ?>

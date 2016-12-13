<?php
 
/*
 
* Plugin Name: Perfil experto
 
* Description: Muestra la foto, el correo y tres vínculos de una persona dentro de un post
 
* Version: 1.2
 
* Author: Santiago Yepes
 
* Author URI: http://zetoslab.com
 
*/
 
function perfil_experto_function($atts){

	$a = shortcode_atts( array(
		'ancho' => '100', //100 o 50
		'varios_en_linea' => '', //Vacío o varios_en_linea
		'img' => '',
		'nombre' => '',
		'correo' => '',
		'descripcion' => '',
		'link_titulo'=> '#',
		'texto_link_1'=>'',
		'link_1'=>'',
		'texto_link_2'=>'',
		'link_2'=>'',
		'texto_link_3'=>'',
		'link_3'=>''
	), $atts );
 
	?>
		<div class="pe perfil_experto ancho<?php echo $a['ancho'] ?> <?php echo $a['varios_en_linea'] ?>" width="<?php echo $a['ancho'] ?>">
			<div class="pe pe_info_basica">
				<div class="pe pe_contenedor_img">
					<img src="<?php echo $a['img'] ?>">
				</div>
				<div class="pe pe_texto_info_basica">
					<a href="<?php echo $a['link_titulo'] ?>"><h4 class="pe pe_nombre"><?php echo $a['nombre']; ?></h4></a>
					<a class="pe pe_correo" style="text-decoration:none;" href="#">
						<?php
							if($a['correo']!=''){
								echo $a['correo'];
							}
						?>
					</a>
					<p class="pe pe_descripcion"><?php echo $a['descripcion'] ?></p>
				</div>
			</div>
			<hr class="pe">
			<div class="pe pe_enlaces">
				<ul class="pe pe_ul_enlaces">
						<?php
							if($a['texto_link_1']!=''){
								?>
									<li class="pe"><a target="_blank" href="<?php echo $a['link_1']?>" class="pe pe_enlace"><?php echo $a['texto_link_1']?></a></li>
								<?php
							}
						?>
						<?php
							if($a['texto_link_2']!=''){
								?>
									<li class="pe"><a target="_blank" href="<?php echo $a['link_2']?>" class="pe pe_enlace"><?php echo $a['texto_link_2']?></a></li>
								<?php
							}
						?>
						<?php
							if($a['texto_link_3']!=''){
								?>
									<li class="pe"><a target="_blank" href="<?php echo $a['link_3']?>" class="pe pe_enlace"><?php echo $a['texto_link_3']?></a></li>
								<?php
							}
						?>
				</ul>
			</div>
		</div>
	<?php
 
}
 

add_shortcode('perfil_experto', 'perfil_experto_function');

add_action( 'wp_enqueue_scripts', 'registrar_estilos_plugin' );

function registrar_estilos_plugin() {
	wp_register_style( 'perfil_experto', plugins_url( 'perfil_experto/css/estilos.css' ) );
	wp_enqueue_style( 'perfil_experto' );
}
?>

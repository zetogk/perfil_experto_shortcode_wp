<style type="text/css">

	.pe{
		margin:0;
		padding:0;
	}

	a.pe{
		text-decoration: none !important;
	}

	hr.pe{
		margin:10px 0;
	}

	.perfil_experto{
		background: #E7E7E7;
		border:1px solid #C5C5C5;
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px;
		padding:1em;
	}

	.pe_contenedor_img, .pe_texto_info_basica{
		display: inline-block;
		vertical-align:middle;
	}

	.pe_contenedor_img{
		height:100px;
		width:100px;
	}

	.pe_contenedor_img > img{
		-webkit-border-radius: 100%;
		-moz-border-radius: 100%;
		border-radius: 100%;
	}

	.pe_texto_info_basica{
		padding-left:1em;
	}

	h4.pe_nombre{
		margin:0 !important;
		padding:0 !important;
	}

	a.pe_correo{
		color:black;
		font-size: 0.75em;
		text-decoration: none !important;
	}

	p.pe_descripcion{
		font-size: 0.75em;
		margin:0;
	}

	.pe_ul_enlaces{

	}

	.pe_ul_enlaces li{
		display:inline-block;
		margin: auto 0.5em;
	}

	a.pe_enlace {
		text-decoration-line: none;
		font-size: 0.75em;
	}

</style>

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
		'img' => 'http://lorempixel.com/200/200/people',
		'nombre' => '',
		'correo' => '',
		'descripcion' => '',
		'texto_link_1'=>'',
		'link_1'=>'',
		'texto_link_2'=>'',
		'link_2'=>'',
		'texto_link_3'=>'',
		'link_3'=>''
	), $atts );
 
	?>
		<div class="pe perfil_experto">
			<div class="pe pe_info_basica">
				<div class="pe pe_contenedor_img">
					<img src="<?php echo $a['img'] ?>">
				</div>
				<div class="pe pe_texto_info_basica">
					<h4 class="pe pe_nombre"><?php echo $a['nombre']; ?></h4>
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

 
?>


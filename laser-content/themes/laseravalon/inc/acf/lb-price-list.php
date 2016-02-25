<?php 

/* LISTADO DE PRECIOS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
if( get_row_layout() == 'precios_productos' ){ 

	$titulo = get_sub_field('titulo_modulo');
	$productos = get_sub_field('producto');

	$wrapper = get_sub_field('precio_wrapper');
	$columns = get_sub_field('columnas_precios');
		

	//var_dump($productos);
	?>
	<section class="price-list">
		<?php // Wrapper ?>
		<?php if( !$wrapper ): ?>
			<div class="wrapper">
		<?php endif; ?>
			<h2><?php echo $titulo; ?></h2>
			
			<div class="clearfix">
				
				<?php foreach( $productos as $producto): ?>

					<?php 
					$term = wp_get_object_terms( $producto->ID, 'tipo_prod');
					$sex = wp_get_object_terms( $producto->ID, 'sexo');
					
					$price_layout = 'price-layout__' . $term[0]->slug;
					$sex_layout = 'sex-layout__' . $sex[0]->slug;

					$zonas = wp_get_object_terms( $producto->ID, 'body_areas');
					$precio1 = get_field('precio_1_sesion', $producto->ID);
					$precio5 = get_field('precio_5_sesiones', $producto->ID);
					?>

					<div class="column <?php echo $columns; ?>">
						<div class="<?php echo $price_layout; ?> <?php echo $sex_layout; ?>">
						
							<h3><?php echo $producto->post_title; ?></h3>
							<div class="zonas">	
								<div>
									<?php foreach ($zonas as $zona): ?> 
										<p><?php echo $zona->name;?></p>
									<?php endforeach; ?>
								</div>
							</div>
						

							<?php if($precio1 || $precio5): ?>
							<div class="precio">

								<?php if($precio1): ?>
									<p><span><?php _e( '1 Sesión: ', 'byadr');?></span><strong><?php echo $precio1 . '€'; ?></strong></p>
								<?php endif; ?>
								<?php if($precio5): ?>
									<p><span><?php _e( '5 Sesiones: ', 'byadr');?></span><strong><?php echo $precio5 . '€'; ?></strong></p>
								<?php endif; ?>

							</div>
							<?php endif; ?>
						</div>
					</div >

	
				<?php endforeach; ?>

			</div>
		<?php // Fin wrapper ?>
		<?php if( !$wrapper ): ?>
			</div>
		<?php endif; ?>
	</section>

	<?php 
}	


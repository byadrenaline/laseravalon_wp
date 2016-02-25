<?php 

/* ZONAS DEPILACION
–––––––––––––––––––––––––––––––––––––––––––––––––– */
if( get_row_layout() == 'icon-list' ){ 

	$columns = get_sub_field('columnas_iconos');
	
	?>

	
	
	<section class="icon-list">
		<?php if( !$wrapper ): ?>
			<div class="wrapper">
		<?php endif; ?>
		
			<div class="clearfix">
				<?php if(have_rows('listado_iconos')): while(have_rows('listado_iconos')):the_row(); ?>
				<?php 
					$icono = get_sub_field('tipo_icono');
					$titulo = get_sub_field('titulo_icono');
					$descripcion = get_sub_field('descripcion_icono');

				?>
				<div class="cols <?php echo $columns; ?>">
					
					<div class="icon--item <?php echo $icono; ?>"></div>
					
					<p><strong><?php echo $titulo; ?></strong><br><?php echo $descripcion; ?></p>
	

				</div>

				<?php endwhile; endif; ?>
			</div>

		<?php // Fin wrapper ?>
		<?php if( !$wrapper ): ?>
			</div>
		<?php endif; ?>
	</section>


	<?php
}	
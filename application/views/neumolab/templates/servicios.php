<section class="container-fluid">
	<div class="row">
		<div id="carousel-servicios" class="carousel slide carousel-completo" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<?php foreach ($infoServicioSlider as $slide): ?>
					<div class="item">
						<?php $rutaImgContenido = 'assets/neumos/contenido/' . $slide["imagen"] ; ?>
						<img src="<?php echo base_url($rutaImgContenido); ?>" title="" alt="<?php echo $slide['descripcion']; ?>" class="img-responsive obj-centrar" />
					</div>	
				<?php endforeach ?>
			</div>

			<?php /*

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-servicios" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-servicios" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			*/ ?>
		</div>
	</div>
</section>
<?php $item = 1; ?>
<?php foreach ($servicios as $servicio): ?>
	<section class="container-fluid fondo-azul-marino">
		<div class="row">&nbsp;</div>
		<div class="row fondo-blanco">
			<div class="col-md-4 col-md-offset-2 text-center">
				<?php if ($item%2 == 0): ?>
					<h3 class="text-center">
						<?php echo anchor('site/servicioDetalle/' . $servicio['id'], $servicio['nombre'] , array('class' => 'txt-mayus txt-bold  txt-naranja') ); ?>
					</h3>
					<p class="text-justify parrafo-acceso-2 txt-azul-marino">
						<?php echo $servicio["descripcion"]; ?>
					</p>
				<?php else: ?>
					<br />
					<?php $rutaImgServicio = 'assets/neumos/servicio/' . $servicio["imagen"] ; ?>
					<img src="<?php echo base_url($rutaImgServicio); ?>" title="" alt="" class="img-responsive obj-centrar" />
					<br />
				<?php endif ?>
			</div>
			<div class="col-md-4 text-center">
				<?php if ($item%2 == 0): ?>
					<br />
					<?php $rutaImgServicio = 'assets/neumos/servicio/' . $servicio["imagen"] ; ?>
					<img src="<?php echo base_url($rutaImgServicio); ?>" title="" alt="" class="img-responsive obj-centrar" />
					<br />
				<?php else: ?>
					<h3 class="text-center txt-naranja">
						<?php echo anchor('site/servicioDetalle/' . $servicio['id'], $servicio['nombre'] , array('class' => 'txt-mayus txt-bold  txt-naranja') ); ?>
					</h3>
					<p class="text-justify parrafo-acceso-2 txt-azul-marino">
						<?php echo $servicio["descripcion"]; ?>
					</p>
				<?php endif ?>
			</div>
		</div>
	</section>
	<?php $item++; ?>
<?php endforeach ?>
<div class="container-fluid fondo-amarillo titular-seccion">
	<div class="row espaciado-2">
		<div class="col-md-12 text-center">
			<h1 class="txt-blanco txt-bold"><?php echo $servicio->nombre; ?></h1>
		</div>
	</div>
</div>

<section class="container-fluid fondo-blanco">
	<div class="row espaciado-1">
		<div class="col-sm-8 col-sm-offset-2">
			<?php $rutaImgServicio = 'assets/neumos/servicio/' . $servicio->imagen ; ?>
			<img src="<?php echo base_url($rutaImgServicio); ?>" title="" alt="<?php echo $servicio->nombre; ?>" class="img-responsive obj-centrar" />
			<br />
			<div class="txt-azul-marino">
				<?php echo $servicio->detalle; ?>
			</div>
		</div>
	</div>
	<div class="row espaciado-1">
		<div class="col-sm-2">
			&nbsp;
		</div>
		<?php if ($servicio->foto1): ?>
			<div class="col-sm-4">
				<?php $rutaFoto = 'assets/neumos/servicio/' . $servicio->foto1 ; ?>
				<img src="<?php echo base_url($rutaFoto); ?>" title="" alt="" class="img-responsive obj-centrar" />
			</div>
		<?php endif ?>
		<?php if ($servicio->foto2): ?>
			<div class="col-sm-4">
				<?php $rutaFoto = 'assets/neumos/servicio/' . $servicio->foto2 ; ?>
				<img src="<?php echo base_url($rutaFoto); ?>" title="" alt="" class="img-responsive obj-centrar" />
			</div>
		<?php endif ?>
	</div>
	<div class="row espaciado-1">
		<?php if ($servicio->lista): ?>
			<div class="col-sm-4 col-sm-offset-4 text">
				<div class="txt-azul-marino">
					<?php echo $servicio->lista; ?>
				</div>
					
			</div>
		<?php endif ?>
	</div>
</section>
<section class="container-fluid">
	<div class="row">
		<div id="carousel-somos" class="carousel slide carousel-completo" data-ride="carousel">
			<?php /*

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-somos" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-somos" data-slide-to="1"></li>
				<li data-target="#carousel-somos" data-slide-to="2"></li>
			</ol>

			*/ ?>
 			

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo base_url('public/images/somos.jpg'); ?>" alt="" class="img-responsive">
				</div>
			</div>

			<?php /*

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-somos" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-somos" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			*/ ?>
		</div>
	</div>
</section>

<section class="container-fluid fondo-blanco">
	<div class="row espaciado-3 fondo-blanco">
		<?php  ?>
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-5 text-center">
			<br />			
			<?php $rutaImgInstitucion = 'assets/neumos/quienessomos/' . $institucion->imagen ; ?>
			<img src="<?php echo base_url($rutaImgInstitucion); ?>" title="" alt="<?php echo $institucion->nombre; ?>" class="img-responsive obj-centrar" />
			<br />
		</div>
		<div class="col-md-3 text-center">
			<h3 class="text-center txt-naranja txt-bold txt-mayus">
				<?php echo $institucion->nombre; ?>
			</h3>
			<p class="text-justify parrafo-acceso-2 txt-azul-marino">
				<?php echo $institucion->descripcion; ?>
			</p>
		</div>
		<div class="col-md-2">&nbsp;</div>
	</div>
</section>


<section class="container-fluid fondo-parallax" id="seccion-info">

	<div class="row espaciado-3 fondo-azul-marino">
		<h1 class="text-center titulo-acceso txt-naranja"><?php echo $mision->nombre; ?></h1>
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-8 col-sm-8 text-center">
			<p class="text-center txt-blanco parrafo-acceso">
				<?php echo $mision->descripcion; ?>
			</p>
		</div>
		<div class="col-md-2">&nbsp;</div>
	</div>

	<div class="row espaciado-3">
		<br /><br /><br /><br /><br /><br />
	</div>

	<div class="row espaciado-3 fondo-amarillo">
		<h1 class="text-center titulo-acceso txt-azul-marino"><?php echo $vision->nombre; ?></h1>
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-8 col-sm-8 text-center">
			<p class="text-center txt-blanco parrafo-acceso">
				<?php echo $vision->descripcion; ?>
			</p>
		</div>
		<div class="col-md-2">&nbsp;</div>
	</div>

	<div class="row espaciado-3">
		<br /><br /><br /><br /><br /><br />
	</div>

	<div class="row espaciado-3 fondo-azul-marino">
		<h1 class="text-center titulo-acceso txt-naranja"><?php echo $valores->nombre; ?></h1>
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-8 col-sm-8 text-center">
			<p class="text-center txt-blanco parrafo-acceso">
				<?php echo $valores->descripcion; ?>
			</p>
		</div>
		<div class="col-md-2">&nbsp;</div>
	</div>
</section>
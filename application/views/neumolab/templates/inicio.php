<section class="container-fluid">
	<div class="row">
		<div id="carousel-inicio" class="carousel slide carousel-completo" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<?php foreach ($neumolabslider as $neumolabslide): ?>
					<div class="item">
						<?php $rutaImgContenido = 'assets/neumos/contenido/' . $neumolabslide["imagen"] ; ?>
						<img src="<?php echo base_url($rutaImgContenido); ?>" title="" alt="<?php echo $neumolabslide['descripcion']; ?>" class="img-responsive obj-centrar" />
					</div>	
				<?php endforeach ?>
			</div>

			<?php /*

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-inicio" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-inicio" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			*/ ?>
		</div>
	</div>
</section>

<section class="container-fluid fondo-azul-marino">
	<div class="row espaciado-3">
		<h1 class="text-center titulo-acceso txt-naranja"><?php echo $neumolab->nombre; ?></h1>
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-8 col-sm-8 text-center">
			<div class="text-center txt-blanco parrafo-acceso">
				<?php echo $neumolab->descripcion; ?>
			</div>
		</div>
		<div class="col-md-2">&nbsp;</div>
	</div>
</section>

<section class="container-fluid fondo-parallax" id="seccion-servicios">
	<div class="row espaciado-3">
		<h1 class="text-center titulo-acceso txt-naranja">Nuestros Servicios</h1>
		<div class="col-md-1">&nbsp;</div>
		<?php foreach ($servicios as $servicio): ?>
			<div class="col-md-2 col-sm-2 text-center txt-blanco">
				<strong><?php echo $servicio["nombre"]; ?></strong>
				<div class="text-justify">
					<?php echo $servicio["descripcion"]; ?>
				</div>
			</div>	
		<?php endforeach ?>
		<div class="col-md-1">&nbsp;</div>
	</div>


	<div class="row espaciado-3 fondo-blanco">
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-3 text-center">
			<h4 class="text-center txt-naranja">
				<strong>ÚLTIMA NOTICIA</strong>
			</h4>
			<p class="text-justify parrafo-acceso-2 txt-azul-marino">
				Proin eu ante commodo, scelerisque est vel, ullamcorper nunc. Sed euismod cursus porttitor. Donec quis risus fringilla, vehicula felis id, facilisis neque. Nam fringilla at erat vitae pellentesque. Donec malesuada orci sed justo placerat hendrerit. Ut porttitor ipsum nunc, et tempor augue maximus quis. Quisque ultricies dictum semper.
			</p>
		</div>
		<div class="col-md-5 text-center">
			<br />
			
			<img src="<?php echo base_url('public/images/home4.png'); ?>" title="" alt="" class="img-responsive obj-centrar" />
			
			<br />
		</div>
		<div class="col-md-2">&nbsp;</div>
	</div>

	<div class="row espaciado-3">
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-3 text-center txt-blanco">
			<p class="text-justify">
				Sed vulputate, massa non consectetur ultricies, dui arcu elementum lorem, et dapibus lectus eros in dui. Suspendisse potenti. Nulla risus tortor, consectetur ultrices laoreet et, maximus eu augue. Suspendisse molestie mi eu tristique tincidunt. Aliquam vestibulum dolor eget diam placerat iaculis. Curabitur ut diam aliquet, sollicitudin augue at, pulvinar sapien. Nullam dui urna, vehicula in lorem vel, aliquam volutpat quam.
			</p>
		</div>
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-3 text-center txt-blanco">
			<p class="text-justify">
				Sed vulputate, massa non consectetur ultricies, dui arcu elementum lorem, et dapibus lectus eros in dui. Suspendisse potenti. Nulla risus tortor, consectetur ultrices laoreet et, maximus eu augue. Suspendisse molestie mi eu tristique tincidunt. Aliquam vestibulum dolor eget diam placerat iaculis. Curabitur ut diam aliquet, sollicitudin augue at, pulvinar sapien. Nullam dui urna, vehicula in lorem vel, aliquam volutpat quam.
			</p>
		</div>
		<div class="col-md-2">&nbsp;</div>
	</div>
</section>

<section class="container-fluid">
	<div class="row espaciado-3">
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-5 text-center">
			<br />
			<iframe width="400" height="285" src="https://www.youtube.com/embed/z9ebtjvkFm8" frameborder="0" allowfullscreen></iframe>
			<br />
		</div>
		<div class="col-md-3 text-center">
			<h4 class="text-center txt-naranja">
				<strong>ACTIVIDADES</strong>
			</h4>
			<p class="text-justify parrafo-acceso-2 txt-azul-marino">
				Sed vulputate, massa non consectetur ultricies, dui arcu elementum lorem, et dapibus lectus eros in dui. Proin eu ante commodo, scelerisque est vel, ullamcorper nunc. Sed euismod cursus porttitor. Donec quis risus fringilla, vehicula felis id, facilisis neque. Nam fringilla at erat vitae pellentesque. Donec malesuada orci sed justo placerat hendrerit. Ut porttitor ipsum nunc, et tempor augue maximus quis. Quisque ultricies dictum semper.
			</p>
		</div>
		<div class="col-md-2">&nbsp;</div>
	</div>
</section> 

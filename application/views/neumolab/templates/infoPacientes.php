<section class="container-fluid">
	<div class="row">
		<div id="carousel-somos" class="carousel slide carousel-completo" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			
				<?php foreach ($infoPacienteSlider as $slide): ?>
					<div class="item">
						<?php $rutaImgContenido = 'assets/neumos/contenido/' . $slide["imagen"] ; ?>
						<img src="<?php echo base_url($rutaImgContenido); ?>" title="" alt="<?php echo $slide['descripcion']; ?>" class="img-responsive obj-centrar" />
					</div>	
				<?php endforeach ?>
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
	<div class="row fondo-blanco">
		<div class="col-md-3 col-md-offset-2 fondo-naranja-claro text-center">
			<h2 class="txt-blanco">
				Información General
			</h2>
			<ul class="sin-lista">
				<li>
					<a href="" class="link txt-blanco">
						Cómo hacer citas?
					</a>
				</li>
				<li>
					<a href="" class="link txt-blanco">
						Preparación para los exámenes
					</a>
				</li>
				<li>
					<a href="" class="link txt-blanco">
						Cómo Prevenir Enfermedades
					</a>
				</li>
			</ul>
		</div>
		<div class="col-md-6">
			<h2 class="txt-naranja txt-bold text-center">
				<?php echo $infoPaciente->nombre; ?>
			</h2>
			<div class="txt-azul-marino">
				<?php echo $infoPaciente->descripcion; ?>
			</div>
		</div>
	</div>
</section>


<section class="container-fluid">
	<div class="row espaciado-3 fondo-azul-marino">
		<h1 class="text-center titulo-acceso txt-naranja">Convenios</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-3 txt-blanco">
						<ul>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
						</ul>
					</div>
					<div class="col-md-3 txt-blanco">
						<ul>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
						</ul>
					</div>
					<div class="col-md-3 txt-blanco">
						<ul>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
						</ul>
					</div>
					<div class="col-md-3 txt-blanco">
						<ul>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row espaciado-3 fondo-blanco">
		<h1 class="text-center titulo-acceso txt-naranja">Cómo hacer citas</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-6 txt-azul-marino">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-md-6 txt-azul-marino">
						<ul>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row espaciado-3 fondo-naranja-claro">
		<h1 class="text-center titulo-acceso txt-blanco">Preparación para exámenes</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-6 txt-blanco">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-md-6 txt-blanco">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<div class="row espaciado-3 fondo-blanco">
		<h1 class="text-center titulo-acceso txt-naranja">Cómo prevenir enfermedades</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-3 txt-azul-marino">
						<ul>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
						</ul>
					</div>
					<div class="col-md-3 txt-azul-marino">
						<ul>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
						</ul>
					</div>
					<div class="col-md-3 txt-azul-marino">
						<ul>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
						</ul>
					</div>
					<div class="col-md-3 txt-azul-marino">
						<ul>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
							<li>LoremIpsum</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="row espaciado-3 fondo-azul-marino">
		<h1 class="text-center titulo-acceso txt-blanco">Deberes y derechos del paciente</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-6 txt-blanco">
						<h3>Deberes</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-md-6 txt-blanco">
						<h3>Derechos</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>
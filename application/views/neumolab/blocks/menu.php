<header class="navbar-fixed-top">
	
	<nav class="navbar fondo-verde" id="menu-superior">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-superior">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<p class="navbar-brand hidden-md hidden-lg hidden-sm">
					<span>Institucional</span>
				</p>
			</div>
			<div class="collapse navbar-collapse" id="navbar-superior">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<?php echo anchor('site/quienesSomos', 'Quiénes Somos'); ?>
					</li>
					<li>
						<?php echo anchor('site/infoPacientes', 'Información Pacientes'); ?>
					</li>
					<li>
						<?php echo anchor('site/infoMedicos', 'Información Médicos'); ?>
					</li>
					<li>
						<a href="#">Ingresar</a>
					</li>
					<li>
						<ul class="lista-social">
							<li>
								<a href="#" target="_blank">
									<img src="<?php echo base_url('public/images/ig.png'); ?>" title="" alt="" class="img-responsive img-icono-top" />
								</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<img src="<?php echo base_url('public/images/in.png'); ?>" title="" alt="" class="img-responsive img-icono-top" />
								</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<img src="<?php echo base_url('public/images/fb.png'); ?>" title="" alt="" class="img-responsive img-icono-top" />
								</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<img src="<?php echo base_url('public/images/tw.png'); ?>" title="" alt="" class="img-responsive img-icono-top" />
								</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<img src="<?php echo base_url('public/images/buscar.png'); ?>" title="" alt="" class="img-responsive img-icono-top" />
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<nav class="navbar fondo-blanco" id="menu-secciones">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-secciones">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url('index.php/site/index'); ?>">
					<img src="<?php echo base_url('public/images/logoneumos.png'); ?>" title="" alt="" class="img-responsive img-logo" />
				</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-secciones">
				<ul class="nav navbar-nav  navbar-right">
					<li>
						<?php echo anchor('site/index', 'Inicio'); ?>
					</li>
					<li>
						<?php echo anchor('site/servicios', 'Servicios'); ?>
					</li>
					<li>
						<?php echo anchor('site/galeria', 'Galeria'); ?>
					</li>
					<li>
						<?php echo anchor('site/noticias', 'Noticias'); ?>
					</li>
					<li>
						<?php echo anchor('site/contacto', 'Contáctenos'); ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<nav class="navbar fondo-azul-marino" id="menu-inferior">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-inferior">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<p class="navbar-brand hidden-md hidden-lg hidden-sm">
					<span>Especiales</span>
				</p>
			</div>
			<div class="collapse navbar-collapse" id="navbar-inferior">
				<ul class="nav navbar-nav">
					<li>
						<?php echo anchor('site/consultas', 'Consultas'); ?>
					</li>
					<li>
						<?php echo anchor('site/pulmonar', 'Pruebas de Función Pulmonar'); ?>
					</li>
					<li>
						<?php echo anchor('site/suenio', 'Estudios de Sueño'); ?>
					</li>
					<li>
						<?php echo anchor('site/respiratorio', 'Terapia y Cuidado Respiratorio'); ?>
					</li>
					<li>
						<?php echo anchor('site/especiales', 'Programas Especiales'); ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>


</header>
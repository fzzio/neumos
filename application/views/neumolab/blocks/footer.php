		
		<section class="container-fluid fondo-amarillo">
			<div class="row espaciado-1">
				<div class="col-md-4 col-md-offset-1 text-center">
					<h3 class="txt-blanco">
						<strong>SUSCRÍBETE</strong>
					</h3>
					<p class="txt-blanco">
						Ingresa tu correo y recibe noticias y promociones
					</p>
				</div>
				<div class="col-md-6 espaciado-2">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="correo@dominio.com" />
						<span class="input-group-btn">
							<button class="btn btn-default" type="button" aria-label="send"><span class="glyphicon glyphicon-send" aria-hidden="true"></span></button>
						</span>
					</div><!-- /input-group -->
				</div>
			</div>
		</section>


		<section class="container-fluid fondo-azul-marino" id="footer">
			<div class="container">
				<div class="row espaciado-2">
					<div class="col-md-4 text-center"> 
						<h4>Información de Dirección / Ubicación </h4>
						<br />
						<h4>Información de Teléfonos</h4>
						<br />
						<h4>Información de Correos electrónicos</h4>
					</div>

					<div class="col-md-4 text-center"> 
						<ul class="delfooter foo-menu">
							<li>
								<a href="<?php echo base_url('index.php/site/inicio'); ?>">
									<strong>Inicio</strong>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/site/servicios'); ?>">
									<strong>Servicios</strong>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/site/galeria'); ?>">
									<strong>Galeria</strong>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/site/noticias'); ?>">
									<strong>Noticias</strong>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/site/contacto'); ?>">
									<strong>Contáctenos</strong>
								</a>
							</li>
						</ul>
					</div>

					<div class="col-md-4 text-center">
						<div class="container-fluid">
							<div class="row">
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
								</ul>					
							</div>
							<div class="row">
								<p>Todos los derechos reservados</p>
								<p>Ecuador 2014</p>
							</div>
							<div class="row">
								<div class="col-md-6">
									<a href="">
										Mapa del sitio
									</a>
								</div>
								<div class="col-md-6">
									<a href="">
										Política de Privacidad
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



        <script type="text/javascript" src="<?php echo base_url('public/js/jquery-1.11.2.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
        
        <script type="text/javascript" src="<?php echo base_url('public/js/script.js'); ?>"></script>
    </body>
</html> 

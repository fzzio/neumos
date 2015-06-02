<section class="container-fluid">
	<div class="row">
		<div id="carousel-contacto" class="carousel slide carousel-completo" data-ride="carousel">
			<?php /*

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-contacto" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-contacto" data-slide-to="1"></li>
				<li data-target="#carousel-contacto" data-slide-to="2"></li>
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
			<a class="left carousel-control" href="#carousel-contacto" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-contacto" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			*/ ?>
		</div>
	</div>
</section>

<section class="container-fluid fondo-blanco">
	<div class="row espaciado-3">
		<h1 class="text-center titulo-acceso txt-naranja txt-mayus">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-8 col-sm-8 text-center">
			<p class="text-center txt-azul-marino parrafo-acceso">
				Praesent feugiat quam in lobortis auctor. Pellentesque sodales molestie tortor, a porta nunc iaculis in. Donec id vestibulum justo. Proin eu ante commodo, scelerisque est vel, ullamcorper nunc. Sed euismod cursus porttitor. Donec quis risus fringilla, vehicula felis id, facilisis neque. Nam fringilla at erat vitae pellentesque. Donec malesuada orci sed justo placerat hendrerit. Ut porttitor ipsum nunc, et tempor augue maximus quis. Quisque ultricies dictum semper.
			</p>
		</div>
		<div class="col-md-2">&nbsp;</div>
	</div>
</section>
<section class="container-fluid fondo-blanco">
	<div class="row espaciado-3">
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-8 col-sm-8 text-center">
			<div class="container-fluid">

				<?php /*echo form_open("user/registrarLocal", array('id' => 'msform', 'class' => 'panel-login', 'role' => 'form'));*/ ?>
							
						<?php /*
					      		<input type="submit" name="submit" class="submit btn btn-wbx" value="Registar" />
						*/ ?>  	
							
				<?php /*echo form_close();*/ ?>
        				


				<form class="row">

					<div class="col-sm-6">
						<div class="form-group">
							<label for="tnombre" class="col-sm-2 control-label txt-azul-marino">Nombre</label>
							<input type="text" class="form-control" name="tnombre" id="tnombre" placeholder="Armando Paredes">
						</div> 
						<div class="form-group">
							<label for="ttelefono" class="col-sm-2 control-label txt-azul-marino">Teléfono</label>
							<input type="tel" class="form-control" name="ttelefono" id="ttelefono" placeholder="5555555"> 
						</div>
						<div class="form-group"> 
							<label for="tcorreo" class="col-sm-2 control-label txt-azul-marino">Correo</label> 
							<input type="email" class="form-control" name="tcorreo" id="tcorreo" placeholder="correo@correo">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group"> 
							<label for="tmensaje" class="col-sm-2 control-label txt-azul-marino">Mensaje</label>
							<textarea class="form-control" name="tmensaje" id="tmensaje" rows="5"></textarea>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-8">
								<button type="submit" class="btn btn-warning">Registrar</button>
							</div>
						</div>
					</div>


				</form>
			</div>
		</div>
		<div class="col-md-2">&nbsp;</div>
	</div>
</section>


<div class="container-fluid mapa">
  <div id="templatemo_contact_map"></div>
  
</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

<script type="text/javascript">
	//google map
	function initialize(){
	    //define map
	    var map;
	    //lat lng
	    myLatlng = new google.maps.LatLng(-2.1500407, -79.9015721);
	    //define style
	    var styles = [
	        {
	            //set all color
	            featureType: "all",
	            stylers: [{ hue: "#35a9d8" }]
	        },
	        {
	            //hide business
	            featureType: "poi.business",
	            elementType: "labels",
	            stylers: [{ visibility: "off" }]
	        }
	    ];
	    //map options
	    var mapOptions = {
	        zoom: 16,
	        center: myLatlng ,
	        mapTypeControlOptions: {mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']} ,
	        panControl: false , //hide panControl
	        zoomControl: true , //hide zoomControl
	        mapTypeControl: false , //hide mapTypeControl
	        scaleControl: false , //hide scaleControl
	        streetViewControl: false , //hide streetViewControl
	        overviewMapControl: false , //hide overviewMapControl
	        scrollwheel: false,
	    }
	    //adding attribute value
	    map = new google.maps.Map(document.getElementById('templatemo_contact_map'), mapOptions);
	    var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
	    map.mapTypes.set('map_style', styledMap);
	    map.setMapTypeId('map_style');
	    //add marker
	    var marker = new google.maps.Marker({
	        position: myLatlng,
	        map: map,
	        title: 'Neumos - Laboratorio de Sueño y Fisiologia Pulmonar '
	    });
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	google.maps.event.addDomListener(window, 'resize', initialize);


</script>
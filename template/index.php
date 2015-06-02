<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>


<?php if (isset($output)): ?>

   <?php echo $output;  ?>

<?php else: ?>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well">
                    <h2><i class="glyphicon glyphicon-info-sign"></i> Introdución</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content row">
                    <div class="col-lg-7 col-md-12">
                        <h1>Neumos <br>
                            <small>Laboratorio del Sueño y Fisiología Pulmonar</small>
                        </h1>
                        <p>
                            Escoge una de las opciones del panel izquierdo para modificar el contenido del sitio.
                        </p>
                        

                        <p class="center-block download-buttons">
                            <a href="<?php echo base_url() ?>" class="btn btn-primary btn-lg" target="_blank">
                                Ir al sitio
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
                           

<?php   endif;  ?>



<?php require('footer.php'); ?>

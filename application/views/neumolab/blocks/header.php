<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Neumos :: <?php echo $titlePage; ?></title>

		<meta name="description" content="Sitio Web Neumos">
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Poiret+One">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300'">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/estilo.css'); ?>">
        
        <link rel="icon" type="image/png" href="<?php echo base_url('public/images/favicon.png'); ?>">
        

        <script type="text/javascript">
            var base_url = '<?php echo base_url(); ?>';

            var js_site_url = function( urlText ){
                var urlTmp = "<?php echo site_url('" + urlText + "'); ?>";
                return urlTmp;
            }

            var js_base_url = function( urlText ){
                var urlTmp = "<?php echo base_url('" + urlText + "'); ?>";
                return urlTmp;
            }
        </script>
    </head>
    <body> 
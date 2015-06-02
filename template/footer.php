    <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
        <!-- content ends -->
        </div><!--/#content.col-md-0-->
    <?php } ?>
    </div><!--/fluid-row-->
    <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <hr>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h3>Settings</h3>
                    </div>
                    <div class="modal-body">
                        <p>Here settings can be configured...</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                        <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="row">
            <p class="col-md-9 col-sm-9 col-xs-12 copyright">
                &copy;
                <a href="http://www.neumolab.com" target="_blank">
                    Neumolab
                </a> 2012 - <?php echo date('Y'); ?>
            </p>

            <p class="col-md-3 col-sm-3 col-xs-12 powered-by">
                Desarrollado por:
                <a href="http://www.cajanegra.com.ec" target="_blank">Caja Negra</a>
            </p>
        </footer>
    <?php } ?>

    </div><!--/.fluid-container-->

    <!-- external javascript -->

    <script src="<?php echo base_url() ?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- library for cookie management -->
    <script src="<?php echo base_url() ?>template/js/jquery.cookie.js"></script>
    <!-- calender plugin -->
    <script src='<?php echo base_url() ?>template/bower_components/moment/min/moment.min.js'></script>
    <script src='<?php echo base_url() ?>template/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
    <!-- data table plugin -->
    <script src='<?php echo base_url() ?>template/js/jquery.dataTables.min.js'></script>

    <!-- select or dropdown enhancer -->
    <script src="<?php echo base_url() ?>template/bower_components/chosen/chosen.jquery.min.js"></script>
    <!-- plugin for gallery image view -->
    <script src="<?php echo base_url() ?>template/bower_components/colorbox/jquery.colorbox-min.js"></script>
    <!-- notification plugin -->
    <script src="<?php echo base_url() ?>template/js/jquery.noty.js"></script>
    <!-- library for making tables responsive -->
    <script src="<?php echo base_url() ?>template/bower_components/responsive-tables/responsive-tables.js"></script>
    <!-- tour plugin -->
    <script src="<?php echo base_url() ?>template/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
    <!-- star rating plugin -->
    <script src="<?php echo base_url() ?>template/js/jquery.raty.min.js"></script>
    <!-- for iOS style toggle switch -->
    <script src="<?php echo base_url() ?>template/js/jquery.iphone.toggle.js"></script>
    <!-- autogrowing textarea plugin -->
    <script src="<?php echo base_url() ?>template/js/jquery.autogrow-textarea.js"></script>
    <!-- multiple file upload plugin -->
    <script src="<?php echo base_url() ?>template/js/jquery.uploadify-3.1.min.js"></script>
    <!-- history.js for cross-browser state change on ajax -->
    <script src="<?php echo base_url() ?>template/js/jquery.history.js"></script>
    <!-- application script for Charisma demo -->
    <script src="<?php echo base_url() ?>template/js/charisma.js"></script>

    </body>
</html>

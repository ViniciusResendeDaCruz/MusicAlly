<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
			<?php include('navbar.php'); ?>
            <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <?php include('sidebar.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <?php $this->renderSection('content') ?>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            2022</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                            Criado por
                            <a href="https://www.linkedin.com/in/vinicius-resende/" target="_blank">Vinicius
                                Resende</a>, Luiz Carlos e Raynner
                            para a disciplina de Engenharia de Software - Universidade Federal de Lavras</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url('assets/vendors/chart.js/Chart.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/progressbar.js/progressbar.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/jvectormap/jquery-jvectormap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/owl-carousel-2/owl.carousel.min.js') ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('assets/js/off-canvas.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/hoverable-collapse.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/misc.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/settings.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/todolist.js') ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('assets/js/dashboard.js') ?>"></script>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css"> -->
    <!-- <link rel="stylesheet" href="<?php //echo base_url('assets/datatable.css') 
										?>"> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
    </script>
    <!-- End custom js for this page -->

    <script>
    var baseUrl = "<?php echo base_url() ?>"
    </script>
</body>
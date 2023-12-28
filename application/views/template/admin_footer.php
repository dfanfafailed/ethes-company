<footer class="footer">
          <div class="row">
            <div class="col-sm-6 text-center text-sm-right order-sm-1">
              <ul class="text-gray">
                <!-- <li><a href="#">Terms of use</a></li>
                <li><a href="#">Privacy Policy</a></li> -->
              </ul>
            </div>
            <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
              <small class="text-muted d-block">Copyright © <?= date('Y');?> <a href="http://www.uxcandy.co" target="_blank">ETHES TECH</a>. All rights reserved</small>
              <small class="text-gray mt-2">Handcrafted With <i class="mdi mdi-heart text-danger"></i></small>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="<?= base_url('back-end/'); ?>assets/vendors/js/core.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="<?= base_url('back-end/'); ?>assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url('back-end/'); ?>assets/vendors/chartjs/Chart.min.js"></script>
    <script src="<?= base_url('back-end/'); ?>assets/js/charts/chartjs.addon.js"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="<?= base_url('back-end/'); ?>assets/js/template.js"></script>
    <script src="<?= base_url('back-end/'); ?>assets/js/dashboard.js"></script>
    <!-- endbuild -->

    <!-- ckeditor -->
    <script src="<?=base_url('assets/ckeditor');?>/ckeditor.js"></script>
    <script src="<?=base_url('assets/ckeditor/samples');?>/js/sample.js"></script>
    <link rel="stylesheet" href="<?=base_url('assets/ckeditor');?>/css/samples.css">
    <link rel="stylesheet" href="<?=base_url('assets/ckeditor');?>/toolbarconfigurator/lib/codemirror/neo.css">

    <script>
      initSample();
    </script>
  </body>
</html>
      <!-- copyright -->
      <footer class="auth-footer"> © <span id="year">2018</span> All Rights Reserved. <a href="#">Privacy</a> and <a href="#">Terms</a>
      </footer>
    </main><!-- /.app-main -->
<!-- BEGIN BASE JS -->
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/popper.js/umd/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
<!-- BEGIN PLUGINS JS -->
<script src="<?php echo base_url() ?>assets/vendor/pace-progress/pace.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/flatpickr/flatpickr.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script> <!-- END PLUGINS JS -->
<!-- BEGIN THEME JS -->
<script src="<?php echo base_url() ?>assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="<?php echo base_url() ?>assets/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
<script>
  var today = new Date();
  var yyyy = today.getFullYear();
  $('#year').html(yyyy);
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'UA-116692175-1');
</script>


<!-- Mirrored from uselooper.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Mar 2022 06:18:27 GMT -->
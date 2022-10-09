


<script src="<?php echo e(asset('vendors/jquery/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jquery-ui/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/moment/moment.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>    
<script src="<?php echo e(asset('vendors/slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>




<!-- START: Page Vendor JS-->
<?php if(auth()->guard()->check()): ?>
<script src="<?php echo e(asset('vendors/raphael/raphael.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/morris/morris.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/chartjs/Chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/starrr/starrr.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jquery-flot/jquery.canvaswrapper.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jquery-flot/jquery.colorhelpers.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jquery-flot/jquery.flot.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jquery-flot/jquery.flot.saturated.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jquery-flot/jquery.flot.browser.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jquery-flot/jquery.flot.drawSeries.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jquery-flot/jquery.flot.uiConstants.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jquery-flot/jquery.flot.legend.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jquery-flot/jquery.flot.pie.js')); ?>"></script>        
<script src="<?php echo e(asset('vendors/chartjs/Chart.min.js')); ?>"></script>  
<script src="<?php echo e(asset('vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/apexcharts/apexcharts.min.js')); ?>"></script>


<script src="<?php echo e(asset('vendors/jsgrid/jsgrid.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jsgrid/db.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jsgrid/jsgrid.script.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/app-filemanager/app.filemanager.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/app-filemanager/app.js')); ?>"></script>



<?php if(Auth::user()->role_id == 1): ?>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<?php endif; ?>

<?php endif; ?>
<!-- END: Page Vendor JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
<script src="<?php echo e(asset('js/stripe.js')); ?>"></script>

<!-- START: APP JS-->
<!-- END: APP JS-->
<script type="text/javascript">
	$('div.alert').delay(3000).slideUp(300);
  $(":input").inputmask();
	<?php if(!Auth::check()): ?>
	$("#settings").html("");
	<?php endif; ?>
</script>

<script>
  <?php if(Session::has('message')): ?>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.success("<?php echo e(session('message')); ?>");
  <?php endif; ?>

  <?php if(Session::has('error')): ?>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.error("<?php echo e(session('error')); ?>");
  <?php endif; ?>

  <?php if(Session::has('info')): ?>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.info("<?php echo e(session('info')); ?>");
  <?php endif; ?>

  <?php if(Session::has('warning')): ?>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.warning("<?php echo e(session('warning')); ?>");
  <?php endif; ?>
</script>

<!-- START: Page JS-->
<script src="<?php echo e(asset('js/home.script.js')); ?>"></script>
<!-- END: Page JS-->
<?php /**PATH /home2/digitalservicesc/public_html/mymobiledna-dev/resources/views/layouts/scripts.blade.php ENDPATH**/ ?>
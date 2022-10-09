


<script src="{{asset('vendors/jquery/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('vendors/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('vendors/moment/moment.js')}}"></script>
<script src="{{asset('vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>    
<script src="{{asset('vendors/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>




<!-- START: Page Vendor JS-->
@auth
<script src="{{asset('vendors/raphael/raphael.min.js')}}"></script>
<script src="{{asset('vendors/morris/morris.min.js')}}"></script>
<script src="{{asset('vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('vendors/starrr/starrr.js')}}"></script>
<script src="{{asset('vendors/jquery-flot/jquery.canvaswrapper.js')}}"></script>
<script src="{{asset('vendors/jquery-flot/jquery.colorhelpers.js')}}"></script>
<script src="{{asset('vendors/jquery-flot/jquery.flot.js')}}"></script>
<script src="{{asset('vendors/jquery-flot/jquery.flot.saturated.js')}}"></script>
<script src="{{asset('vendors/jquery-flot/jquery.flot.browser.js')}}"></script>
<script src="{{asset('vendors/jquery-flot/jquery.flot.drawSeries.js')}}"></script>
<script src="{{asset('vendors/jquery-flot/jquery.flot.uiConstants.js')}}"></script>
<script src="{{asset('vendors/jquery-flot/jquery.flot.legend.js')}}"></script>
<script src="{{asset('vendors/jquery-flot/jquery.flot.pie.js')}}"></script>        
<script src="{{asset('vendors/chartjs/Chart.min.js')}}"></script>  
<script src="{{asset('vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{asset('vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js')}}"></script>
<script src="{{asset('vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js')}}"></script>
<script src="{{asset('vendors/apexcharts/apexcharts.min.js')}}"></script>


<script src="{{asset('vendors/jsgrid/jsgrid.min.js')}}"></script>
<script src="{{asset('vendors/jsgrid/db.js')}}"></script>
<script src="{{asset('vendors/jsgrid/jsgrid.script.js')}}"></script>
<script src="{{asset('vendors/app-filemanager/app.filemanager.js')}}"></script>
<script src="{{asset('vendors/app-filemanager/app.js')}}"></script>



@if(Auth::user()->role_id == 1)
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endif

@endauth
<!-- END: Page Vendor JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
<script src="{{asset('js/stripe.js')}}"></script>

<!-- START: APP JS-->
<!-- END: APP JS-->
<script type="text/javascript">
	$('div.alert').delay(3000).slideUp(300);
  $(":input").inputmask();
	@if(!Auth::check())
	$("#settings").html("");
	@endif
</script>

<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>

<!-- START: Page JS-->
<script src="{{asset('js/home.script.js')}}"></script>
<!-- END: Page JS-->

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
       <meta name="csrf-token" content="{{ csrf_token() }}" />
         @yield('meta-section')
      <link rel="icon" href="#">
       @include('web.layouts.links')
    <title>@yield('title')</title>
      <!-- Bootstrap CSS -->
      
   </head>
   @include('web.layouts.header')
   <body>

     @yield('content')
     
   @include('web.layouts.footer')
   @include('web.layouts.scripts')
   <script src="{{asset('toaster/toaster.min.js')}}" ></script>

   @yield('js')

   <script>
  
  @if(Session::has('message'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.warning("{{ session('warning') }}");
  @endif
</script>
</body>
</html>
<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{{(isset($description)?$description:'')}}" >

    <meta content="" name="author">

    <meta name="keywords" content="{{(isset($keywords)?$keywords:'')}}">	  

    <!--Any config settings you want to fetch you will get in $config array, -->

    <title>{{isset($title)?$title:''}}</title>

    <link rel="icon" type="image/png" href="{{asset(isset($favicon)?$favicon:'')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('web.layouts.links')
    <style>
    .logo{
        width:120px;
        height: 50px;
    } 
    .lazy{
        width: 10px;
        height: 10px;
    }

    #counter-2{
        display: inline-block;
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    #counter-2-img{
        pointer-events: none;
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: -1;
    }
    </style>

    @yield('css')


    <!-- Global site tag (gtag.js) - Google Analytics -->

<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-199642404-1">

</script> -->


<!-- Google Tag Manager -->

<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-WWCTVTN');</script> -->

<!-- End Google Tag Manager -->



  </head>

  <!-- <body class="state1 background-100-e"> -->
<body>
      <!-- Google Tag Manager (noscript) -->

<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWCTVTN"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->

<!-- End Google Tag Manager (noscript) -->

    @if(Auth::guard('adminiy')->check())

        <div id="adminLogged">

            You are logged in as <strong>Website admin</strong>. Some features are <strong>restricted</strong>. Logout as <b>website admin</b> to use the front site. <a class="btn btn-sm btn-danger" href="{{route('adminiy.logout')}}">Logout</a>

        </div>

    @endif

    <input type="hidden" id="web_base_url" value="{{url('/')}}"/>



    @include('layouts.header')

    @include('layouts.sidebar')

    @yield('content')



    @include('layouts.footer')

    @include('layouts.scripts')

    @yield('js')

    @include('layouts.errorhandler')

    @include('adminiy.core.editor')

    <!-- <script defer>

    console.clear();

   

    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

    (function(){

    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];

    s1.async=true;

    s1.src='https://embed.tawk.to/611e6380649e0a0a5cd1ec67/1fdfb9blf';

    s1.charset='UTF-8';

    s1.setAttribute('crossorigin','*');

    s0.parentNode.insertBefore(s1,s0);

    })();

    </script> -->

    <!--End of Tawk.to Script-->

  </body>

</html>
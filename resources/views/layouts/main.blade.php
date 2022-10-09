<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- START: Head-->
    <head>
        <meta charset="UTF-8">
        <title>{{isset($title)?$title:'Taskboard'}}</title>

        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
        <!-- START: Template CSS-->
        @include('layouts.links')
        @yield('css')
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->
    
    <body id="main-container" class="default dark compact-menu">
        @auth
            @if(Auth::user()->role_id == 1)
                @include('layouts.popup')
            @endif
        @endauth
        <div class="main-body">
        <input type="hidden" id="web_url" value="{{url('/')}}"/>
        <!-- START: Pre Loader-->
        <div class="se-pre-con">
            <div class="loader"></div>
        </div>
        <!-- END: Pre Loader-->
        @auth
        <!-- START: Header-->
        @include('layouts.header')
        <!-- END: Header-->

        <!-- START: Main Menu-->
        @include('layouts.sidebar')
        
        <!-- END: Main Menu-->
        @endauth
        <!-- START: Main Content-->
        @yield('content')
        <!-- END: Content-->
        <!-- START: Footer-->
        @auth
        <footer class="site-footer">
            2021 &copy; {{env('APP_NAME')}} Dashboard
        </footer>
        @endauth
        <!-- END: Footer-->

        <!-- START: Back to top-->
        <a href="#" class="scrollup text-center"> 
            <i class="icon-arrow-up"></i>
        </a>
        <!-- END: Back to top-->



        <!-- START: Template JS-->
        @include('layouts.scripts')
        
        @yield('js')
        
        </div>
    </body>
    <!-- END: Body-->
</html>

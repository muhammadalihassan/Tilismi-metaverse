<?php 
        
        if(!isset($menu)){
            $menu="home";
        }
        //$menu="home";
        $favicon=Helper::OneColData('imagetable','img_path',"table_name='favicon' and ref_id=0 and is_active_img='1'");
        $logo=Helper::OneColData('imagetable','img_path',"table_name='logo' and ref_id=0 and is_active_img='1'");
        $logof=Helper::OneColData('imagetable','img_path',"table_name='logof' and ref_id=0 and is_active_img='1'");
                       
 ?>
<!-- Sidenav start -->

<nav id="sidebar" class="nav-sidebar">

    <!-- Close btn-->

    <div id="dismiss">

        <i class="fa fa-close"></i>

    </div>

    <div class="sidebar-inner">

        <div class="sidebar-logo">

            <a href="{{ url('/')}}">

                <img src="{{ asset($logo) }}" alt="sidebarlogo" class="logo">

            </a>

        </div>

        <div class="sidebar-navigation">

            <h3 class="heading">Pages</h3>

            <ul class="menu-list">

                <li><a href="{{ route('home') }}">Home </a>

                    

                </li>

            
                <li>
                    <a href="{{ route('about_us') }}">About Us</a>
                </li> 
                <li>
                    <a href="{{ route('pricing') }}">Pricing</a>
                </li> 
                
                <li>
                    <a href="{{ route('contact_us') }}">Contact</a>
                </li>
                <li>
                    <a href="{{ route('services') }}">Our service</a>
                </li>
                <li>
                    <a href="{{ route('howWe_help') }}">How We Help</a>
                </li>
                <li>
                    <a href="{{ route('our_company') }}">Our Company</a>
                </li>

            </ul>

        </div>

        <div class="get-in-touch">

            <h3 class="heading">Get in Touch</h3>

            <

            <div class="media">

                <i class="flaticon-mail"></i>

                <div class="media-body">

                    <a href="mailto:<?=$config['COMPANYEMAIL']?>"><?=$config['COMPANYEMAIL']?></a>

                </div>

            </div>

            

        </div>

       <!--  <div class="get-social">

            <h3 class="heading">Get Social</h3>

            <a href="#" class="facebook-bg">

                <i class="fa fa-facebook"></i>

            </a>

            <a href="#" class="twitter-bg">

                <i class="fa fa-twitter"></i>

            </a>

            <a href="#" class="google-bg">

                <i class="fa fa-google"></i>

            </a>

            <a href="#" class="linkedin-bg">

                <i class="fa fa-linkedin"></i>

            </a>

        </div> -->

    </div>

</nav>

<!-- Sidenav end -->
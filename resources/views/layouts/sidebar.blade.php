<?php  
$user = Auth::user();
$att_tag = App\Models\attributes::where('is_active' ,1)->select('attribute')->distinct()->get();

$role_assign = App\Models\role_assign::where('is_active' ,1)->where("role_id" ,$user->role_id)->first();
if ($role_assign) {
    $sidebar_data = unserialize($role_assign->assignee);
    $sidebar_data = Helper::create_sidebar($sidebar_data);
}else{
    $sidebar_data = [];
}

?>
<div class="sidebar">
            <div class="site-width">
                <!-- START: Menu-->
                <ul id="side-menu" class="sidebar-menu">
             <li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Dashboard</a>                  
                     <ul>
          <!-- <li class="active"><a href="{{route('dashboard')}}"><i class="icon-rocket"></i> Dashboard</a></li> -->

           <li ><a href="{{route('welcome')}}"><i class="icon-rocket"></i> View Website</a></li>

           
                                    
                            @if(Auth::user()->role_id == 1)
                           {{--<li><a href="{{route('roles')}}"><i class="icon-layers"></i> Attributes</a></li>--}}
                            @endif
                            @if($sidebar_data)
                                @foreach($sidebar_data as $side)
                                    <li class="{{$side==Request::segment(2)?'active':''}}"><a href="{{route('listing',$side)}}" data-actor="{{$side}}"><i class="{{Helper::get_sidebar_icon($side)}}"></i> {{ucwords(str_replace('-', ' ',$side))}}</a></li>
                                @endforeach
                            @endif
                            {{--<li><a href="{{route('user_rights')}}"><i class="icon-grid"></i> Roles Assign</a></li>
                            <li><a href="{{route('departments.index')}}"><i class="fa fa-university"></i> Departments</a></li>
                            <li><a href="{{route('designations.index')}}"><i class="fa fa-graduation-cap"></i>Designations</a></li>--}}
                            {{--
                            <li><a href="index-covid.html"><i class="icon-earphones"></i> COVID</a></li>
                            <li><a href="index-crypto.html"><i class="icon-support"></i> Crypto</a></li>
                            <li><a href="index-ecommerce.html"><i class="icon-briefcase"></i> Ecommerce</a></li>
                            --}}
                        </ul> 
                    </li>

                    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 36)
                    {{--<li class="dropdown"><a href="#"><i class="icon-organization mr-1"></i> Tools</a>
                        <ul>
                

                         @if(Auth::user()->role_id == 1) 
                            
                            <li class="dropdown"><a href="#"><i class="icon-options"></i>Website Settings</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('config')}}"><i class="icon-energy"></i> Config</a></li>
                                </ul>
                            </li> 
                           
                                     
                 
                     @endif



                          
                            <li class="dropdown"><a href="#"><i class="icon-options"></i>Attendance</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('attendance_sheet_import')}}"><i class="icon-energy"></i> Import Sheet</a></li>
                                    
                                    <li><a href="layout-horizontal-semidark.html"><i class="icon-disc"></i> Semi Dark</a></li>
                                    <li><a href="layout-horizontal-dark.html"><i class="icon-frame"></i> Dark</a></li>
                                   
                                </ul>
                            </li>

                            
                            <li class="dropdown"><a href="#"><i class="icon-options"></i>Pay-Roll</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('payroller')}}"><i class="icon-energy"></i> Payrolls</a></li>
                                    <li><a href="{{route('payslips')}}"><i class="icon-energy"></i>Payslips</a></li>
                                </ul>
                            </li>
                            
                            
                        </ul>
                    </li>--}}
                    @endif

                   {{-- <li class="dropdown"><a href="#"><i class="icon-layers mr-1"></i> Web Apps</a>                  
                        <ul>
                            
                            <li class="dropdown"><a href="#"><i class="icon-options"></i>Website Settings</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('config')}}"><i class="icon-energy"></i> Config</a></li>
                                </ul>
                            </li> 
                            {{--
                            <li><a href="{{route('chat')}}"><i class="icon-speech"></i> Chat</a></li>
                            --}}
                            @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 36)
                            {{--
                                <li><a href="{{route('candidate_form')}}"><i class="icon-tag"></i> Add Candidate</a></li>
                                <li><a href="{{route('create_job')}}"><i class="icon-tag"></i> Create Job</a></li>
                            --}}
                            @endif
                        </ul>                   
                    </li>

                    {{--
                    <li class="dropdown"><a href="#"><i class="icon-organization mr-1"></i> Layout</a>
                        <ul>
                            <li class="dropdown"><a href="#"><i class="icon-options"></i>Horizontal</a>
                                <ul class="sub-menu">
                                    <li><a href="layout-horizontal.html"><i class="icon-energy"></i> Light</a></li>
                                    <li><a href="layout-horizontal-semidark.html"><i class="icon-disc"></i> Semi Dark</a></li>
                                    <li><a href="layout-horizontal-dark.html"><i class="icon-frame"></i> Dark</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><i class="icon-options-vertical"></i>Vertical</a>
                                <ul class="sub-menu">
                                    <li><a href="layout-vertical.html"><i class="icon-energy"></i> Light</a></li>
                                    <li><a href="layout-vertical-semidark.html"><i class="icon-disc"></i> Semi Dark</a></li>
                                    <li><a href="layout-vertical-dark.html"><i class="icon-frame"></i> Dark</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><i class="icon-grid"></i>Compact Menu</a>
                                <ul class="sub-menu">
                                    <li><a href="layout-compact.html"><i class="icon-energy"></i> Light</a></li>
                                    <li><a href="layout-compact-semidark.html"><i class="icon-disc"></i> Semi Dark</a></li>
                                    <li><a href="layout-compact-dark.html"><i class="icon-frame"></i> Dark</a></li>
                                </ul>
                            </li>
                           
                        </ul>
                    </li>
                    
                    <li class="dropdown"><a href="#"><i class="icon-layers mr-1"></i> Web Apps</a>                  
                        <ul>
                            <li><a href="app-calendar.html"><i class="icon-calendar"></i> Calendar</a></li>
                            <li><a href="app-chat.html"><i class="icon-speech"></i> Chats</a></li>
                            <li><a href="app-to-do.html"><i class="icon-support"></i> Todo</a></li> 
                            <li><a href="app-mail.html"><i class="icon-envelope"></i>Mailapp</a></li>
                            <li><a href="app-filemanager.html"><i class="icon-folder"></i> File Manager</a></li>
                            <li><a href="app-contactlist.html"><i class="icon-people"></i> Contact List</a></li>
                            <li><a href="app-taskboard.html"><i class="icon-event"></i> Task Board</a></li>
                            <li><a href="app-notes.html"><i class="icon-tag"></i> Notes</a></li> 
                            <li><a href="app-invoicelist.html"><i class="icon-book-open"></i> Invoices</a></li>
                        </ul>                   
                    </li>

                    <li class="dropdown"><a href="#"><i class="icon-cursor mr-1"></i> Elements</a>                 
                        <ul>
                            <li class="dropdown"><a href="#"><i class="icon-chart"></i>Charts</a>                                
                                <ul class="sub-menu">                                    
                                    <li><a href="chart-morris.html"><i class="icon-energy"></i> Morris Chart</a></li>
                                    <li><a href="chart-chartist.html"><i class="icon-disc"></i> Chartist js</a></li>
                                    <li><a href="chart-echart.html"><i class="icon-frame"></i> eCharts</a></li>
                                    <li><a href="chart-flot.html"><i class="icon-fire"></i> Flot Chart</a></li>
                                    <li><a href="chart-knob.html"><i class="icon-shuffle"></i> Knob Chart</a></li>
                                    <li class="dropdown"><a href="#" class="d-flex align-items-center"><i class="icon-control-pause"></i> Charts js</a>                                          
                                        <ul class="sub-menu">
                                            <li><a href="chartjs-bar.html"><i class="icon-energy"></i> Bar charts</a></li>
                                            <li><a href="chartjs-line.html"><i class="icon-disc"></i> Line charts</a></li>
                                            <li><a href="chartjs-area.html"><i class="icon-frame"></i> Area charts</a></li>
                                            <li><a href="chartjs-other.html"><i class="icon-fire"></i> Doughnut, Pie, Polar charts</a></li>
                                            <li><a href="chartjs-linear.html"><i class="icon-shuffle"></i> Linear scale</a></li>                                                                        
                                        </ul>                                           
                                    </li>
                                    <li><a href="chart-sparkline.html"><i class="icon-graph"></i> Sparkline Chart</a></li>                            
                                    <li><a href="chart-peity.html"><i class="icon-pie-chart"></i> Peity Chart</a></li>   
                                    <li><a href="chart-google.html"><i class="icon-drawer"></i> Google Charts</a></li>
                                    <li><a href="chart-apex.html"><i class="icon-magnet"></i> Apex Charts</a></li>
                                    <li><a href="chart-c3.html"><i class="icon-hourglass"></i> C3 Charts</a></li>
                                </ul>                               
                            </li> 
                            <li class="dropdown"><a href="#"><i class="icon-film"></i>Form</a>                              
                                <ul class="sub-menu">
                                    <li><a href="form-basic.html"><i class="icon-disc"></i> Basic Form</a></li>
                                    <li><a href="form-layout.html"><i class="icon-cursor-move"></i> Form Layout</a></li>
                                    <li><a href="form-validation.html"><i class="icon-star"></i> Form Validation</a></li>
                                    <li class="dropdown"><a href="#" class="d-flex align-items-center"><i class="icon-film"></i> Form Elements</a>                                          
                                        <ul class="sub-menu">
                                            <li><a href="form-elements-switch.html"><i class="icon-energy"></i> Switch</a></li>
                                            <li><a href="form-elements-checkbox.html"><i class="icon-disc"></i> Checkbox</a></li>
                                            <li><a href="form-elements-radiobutton.html"><i class="icon-frame"></i> Radio</a></li>
                                            <li><a href="form-elements-input.html"><i class="icon-fire"></i> Input</a></li>                                       
                                        </ul>                                           
                                    </li>
                                    <li><a href="form-float-input.html"><i class="icon-symbol-male"></i> Float Input</a></li>
                                    <li><a href="form-wizard.html"><i class="icon-loop"></i> Form Wizards</a></li>
                                    <li><a href="form-upload.html"><i class="icon-pin"></i> Form Uploads</a></li>
                                    <li><a href="form-mask.html"><i class="icon-check"></i> Form Mask</a></li>                            
                                    <li><a href="form-dropzone.html"><i class="icon-present"></i> Form Dropzone</a></li>
                                    <li><a href="form-icheck.html"><i class="icon-briefcase"></i> Icheck Controls</a></li>
                                    <li><a href="form-cropper.html"><i class="icon-hourglass"></i> Image Cropper</a></li>
                                    <li><a href="form-htmleditor.html"><i class="icon-graduation"></i> HTML5 Editor</a></li>
                                    <li><a href="form-typehead.html"><i class="icon-puzzle"></i> Form Typehead</a></li>                            
                                    <li><a href="form-xeditable.html"><i class="icon-cloud-upload"></i> Xeditable</a></li>
                                    <li><a href="form-summernote.html"><i class="icon-ghost"></i> Summernote</a></li>
                                </ul>  
                            </li>
                            <li class="dropdown"><a href="#"><i class="icon-menu"></i>Tables</a>                               
                                <ul class="sub-menu">
                                    <li><a href="table-basic.html"><i class="icon-grid"></i> Table Basic</a></li>
                                    <li><a href="table-layout.html"><i class="icon-layers"></i> Table Layout</a></li>
                                    <li><a href="table-datatable.html"><i class="icon-docs"></i> Datatable</a></li>
                                    <li><a href="table-footable.html"><i class="icon-wallet"></i> Footable</a></li>
                                    <li><a href="table-jsgrid.html"><i class="icon-folder"></i> Jsgrid</a></li>
                                    <li><a href="table-responsive.html"><i class="icon-control-pause"></i> Table Responsive</a></li>                            
                                    <li><a href="table-editable.html"><i class="icon-pencil"></i> Editable Table</a></li>
                                </ul>   
                            </li>
                        </ul>                   
                    </li>
                    <li class="dropdown"><a href="#"><i class="icon-magnet mr-1"></i> UI Component</a>                  
                        <ul>
                            <li class="dropdown"><a href="#"><i class="icon-screen-desktop"></i>UI Elements</a>                              
                                <ul class="sub-menu">
                                    <li><a href="ui-alert.html"><i class="icon-bell"></i> Alerts</a></li>
                                    <li><a href="ui-badges.html"><i class="icon-badge"></i> Badges</a></li>
                                    <li><a href="ui-buttons.html"><i class="icon-control-play"></i> Buttons</a></li>
                                    <li><a href="ui-cards.html"><i class="icon-layers"></i> Cards</a></li>
                                    <li><a href="ui-carousel.html"><i class="icon-picture"></i> Carousel</a></li>                           
                                    <li><a href="ui-collapse.html"><i class="icon-arrow-up"></i> Collapse</a></li>
                                    <li><a href="ui-dropdowns.html"><i class="icon-arrow-down"></i> Dropdowns</a></li>                          
                                    <li><a href="ui-jumbotron.html"><i class="icon-screen-desktop"></i> Jumbotron</a></li>
                                    <li><a href="ui-modals.html"><i class="icon-frame"></i> Modal</a></li> 
                                    <li><a href="ui-pagination.html"><i class="icon-docs"></i> Pagination</a></li>  
                                    <li><a href="ui-popoverandtooltip.html"><i class="icon-pin"></i> Popover &amp; Tooltip</a></li>
                                    <li><a href="ui-progress.html"><i class="icon-graph"></i> Progress</a></li>
                                    <li><a href="ui-scrollspy.html"><i class="icon-shuffle"></i> Scrollspy</a></li>
                                    <li><a href="ui-select2.html"><i class="icon-wallet"></i> Select2</a></li>
                                    <li><a href="ui-sweetalert.html"><i class="icon-fire"></i> Sweet Alert</a></li>
                                    <li><a href="ui-timeline.html"><i class="icon-graduation"></i> Timeline</a></li>
                                    <li><a href="ui-toastr.html"><i class="icon-layers"></i> Toastr</a></li>
                                </ul>                              
                            </li>
                            <li class="dropdown"><a href="#"><i class="icon-badge"></i>Icons</a>                            
                                <ul class="sub-menu">
                                    <li><a href="icon-materialdesign.html"><i class="icon-star"></i> Material Icon</a></li>
                                    <li><a href="icon-font-awesome.html"><i class="icon-screen-tablet"></i> Font-awesome</a></li>
                                    <li><a href="icon-themify.html"><i class="icon-plane"></i> Themify Icon</a></li>
                                    <li><a href="icon-weather.html"><i class="icon-drawer"></i> Weather Icon</a></li>
                                    <li><a href="icon-simple-line.html"><i class="icon-map"></i> Simple Line Icon</a></li>
                                    <li><a href="icon-flag.html"><i class="icon-flag"></i> Flag Icon</a></li>
                                    <li><a href="icon-ionicons.html"><i class="icon-rocket"></i> Ionicons Icon</a></li>
                                    <li><a href="icon-icofont.html"><i class="icon-fire"></i> Icofont Icon</a></li>    
                                    <li><a href="icon-linearicons.html"><i class="icon-list"></i> Linear</a></li>
                                    <li><a href="icon-crypto.html"><i class="icon-diamond"></i> Crypto</a></li>
                                </ul>                                 
                            </li>
                        </ul>                 
                    </li>
                    <li class="dropdown"><a href="#"><i class="icon-doc mr-1"></i> Pages</a>                  
                        <ul>
                            <li class="dropdown"><a href="#"><i class="icon-book-open"></i>Other Pages</a>                               
                                <ul class="sub-menu">
                                    <li><a href="page-lockscreen.html"><i class="icon-lock"></i> Lockscreen</a></li>
                                    <li><a href="page-login.html"><i class="icon-login"></i> login</a></li>
                                    <li><a href="page-register.html"><i class="icon-direction"></i> Register</a></li>
                                    <li><a href="page-404.html"><i class="icon-crop"></i> 404 Page</a></li>
                                    <li><a href="page-404-menu.html"><i class="icon-layers"></i> 404 Page With Menu</a></li>
                                    <li><a href="page-blank.html"><i class="icon-frame"></i> Blank Page</a></li>
                                    <li><a href="page-gallery.html"><i class="icon-layers"></i> Gallery</a></li>
                                    <li><a href="page-pricing.html"><i class="icon-wallet"></i> Pricing</a></li>
                                    <li><a href="page-contact-us.html"><i class="icon-wrench"></i> Contact us</a></li>
                                </ul>                               
                            </li>
                            <li><a href="user-profile.html"><i class="icon-user"></i>Profile Pages</a></li>
                        </ul>                   
                    </li>
                    <li class="dropdown"><a href="#"><i class="icon-support mr-1"></i> Extras</a>                   
                        <ul>
                            <li class="dropdown"><a href="#"><i class="icon-map"></i>Map</a>                               
                                <ul class="sub-menu">
                                    <li><a href="map-google.html"><i class="icon-map"></i> Google Map</a></li>
                                    <li><a href="map-vector.html"><i class="icon-vector"></i> Vector Map</a></li>

                                </ul>                               
                            </li>
                            <li class="dropdown"><a href="#"><i class="icon-pencil"></i>Blog</a>                               
                                <ul class="sub-menu">
                                    <li><a href="blog-list.html"><i class="icon-plus"></i> Blog List</a></li>
                                    <li><a href="blog-single.html"><i class="icon-tag"></i> Blog Post</a></li>                            
                                </ul>                               
                            </li>  
                            <li class="dropdown"><a href="#"><i class="icon-bag"></i>Ecommerce</a>                                 
                                <ul class="sub-menu">
                                    <li><a href="ecommerce-product-list.html"><i class="icon-grid"></i> Products List</a></li>
                                    <li><a href="ecommerce-product-detail.html"><i class="icon-plus"></i> Product Detail</a></li>
                                    <li><a href="ecommerce-cart.html"><i class="icon-badge"></i> Cart</a></li>
                                    <li><a href="ecommerce-checkout.html"><i class="icon-plus"></i> Checkout</a></li>
                                    <li><a href="ecommerce-orders.html"><i class="icon-basket"></i> Orders</a></li>
                                    <li><a href="ecommerce-order-view.html"><i class="icon-equalizer"></i> Order View</a></li>                           

                                </ul>                               
                            </li>
                        </ul>                    
                    </li>
                    --}}
                </ul>
                <!-- END: Menu-->
                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
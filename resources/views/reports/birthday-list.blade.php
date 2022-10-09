@extends('layouts.main') 
@section('content')
<!-- START: Main Content-->
        <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Upcoming Birthday List</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">Report</li>
                                <li class="breadcrumb-item active"><a href="#">Employee List</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row row-eq-height">
                    <div class="col-12 col-lg-2 mt-3 todo-menu-bar flip-menu pr-lg-0">
                        <a href="#" class="d-inline-block d-lg-none mt-1 flip-menu-close"><i class="icon-close"></i></a>
                        <div class="card border h-100 contact-menu-section">

                            <ul class="nav flex-column contact-menu">
                                
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" data-contacttype="contact">
                                        <i class="icon-list"></i> All
                                    </a>
                                </li>
                                @if($departments)
                                @foreach($departments as $department)
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-contacttype="{{Str::slug($department->name)}}-contact">
                                        <i class="icon-people"></i> {{$department->name}}
                                    </a>
                                </li>
                                @endforeach
                                @endif

                            </ul>         

                        </div>  
                    </div>
                    <div class="col-12 col-lg-10 mt-3 pl-lg-0">
                        <div class="card border h-100 contact-list-section">
                            <div class="card-header border-bottom p-1 d-flex">
                                <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i class="icon-menu"></i></a>
                                <input type="text" class="form-control border-0 p-2 w-100 h-100 contact-search" placeholder="Search ...">
                                <a href="#" class="list-style search-bar-menu border-0 active"><i class="icon-list"></i></a>
                                <a href="#" class="grid-style search-bar-menu"><i class="icon-grid"></i></a>
                            </div>
                            <div class="card-body p-0">

                                <div class="contacts list">
                                    @if($bday_upcoming)
                                    @foreach($bday_upcoming as $bday)
                                    <div class="contact {{Str::slug($bday->departments->name)}}-contact"> 
                                        <div class="contact-content">
                                            <div class="contact-profile">                                                   
                                                <img src="{{asset($bday->profile_pic)}}" alt="avatar" class="user-image img-fluid">
                                                <div class="contact-info">
                                                    <p class="contact-name mb-0">{{$bday->name}}</p>
                                                    <p class="contact-position mb-0 small font-weight-bold text-muted">{{$bday->designations->name}}</p>
                                                </div>
                                            </div>
                                            <div class="contact-email">
                                                <p class="mb-0 small">Day: </p>
                                                <p class="user-email">{{date('d M', strtotime($bday->dob))}}</p>
                                            </div>
                                            <div class="contact-location">
                                                <p class="mb-0 small">Department: </p>
                                                <p class="user-location">{{$bday->departments->name}}</p>
                                            </div>
                                            <div class="contact-phone">
                                                <p class="mb-0 small">Line Manager: </p>
                                                <p class="user-phone">{{isset($bday->report_manager)?$bday->report_manager->name:$bday->reporting_line}}</p>
                                            </div>
                                            <div class="line-h-1 h5">
                                               {{-- <a class="text-success edit-contact" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                               --}}
                                                <a class="text-danger delete-contact" href="#" title="Hide"><i class="icon-trash"></i></a>                                 
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif

                                    {{--
                                    <div class="contact friend-contact"> 
                                        <div class="contact-content">
                                            <div class="contact-profile">                                                   
                                                <img src="{{asset('images/contact-2.jpg')}}" alt="avatar" class="user-image img-fluid">
                                                <div class="contact-info">
                                                    <p class="contact-name mb-0">Margarita Metts</p>
                                                    <p class="contact-position mb-0 small font-weight-bold text-muted">Marketing Coordinator</p>
                                                </div>
                                            </div>
                                            <div class="contact-email">
                                                <p class="mb-0 small">Email: </p>
                                                <p class="user-email">mm@mail.com</p>
                                            </div>
                                            <div class="contact-location">
                                                <p class="mb-0 small">Location: </p>
                                                <p class="user-location">Franklin</p>
                                            </div>
                                            <div class="contact-phone">
                                                <p class="mb-0 small">Phone: </p>
                                                <p class="user-phone">+1 (020) 123-4567</p>
                                            </div>
                                            <div class="line-h-1 h5">
                                                <a class="text-success edit-contact" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact family-contact"> 
                                        <div class="contact-content">
                                            <div class="contact-profile">                                                   
                                                <img src="{{asset('images/contact-3.jpg')}}" alt="avatar" class="user-image img-fluid">
                                                <div class="contact-info">
                                                    <p class="contact-name mb-0">Shirley Vu</p>
                                                    <p class="contact-position mb-0 small font-weight-bold text-muted">Medical Assistant</p>
                                                </div>
                                            </div>
                                            <div class="contact-email">
                                                <p class="mb-0 small">Email: </p>
                                                <p class="user-email">sv@mail.com</p>
                                            </div>
                                            <div class="contact-location">
                                                <p class="mb-0 small">Location: </p>
                                                <p class="user-location">Arlington</p>
                                            </div>
                                            <div class="contact-phone">
                                                <p class="mb-0 small">Phone: </p>
                                                <p class="user-phone">+1 (020) 123-4567</p>
                                            </div>
                                            <div class="line-h-1 h5">
                                                <a class="text-success edit-contact" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact friend-contact"> 
                                        <div class="contact-content">
                                            <div class="contact-profile">                                                   
                                                <img src="{{asset('images/contact-4.jpg')}}" alt="avatar" class="user-image img-fluid">
                                                <div class="contact-info">
                                                    <p class="contact-name mb-0">Josef Mellott</p>
                                                    <p class="contact-position mb-0 small font-weight-bold text-muted">Web Developer</p>
                                                </div>
                                            </div>
                                            <div class="contact-email">
                                                <p class="mb-0 small">Email: </p>
                                                <p class="user-email">jm@mail.com</p>
                                            </div>
                                            <div class="contact-location">
                                                <p class="mb-0 small">Location: </p>
                                                <p class="user-location">Centerville</p>
                                            </div>
                                            <div class="contact-phone">
                                                <p class="mb-0 small">Phone: </p>
                                                <p class="user-phone">+1 (020) 123-4567</p>
                                            </div>
                                            <div class="line-h-1 h5">
                                                <a class="text-success edit-contact" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact office-contact"> 
                                        <div class="contact-content">
                                            <div class="contact-profile">                                                   
                                                <img src="{{asset('images/contact-5.jpg')}}" alt="avatar" class="user-image img-fluid">
                                                <div class="contact-info">
                                                    <p class="contact-name mb-0">Twanna Lenhart</p>
                                                    <p class="contact-position mb-0 small font-weight-bold text-muted">Web Designer</p>
                                                </div>
                                            </div>
                                            <div class="contact-email">
                                                <p class="mb-0 small">Email: </p>
                                                <p class="user-email">tl@mail.com</p>
                                            </div>
                                            <div class="contact-location">
                                                <p class="mb-0 small">Location: </p>
                                                <p class="user-location">Lebanon</p>
                                            </div>
                                            <div class="contact-phone">
                                                <p class="mb-0 small">Phone: </p>
                                                <p class="user-phone">+1 (020) 123-4567</p>
                                            </div>
                                            <div class="line-h-1 h5">
                                                <a class="text-success edit-contact" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact family-contact"> 
                                        <div class="contact-content">
                                            <div class="contact-profile">                                                   
                                                <img src="{{asset('images/contact-6.jpg')}}" alt="avatar" class="user-image img-fluid">
                                                <div class="contact-info">
                                                    <p class="contact-name mb-0">Eustolia Ashburn</p>
                                                    <p class="contact-position mb-0 small font-weight-bold text-muted">President of Sales</p>
                                                </div>
                                            </div>
                                            <div class="contact-email">
                                                <p class="mb-0 small">Email: </p>
                                                <p class="user-email">ea@mail.com</p>
                                            </div>
                                            <div class="contact-location">
                                                <p class="mb-0 small">Location: </p>
                                                <p class="user-location">Clinton</p>
                                            </div>
                                            <div class="contact-phone">
                                                <p class="mb-0 small">Phone: </p>
                                                <p class="user-phone">+1 (020) 123-4567</p>
                                            </div>
                                            <div class="line-h-1 h5">
                                                <a class="text-success edit-contact" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact business-contact"> 
                                        <div class="contact-content">
                                            <div class="contact-profile">                                                   
                                                <img src="{{asset('images/contact-7.jpg')}}" alt="avatar" class="user-image img-fluid">
                                                <div class="contact-info">
                                                    <p class="contact-name mb-0">Rolanda Cusumano</p>
                                                    <p class="contact-position mb-0 small font-weight-bold text-muted">Project Manager</p>
                                                </div>
                                            </div>
                                            <div class="contact-email">
                                                <p class="mb-0 small">Email: </p>
                                                <p class="user-email">rc@mail.com</p>
                                            </div>
                                            <div class="contact-location">
                                                <p class="mb-0 small">Location: </p>
                                                <p class="user-location">Springfield</p>
                                            </div>
                                            <div class="contact-phone">
                                                <p class="mb-0 small">Phone: </p>
                                                <p class="user-phone">+1 (020) 123-4567</p>
                                            </div>
                                            <div class="line-h-1 h5">
                                                <a class="text-success edit-contact" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact"> 
                                        <div class="contact-content">
                                            <div class="contact-profile">                                                   
                                                <img src="{{asset('images/contact-8.jpg')}}" alt="avatar" class="user-image img-fluid">
                                                <div class="contact-info">
                                                    <p class="contact-name mb-0">Morris Thibeau</p>
                                                    <p class="contact-position mb-0 small font-weight-bold text-muted">Account Executive</p>
                                                </div>
                                            </div>
                                            <div class="contact-email">
                                                <p class="mb-0 small">Email: </p>
                                                <p class="user-email">mt@mail.com</p>
                                            </div>
                                            <div class="contact-location">
                                                <p class="mb-0 small">Location: </p>
                                                <p class="user-location">Georgetown</p>
                                            </div>
                                            <div class="contact-phone">
                                                <p class="mb-0 small">Phone: </p>
                                                <p class="user-phone">+1 (020) 123-4567</p>
                                            </div>
                                            <div class="line-h-1 h5">
                                                <a class="text-success edit-contact" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact"> 
                                        <div class="contact-content">
                                            <div class="contact-profile">                                                   
                                                <img src="{{asset('images/contact-14.jpg')}}" alt="avatar" class="user-image img-fluid">
                                                <div class="contact-info">
                                                    <p class="contact-name mb-0">Nisha Fraise</p>
                                                    <p class="contact-position mb-0 small font-weight-bold text-muted">Nursing Assistant</p>
                                                </div>
                                            </div>
                                            <div class="contact-email">
                                                <p class="mb-0 small">Email: </p>
                                                <p class="user-email">nf@mail.com</p>
                                            </div>
                                            <div class="contact-location">
                                                <p class="mb-0 small">Location: </p>
                                                <p class="user-location">Fairview</p>
                                            </div>
                                            <div class="contact-phone">
                                                <p class="mb-0 small">Phone: </p>
                                                <p class="user-phone">+1 (020) 123-4567</p>
                                            </div>
                                            <div class="line-h-1 h5">
                                                <a class="text-success edit-contact" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact"> 
                                        <div class="contact-content">
                                            <div class="contact-profile">                                                   
                                                <img src="{{asset('images/contact-10.jpg')}}" alt="avatar" class="user-image img-fluid">
                                                <div class="contact-info">
                                                    <p class="contact-name mb-0">Brendon Schebler</p>
                                                    <p class="contact-position mb-0 small font-weight-bold text-muted">Librarian</p>
                                                </div>
                                            </div>
                                            <div class="contact-email">
                                                <p class="mb-0 small">Email: </p>
                                                <p class="user-email">bs@mail.com</p>
                                            </div>
                                            <div class="contact-location">
                                                <p class="mb-0 small">Location: </p>
                                                <p class="user-location">Greenville</p>
                                            </div>
                                            <div class="contact-phone">
                                                <p class="mb-0 small">Phone: </p>
                                                <p class="user-phone">+1 (020) 123-4567</p>
                                            </div>
                                            <div class="line-h-1 h5">
                                                <a class="text-success edit-contact" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact"> 
                                        <div class="contact-content">
                                            <div class="contact-profile">                                                   
                                                <img src="{{asset('images/contact-11.jpg')}}" alt="avatar" class="user-image img-fluid">
                                                <div class="contact-info">
                                                    <p class="contact-name mb-0">John Schebler</p>
                                                    <p class="contact-position mb-0 small font-weight-bold text-muted">Librarian</p>
                                                </div>
                                            </div>
                                            <div class="contact-email">
                                                <p class="mb-0 small">Email: </p>
                                                <p class="user-email">js@mail.com</p>
                                            </div>
                                            <div class="contact-location">
                                                <p class="mb-0 small">Location: </p>
                                                <p class="user-location">London</p>
                                            </div>
                                            <div class="contact-phone">
                                                <p class="mb-0 small">Phone: </p>
                                                <p class="user-phone">+1 (020) 123-4567</p>
                                            </div>
                                            <div class="line-h-1 h5">
                                                <a class="text-success edit-contact" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact"> 
                                        <div class="contact-content">
                                            <div class="contact-profile">                                                   
                                                <img src="{{asset('images/contact-13.jpg')}}" alt="avatar" class="user-image img-fluid">
                                                <div class="contact-info">
                                                    <p class="contact-name mb-0">Emily Halk</p>
                                                    <p class="contact-position mb-0 small font-weight-bold text-muted">Librarian</p>
                                                </div>
                                            </div>
                                            <div class="contact-email">
                                                <p class="mb-0 small">Email: </p>
                                                <p class="user-email">eh@mail.com</p>
                                            </div>
                                            <div class="contact-location">
                                                <p class="mb-0 small">Location: </p>
                                                <p class="user-location">Missouri</p>
                                            </div>
                                            <div class="contact-phone">
                                                <p class="mb-0 small">Phone: </p>
                                                <p class="user-phone">+1 (020) 123-4567</p>
                                            </div>
                                            <div class="line-h-1 h5">
                                                <a class="text-success edit-contact" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>                                 
                                            </div>
                                        </div>
                                    </div>
                                    --}}
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->
@endsection 

@section('link')

@endsection 

@section('script')
 <script src="{{asset('js/app.contactlist.js')}}"></script>
@endsection
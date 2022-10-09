@extends('layouts.main')
@section('content')   
 <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">App Chat</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">App</li>
                                <li class="breadcrumb-item active"><a href="#">Chat</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="chat-screen">
                    <a href="#" class="chat-contact round-button d-inline-block d-lg-none"><i class="icon-menu"></i></a>
                    <a href="#" class="chat-profile d-inline-block d-lg-none"><img class="img-fluid  rounded-circle" src="{{asset('images/team-3.jpg')}}" width="30" alt=""></a>
                    <div class="row row-eq-height">
                        <div class="col-12 col-lg-4 col-xl-3 mt-lg-3 pr-lg-0">
                            <div class="card border h-100 chat-contact-list">
                                <div class="card-header d-flex justify-content-between align-items-center"> 
                                    <ul class="nav nav-tabs" id="tabs-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active font-weight-bold" id="tabs-day-tab" data-toggle="tab" href="#tabs-day" role="tab" aria-controls="tabs-day" aria-selected="true">Chat</a>
                                        </li>
                                        {{--
                                        <li class="nav-item">
                                            <a class="nav-link font-weight-bold" id="tabs-week-tab" data-toggle="tab" href="#tabs-week" role="tab" aria-controls="tabs-week" aria-selected="false">Contacts</a>
                                        </li>
                                        --}}
                                    </ul>
                                    {{--
                                    <a href="#"  class="bg-primary py-1 px-2 rounded ml-auto text-white" data-toggle="modal" data-target="#newcontact">
                                        <span class="d-xl-inline-block">Add New</span>
                                    </a>
                                    --}}
                                    <!-- The Modal -->
                                    <div class="modal" id="newcontact">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">
                                                        <i class="icon-user-follow"></i> Add Friends
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i class="icon-close"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">                                               
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="emails" class="col-form-label">Name</label>
                                                            <input type="text" class="form-control" id="name">
                                                        </div>                                                    
                                                        <div class="form-group">
                                                            <label for="emails" class="col-form-label">Email addresses</label>
                                                            <input type="text" class="form-control" id="emails">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="emails" class="col-form-label">Phone</label>
                                                            <input type="text" class="form-control" id="phone">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message" class="col-form-label">Message</label>
                                                            <textarea class="form-control" id="message"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content tab-content2">
                                    <div class="tab-pane fade show active" id="tabs-day" role="tabpanel" aria-labelledby="tabs-day-tab">
                                        <ul class="nav flex-column chat-menu" id="myTab" role="tablist">
                                            @if($all_members)
                                            @foreach($all_members as $member)
                                            <?php 
                                            $user_img = (!empty($member->profile_pic))?asset($member->profile_pic):asset('images/no-img.png');
                                            ?>
                                            <li class="nav-item px-3">
                                                <a class="nav-link online-status green chatmessages" title="{{ $member->name }}" data-user_id="{{ $member->id }}" data-name="{{$member->name}}" data-username="{{ $member->username }}" data-image="{{ $user_img }}" data-email="{{ $member->email }}" data-toggle="tab" href="#nav-profile-chat{{ $member->id }}" data-toggle="tab" href="#tab1" role="tab" aria-selected="true">
                                                    <div class="media d-block d-flex text-left py-2">
                                                        <img class="img-fluid mr-3 rounded-circle" style="width: 50px;height: 50px;" src="{{$user_img}}" alt="">
                                                        <div class="media-body align-self-center mt-0 color-primary d-flex">
                                                            <div class="message-content"> <b class="mb-1 font-weight-bold d-flex">{{$member->name}}</b>
                                                               
                                                                {{-- How are you? ... 
                                                                <br>
                                                                <small class="body-color">23 hours ago</small>
                                                                --}}
                                                            </div>
                                                            {{--
                                                            	<div class="new-message ml-auto bg-primary text-white">3</div>
                                                            --}}

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach
                                            @endif
                                            {{--
                                            <li class="nav-item  px-3">
                                                <a class="nav-link online-status green" data-toggle="tab" href="#tab2" role="tab" aria-selected="false">
                                                    <div class="media d-block d-flex text-left py-2">
                                                        <img class="img-fluid  mr-3 rounded-circle" src="{{asset('images/author3.jpg')}}" alt="">
                                                        <div class="media-body align-self-center mt-0 color-primary d-flex">
                                                            <div class="message-content"> <b class="mb-1 font-weight-bold d-flex">Daniel Taylor</b>
                                                                I am waiting ... 
                                                                <br>
                                                                <small class="body-color">14 hours ago</small></div>
                                                            <div class="new-message ml-auto bg-primary text-white">1</div>

                                                        </div>
                                                    </div> 
                                                </a>
                                            </li>

                                            <li class="nav-item  px-3">
                                                <a class="nav-link online-status yellow" data-toggle="tab" href="#tab3" role="tab" aria-selected="false">
                                                    <div class="media d-block d-flex text-left py-2">
                                                        <img class="img-fluid mr-3 rounded-circle" src="{{asset('images/author.jpg')}}" alt="">
                                                        <div class="media-body align-self-center mt-0">
                                                            <b class="mb-1 font-weight-bold">Charlotte </b><br>
                                                            video <i class="fa fa-file-video-o"></i>
                                                        </div>
                                                    </div> 
                                                </a>
                                            </li>
                                            --}}

                                        </ul>                                                    
                                    </div>
                                    <div class="tab-pane fade" id="tabs-week" role="tabpanel" aria-labelledby="tabs-week-tab">
                                        <ul class="nav flex-column chat-menu" id="myTab1" role="tablist">
                                            <li class="nav-item active px-3">
                                                <a class="nav-link" data-toggle="tab" href="#tab1" role="tab" aria-selected="true">
                                                    <div class="media d-block d-flex text-left py-3">
                                                        <img class="img-fluid  mr-3 rounded-circle" src="{{asset('images/author2.jpg')}}" alt="">
                                                        <div class="media-body align-self-center mt-0">
                                                            <b class="mb-1 font-weight-bold">Harry Jones</b><br>
                                                            Managing Partner at MDD
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item px-3">
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-selected="false">
                                                    <div class="media d-block d-flex text-left py-3">
                                                        <img class="img-fluid mr-3 rounded-circle" src="{{asset('images/author3.jpg')}}" alt="">
                                                        <div class="media-body align-self-center mt-0">
                                                            <b class="mb-1 font-weight-bold">Daniel Taylor</b><br>
                                                            Freelance Web Developer
                                                        </div>
                                                    </div> 
                                                </a>
                                            </li>
                                            <li class="nav-item px-3">
                                                <a class="nav-link" data-toggle="tab" href="#tab3" role="tab" aria-selected="false">
                                                    <div class="media d-block d-flex text-left py-3">
                                                        <img class="img-fluid mr-3 rounded-circle" src="{{asset('images/author.jpg')}}" alt="">
                                                        <div class="media-body align-self-center mt-0">
                                                            <b class="mb-1 font-weight-bold">Charlotte </b><br>
                                                            Co-Founder &amp; CEO at Pi
                                                        </div>
                                                    </div> 
                                                </a>
                                            </li>
                                            <li class="nav-item px-3">
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-selected="false">
                                                    <div class="media d-block d-flex text-left py-3">
                                                        <img class="img-fluid  mr-3 rounded-circle" src="{{asset('images/author7.jpg')}}" alt="">
                                                        <div class="media-body align-self-center mt-0">
                                                            <b class="mb-1 font-weight-bold">Jack Sparrow</b><br>
                                                            Managing Partner at MDD
                                                        </div>
                                                    </div> 
                                                </a>
                                            </li>
                                            <li class="nav-item px-3">
                                                <a class="nav-link" data-toggle="tab" href="#tab5" role="tab" aria-selected="false">
                                                    <div class="media d-block d-flex text-left py-3">
                                                        <img class="img-fluid mr-3 rounded-circle" src="{{asset('images/author6.jpg')}}" alt="">
                                                        <div class="media-body align-self-center mt-0">
                                                            <b class="mb-1 font-weight-bold">Bhaumik</b><br>
                                                            Managing Partner at MDD
                                                        </div>
                                                    </div> 
                                                </a>
                                            </li>

                                        </ul>
                                    </div>                                
                                </div>  
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-xl-6 mt-3 pl-lg-0 pr-lg-0">
                            <div class="card border h-100 rounded-0">
                                <div class="card-body p-0">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <ul class="nav flex-column chat-menu" id="myTab3" role="tablist">
                                                <li class="nav-item active px-3 px-md-1 px-xl-3">                                               
                                                    <div class="media d-block d-flex text-left py-2">
                                                        <img class="img-fluid  mr-3 rounded-circle" id="chat_image" src="{{asset('images/team-3.jpg')}}"style="width: 50px;height: 50px;" alt="">
                                                        <div class="media-body align-self-center mt-0  d-flex">
                                                            <div class="message-content"> <h6 class="mb-1 font-weight-bold d-flex" id="chat_username">Harry Jones</h6>
                                                               
                                                                <br>
                                                            </div>
                                                            {{--
                                                            <div class="call-button ml-auto">
                                                                <a href="#" class="call h4 mb-0" data-toggle="modal" data-target="#call1"><i class="icon-phone"></i></a>
                                                                <a href="#" class="video-call h4 mb-0" data-toggle="modal" data-target="#call1"><i class="icon-camrecorder"></i></a>
                                                            </div>
                                                            --}}
                                                        </div>
                                                    </div>                                               
                                                </li>
                                            </ul>
                                            <!-- The Modal -->
                                            <div class="modal" id="call1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">

                                                        <div class="modal-body p-0">                                               
                                                            <ul class="nav flex-column chat-menu">
                                                                <li class="nav-item active px-3 py-4">                                               
                                                                    <div class="media d-block d-flex text-left py-3">
                                                                        <img class="img-fluid mr-3 rounded-circle" src="{{asset('images/author2.jpg')}}" alt="">
                                                                        <div class="media-body align-self-center mt-0  d-flex">
                                                                            <div class="message-content"> <h6 class="mb-1 font-weight-bold d-flex">Harry Jones</h6>
                                                                                calling ... 
                                                                                <br>
                                                                            </div>
                                                                            <div class="call-button ml-auto">
                                                                                <a href="#" class="call h4" data-toggle="modal" data-target="#call1"><i class="icon-phone"></i></a>
                                                                                <a href="#" class="video-call ml-2 h4 bg-danger"  data-dismiss="modal"><i class="icon-close"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                               
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>



                                            <div class="scrollerchat p-3">   
                                            	{{--
                                                <div class="media d-flex  mb-4">
                                                    <div class="p-3 ml-auto speech-bubble">
                                                        Hello John, how can I help you today ?
                                                    </div>
                                                    <div class="ml-4"><a href="#"><img src="{{asset('images/author2.jpg')}}" alt="" class="img-fluid rounded-circle" /></a></div>
                                                </div>
                                                <div class="media d-flex mb-4">
                                                    <div class="mr-4 thumb-img"><a href="#"><img src="{{asset('images/author3.jpg')}}" alt="" class="img-fluid rounded-circle" /></a></div>
                                                    <div class="p-3 mr-auto speech-bubble alt">
                                                        Hi, I want to buy a new shoes.
                                                    </div>
                                                </div>
                                                <div class="media d-flex mb-4">
                                                    <div class="p-3 ml-auto speech-bubble">
                                                        Shipment is free. You'll get your shoes tomorrow!<br/>
                                                        <img src="{{asset('images/shoes.jpg')}}" alt="" width="300" class="img-fluid mt-2" />
                                                    </div>
                                                    <div class="ml-4"><a href="#"><img src="{{asset('images/author2.jpg')}}" alt="" class="img-fluid rounded-circle" /></a></div>
                                                </div>

                                                <div class="media d-flex mb-4">
                                                    <div class="mr-4 thumb-img"><a href="#"><img src="{{asset('images/author3.jpg')}}" alt="" class="img-fluid rounded-circle" /></a></div>
                                                    <div class="p-3 mr-auto speech-bubble alt">
                                                        Wow that's great!
                                                    </div>
                                                </div>
                                                --}}

                                                <div id="msgarea"></div>

                                                {{--
                                                <!-- Left Chat -->
                                                <div class="media d-flex mb-4">
                                                    <div class="mr-4 thumb-img"><a href="#"><img src="{{asset('images/author3.jpg')}}" alt="" class="img-fluid rounded-circle" /></a></div>
                                                    <div class="p-3 mr-auto speech-bubble alt">
                                                        Ok. Thanks for the answer. Appreciated.<br/>
                                                    </div>
                                                </div>
                                                <!-- Left Chat End -->

                                                <!-- Right Chat -->
                                                <div class="media d-flex mb-4">
                                                    <div class="p-3 ml-auto speech-bubble">
                                                        You are welcome!
                                                    </div>
                                                    <div class="ml-4"><a href="#"><img src="{{asset('images/author2.jpg')}}" alt="" class="img-fluid rounded-circle" /></a></div>
                                                </div>
                                                <!-- Right Chat End -->
                                                --}}

                                            </div>
                                            <div class="border-top theme-border px-2 py-3 position-relative chat-box">
                                            	<form action="javascript:void(0)" id="save-message" method="post">
                     	 						@csrf
                                            	<input type="hidden" name="to_user_id" value="" id="touser">
                                                <input type="text" class="form-control mr-2" id="message" name="message" placeholder="Type message here ..." />   

                                                <a href="javascript:void(0)" id="formsubmit" class="p-2 ml-2 rounded line-height-21 bg-primary text-white"><i class="icon-cursor align-middle"></i></a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-lg-4 col-xl-3 mt-lg-3 pl-lg-0">
                            <div class="card border h-100 chat-user-profile">
                                <ul class="nav flex-column">
                                    <li class="nav-item active px-3">                                               
                                        <div class="media d-block d-flex text-left py-2">                                                   
                                            <div class="media-body align-self-center mt-0  d-flex">
                                                <div class="message-content my-1"> <h6 class="mb-1 font-weight-bold d-flex" id="user_big_username">Harry Jones</h6>
                                                    <span id="user_big_designation"></span>
                                                    <br>
                                                </div>                                                       
                                            </div>
                                        </div>                                               
                                    </li>
                                </ul> 
                                <img class="img-fluid" id="user_big_img" style="width: 318px;height: 287px" src="{{asset('images/team-3.jpg')}}" alt="">
                                <div class="px-3 py-4">
                                    <b>Display Name</b>
                                    <p id="user_big_nick">Harry</p>
                                    <!-- <b>Local time</b>
                                    <p>3:40AM</p> -->
                                    <b>Email Address</b>
                                    <p id="user_big_email">harry@example.com</p>
                                </div>
                                {{--
                                <div class="d-flex outline-badge-primary border-0 mt-1">
                                    <div class="w-50 text-center p-3 border-right"><a href="#" class="font-weight-bold">View Profile <i class="fas fa-arrow-right"></i></a></div>
                                    <div class="w-50 text-center p-3"><a href="#" class="text-danger font-weight-bold">Logout <span class="icon-logout"></span></a></div>
                                </div>
                                --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
@endsection
@section('css')
<style type="text/css">
	.tab-content2 {
	    height: 550px;
	    overflow-y: scroll;
	}
</style>
@endsection
@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qs/6.9.4/qs.min.js" integrity="sha512-BHtomM5XDcUy7tDNcrcX1Eh0RogdWiMdXl3wJcKB3PFekXb3l5aDzymaTher61u6vEZySnoC/SAj2Y/p918Y3w==" crossorigin="anonymous"></script>
<script type="text/javascript">
        //var socket = io.connect('127.0.0.1:9001');//url
        var socket = io.connect('http://himsportal.com:9001');//url
    	
        
        setTimeout(function() {
	        $.each( $(".chatmessages"), function( index, value ){
                if($(value).data("user_id") == {{Auth::user()->id}}){
                    $(value).trigger("click")
                }
            });
            $(".scrollerchat").animate({ scrollTop: $('.scrollerchat').prop("scrollHeight")}, 1500);
	    }, 500);


        $("#formsubmit").click(function(){
            var post_comment_id = $('#textbox').val();
            
            if (post_comment_id != '') {

              var bodymaker = submit_msg();
             
              //var comment_body = bodymaker.responseJSON.body;
              var comment_body = bodymaker.responseJSON;    
              socket.emit('message post', comment_body); // Sender
              //input.value = '';
              
            }else{
              toastr.success("You Can't Send Empty Message!",'Error!');
            }    
        })
        
      socket.on('message post', function(msg) {  // Receiver
        if({{Auth::user()->id}} == msg.from_user_id || msg.to_user_id == {{Auth::user()->id}}){
            if (msg.from_user_id == "{{Auth::user()->id}}") {
              console.log('from');
              console.log(msg.fromusername);
              image = "{{ asset(Auth::user()->profile_pic)}}";
              var body = '<div class="media d-flex mb-4"><div class="p-3 ml-auto speech-bubble">'+msg.message+'</div><div class="ml-4"><a href="#"><img style="width: 50px;height: 50px;" src="'+image+'" alt="" class="img-fluid rounded-circle" /></a></div></div>';
            }else{
              console.log('to');
              console.log(msg.fromusername);
              imagenn="{{ asset('/')}}/"+msg.fromuserimage;
              var body = '<div class="media d-flex mb-4"><div class="mr-4 thumb-img"><a href="#"><img style="width: 50px;height: 50px;" src="'+imagenn+'" alt="" class="img-fluid rounded-circle" /></a></div><div class="p-3 mr-auto speech-bubble alt">'+msg.message+'<br/></div></div>';
            }
           
            $("#msgarea").append(body);        
            window.scrollTo(0, document.body.scrollHeight);
            $(".scrollerchat").animate({ scrollTop: $('.scrollerchat').prop("scrollHeight")}, 1500);
            }
      });

$(document).ready(function(){
    $('.tabshow').hide();	
    
    $('.chatmessages').click(function(){
        $(".px-3").removeClass('active');	
        $(this).closest(".px-3").addClass("active");
        
        $('#nav-tab').hide();
        $('.tabshow').show()
        tabid=$(this).data('id');	
        $('.chatmessages').removeClass('active show');	
        $(this).addClass('active show');
        
        $('.tabshow').removeAttr('id');	
        $(this).attr('id',tabid);	
        
        id=$(this).data('user_id');	
        username=$(this).data('username');	
        displayname=$(this).data('displayname');	
        image=$(this).data('image');
        email=$(this).data('email');
        name=$(this).data('name');
        
        //console.log($(this).data('id'))
        	
        $('#chat_username').text(name);
        $('#user_big_nick').text(username);
        $('#user_big_username').text(name);
        $('#user_big_email').text(email);
        
        
        $('#chat_image').prop('src',image);
        $('#user_big_img').prop('src',image);
        
        $('#touser').prop('value',id);
        retrieve_msg(id);
    });	
})	

    function submit_msg(){
          var data;
    		var messagedata = $('#save-message').serialize();
    		return $.ajax({
                    type: 'POST',
                    url: "{{ route('save_msg') }}",
                    data: messagedata,
                    dataType: 'JSON',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    async: false,
                    success: function (response) {
                       
                        if (response.status==true){
                          // toastr.success("Message Sent!",'Success!');
                            data = response;
                            $('#save-message').trigger("reset");
                        }else{
                            toastr.success("Something went wrong!",'Error!');
                        }
                    }
                   
                });
    }

        
        $(".scrollerchat").animate({ scrollTop: $('.scrollerchat').prop("scrollHeight")}, 1500);
      function retrieve_msg(user_id){

            $('#msgarea').html('');  

            $.ajaxSetup({
              headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
              });      
              $.ajax({
               type: 'post',
               dataType : 'json',
               url: "{{route('fetch_msg')}}",        
               data: {to:user_id},
               success: function (response) {
                
                  $('#msgarea').html(response.body);  
                  $(".scrollerchat").animate({ scrollTop: $('.scrollerchat').prop("scrollHeight")}, 1500);
               }
              });
              $(".scrollerchat").animate({ scrollTop: $('.scrollerchat').prop("scrollHeight")}, 1500);
         }

</script>
@endsection
@extends('layouts.main')
@section('content')    
<main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><span class="h4 my-auto">User Office Details</span></div>
                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item">User</li>
                                <li class="breadcrumb-item active"><a href="#">Office Details</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->
                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="position-relative">
                            <div class="background-image-maker py-5"></div>
                            <div class="holder-image">
                                <img src="{{asset('images/portfolio13.jpg')}}" alt="" class="img-fluid d-none">
                            </div>
                            <div class="position-relative px-3 py-5">
                                <div class="media d-md-flex d-block">
                                    @if($user->profile_pic != "")
                                    @php $path = $user->profile_pic; @endphp
                                    @else
                                    @php $path = "images/no-img.png"; @endphp
                                    @endif
                                    <a href="#"><img src="{{asset($path)}}" width="100" alt="{{$user->name}}" class="img-fluid rounded-circle" id="blah"></a>
                                    <form method="POST" action="{{route('upload_image')}}" enctype="multipart/form-data" id="form-image-upload">
                                    @csrf
                                    <input type="file" id="upload-img" name="pic_attach" style="display:none"/> 
                                    </form>
                                    <div class="media-body z-index-1">
                                        <div class="pl-4">
                                            <h1 class="display-4 text-uppercase text-white mb-0">{{$user->name}}</h1>
                                            <h6 class="text-uppercase text-white mb-0">Created at: {{$user->created_at->diffForHumans()}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            @if ($message = Session::get('success'))
                                            <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @endif
                                            <form class="needs-validation" novalidate method="POST" action="{{route('user_office_infoupdate')}}" enctype="multipart/form-data" id="form-image-upload">
                                            @csrf
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">Employee ID</label>
                                                        <input type="text" class="form-control" name="emp_id" id="validationCustom01" readonly="" disabled="" placeholder="Employee ID" value="{{$user->emp_id}}" >
                                                        <div class="invalid-feedback">
                                                            Enter your registered Employee ID.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername">Office Email Address</label>
                                                        <div class="input-group">
                                                            <input type="email" readonly="" disabled="" class="form-control" name="email" id="validationCustomUsername" placeholder="Office Email Address" aria-describedby="inputGroupPrepend" value="{{$user->email}}" >
                                                            <div class="invalid-feedback">
                                                                Enter your office email address.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername">Designation </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <input type="text" class="form-control" readonly="" disabled="" name="designation" id="validationCustomUsername" placeholder="Designation" aria-describedby="inputGroupPrepend" value="{{isset($user->designations)?$user->designations->name:'None'}}" >
                                                            <div class="invalid-feedback">
                                                                Enter your current designation.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername">Department </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <input type="text" class="form-control" readonly="" disabled="" name="department" id="validationCustomUsername" placeholder="Department" aria-describedby="inputGroupPrepend" value="{{isset($user->departments)?$user->departments->name:'None'}}" >
                                                            <div class="invalid-feedback">
                                                                Enter your Department name.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername">Joining Date</label>
                                                        <div class="input-group">
                                                            <input type="date" class="form-control" name="join_date"  id="validationCustomUsername" placeholder="Joining Date" aria-describedby="inputGroupPrepend" 
                                                            value="{{$user->join_date}}"  max="{{date('Y-m-d')}}" min="2021-03-01" readonly="" disabled="">
                                                            <div class="invalid-feedback">
                                                                Select your date of joining
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername">Reporting Line Manager</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"  name="reporting_line" id="validationCustomUsername" placeholder="Reporting Line Manager" aria-describedby="inputGroupPrepend" readonly="" disabled="" value="{{$user->reporting_line}}" >
                                                            <div class="invalid-feedback">
                                                                Enter your reporting line person email.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername">Bank Account Number</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="bank_account_number" id="validationCustomUsername" placeholder="Bank Account Number" aria-describedby="inputGroupPrepend" value="{{$user->bank_account_number}}" >
                                                            <div class="invalid-feedback">
                                                                Enter your own bank account number.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-12 mb-12">
                                                        <div class="custom-control custom-checkbox custom-control-inline"> 
                                                            <input type="checkbox" class="custom-control-input" style="opacity: unset!important" name="company_vehicle" value="has-vehicle" id="checkfleet" 
                                                            @if((!empty($user->v_model_name))&&(!empty($user->v_model_year))&&(!empty($user->v_number_plate))) checked="" @endif
                                                            >    
                                                            <label class="checkbox-info outline" for="checkfleet">Company Vehicle (If have any)</label>
                                                                </div>
                                                    </div>
                                                    </div>
                                                    <div class="row" id="havecar">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">Model Name</label>
                                                        <input type="text" class="form-control" name="v_model_name" id="validationCustom01" placeholder="Model Name" value="{{$user->v_model_name}}" >
                                                        <div class="invalid-feedbackk">
                                                           Enter your car model name
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername">Model Year</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <input type="text" class="form-control" name="v_model_year" id="validationCustomUsername" placeholder="Model Year" aria-describedby="inputGroupPrepend" value="{{$user->v_model_year}}" >
                                                            <div class="invalid-feedback">
                                                                Enter your car model year
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername">Car Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <input type="text" class="form-control" name="v_number_plate" id="validationCustomUsername" placeholder="Car Number" aria-describedby="inputGroupPrepend" value="{{$user->v_number_plate}}" >
                                                            <div class="invalid-feedback">
                                                                Enter your car number
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <br>
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row mt-3"></div>
                <!-- END: Card DATA-->
            </div>
</main>
@endsection
@section('css')
<style type="text/css">
</style>
@endsection
@section('js')
<script>
    $('document').ready(function(){
        $('#blah').click(function(){ 
            $('#upload-img').trigger('click'); 
        });    
    });
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }
    $("#upload-img").change(function() {
      $("#heading_upload").hide();
      readURL(this);
    });
    $("#upload-img").change(function(e) {
        var val = $(this).val();
        if (val.match(/(?:gif|jpg|png|bmp)$/)) {
            if (confirm('Do you really want to change your profile image?')) {
                $("#form-image-upload").submit();
            } else {
                alert('No image has been updated');
            }
        }
    });
@if((!empty($user->v_model_name))&&(!empty($user->v_model_year))&&(!empty($user->v_number_plate)))
$("#havecar").show();
$( "#checkfleet" ).prop( "checked", true );
@else
$("#havecar").hide();
$( "#checkfleet" ).prop( "checked", false );
@endif
    $("#checkfleet").click(function(){
        if ($(this).prop('checked')==true){ 
            $("#havecar").show();
            $( "#checkfleet" ).prop( "checked", true );
        }else{
            $("#havecar").hide();
            $( "#checkfleet" ).prop( "checked", false  );
        }
    })
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>  
</script>
@endsection
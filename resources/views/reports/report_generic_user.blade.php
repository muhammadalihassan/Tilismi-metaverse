@extends('layouts.main') 
@section('content')
<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Card Data-->
        
 
            @if($attributes && Helper::can_view($slug))
                <h3>{{ucwords($slug)}} Report</h3>
                <div class="row">
                @foreach($attributes as $att)
                    @if($att->attribute == $slug)
                        <div class="col-12 col-md-6 col-lg-3 mt-3 role-assign-modal" data-role_id="{{$att->id}}" data-rolename='{{$att->role}}' style="cursor: pointer;">
                            <div class="card border-bottom-0">
                                <div class="card-content border-bottom border-primary border-w-5" style="border-color: {{$att->color}} !important;">
                                    <div class="card-body p-4">
                                        <div class="d-flex">
                                            <div class="circle-50 outline-badge-primary" style="color: {{$att->color}};border: 1px solid {{$att->color}};"><span class="cf card-liner-icon cf-xsn mt-2"></span></div>
                                            <div class="media-body align-self-center pl-3">
                                                <span class="mb-0 h6 font-w-600">{{$att->name}}</span><br />
                                                <p class="mb-0 font-w-500 h6">{{$att->role}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            @endif
        
        <!-- END: Card DATA-->
    </div>
</main>
<!-- END: Content-->

@endsection 
@section('css') 
<style type="text/css">

</style>
@endsection 
@section('js')

<script type="text/javascript">
  $("#former-submit").click(function(){
    $("#assign-role-form").submit();
  })

  $(".role-assign-modal").click(function(){

    $(".show-role-name").text("Role assign for "+$(this).data("rolename"));
    var role_id = $(this).data('role_id');
    $.ajax({
        type: 'post',
        dataType : 'json',
        url: "{{route('custom_report')}}",        
        data: {role_id: role_id , _token: '{{csrf_token()}}'},
        success: function (response) {
            if (response.status == 0) {
                toastr.error("No user found");
            }else{
                window.location.href = response.redirect;
            }
        }
    });
    
    
  });
</script>
@endsection

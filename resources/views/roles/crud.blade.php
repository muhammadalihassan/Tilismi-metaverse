@extends('layouts.main') 
@section('content')
<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Card Data-->
        @if(Helper::can_create($slug))
        @if($is_hide == 0)
        <div class="row">
            <div class="d-inline-flex p-2">
                <a href="#" class="btn btn-outline-success font-w-600 my-auto text-nowrap ml-auto add-event"><i class="icon-calendar"></i> Add Record</a>
            </div>
        </div>
        @endif

        <!-- Add Event Modal -->
        <div id="addevent" class="modal fade" role="dialog">
            <div class="modal-dialog text-left">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="model-header">Form</h4>
                    </div>
                    <div class="modal-body">
                        @if($eloquent == '')
                        <form class="" id="generic-form" method="POST" action="{{route('generic_submit')}}">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-12 col-sm-6 col-12">
                                    <div class="form-group start-date">
                                        <label for="start-date" class="">Attribute:</label>
                                        <div class="d-flex">
                                            <select class="form-control" name="attribute" id="attribute" required="">
                                                
                                                @if(isset($slug) && $slug == 'roles')
                                                <option value="roles" selected="">Roles</option>
                                                @endif
                                                @if(isset($slug) && $slug == 'departments')
                                                <option value="departments" selected="">Departments</option>
                                                @endif
                                                @if(isset($slug) && $slug == 'designations')
                                                <option value="designations" selected="">Designations</option>
                                                @endif
                                                @if(isset($slug) && $slug == 'project')
                                                <option value="project" selected="">Projects</option>
                                                @endif
                                                @if(isset($slug) && $slug == 'registration-type')
                                                <option value="registration-type" selected="">Registration Type</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="assignrole"></div>
                                <div class="col-md-6 col-sm-6 col-12" id="rank-label">
                                    <div class="form-group start-date">
                                        <label for="start-date" class="">Rank:</label>
                                        <div class="d-flex">
                                            <input id="rankname" placeholder="Rank Name" name="name" class="form-control" type="text" list="name-list" autocomplete="off" required="" />
                                            @if($attributes)
                                            <datalist id="name-list">
                                             @foreach($attributes as $att)
                                              <option>{{$att->name}}</option>
                                              @endforeach
                                            </datalist>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12" id="role-label">
                                    <div class="form-group end-date">
                                        <label for="end-date" class="">Role:</label>
                                        <div class="d-flex">
                                            <input id="rolename" placeholder="Role Name" type="text" name="role" class="form-control" list="role-list" autocomplete="off" required="" />
                                            @if($attributes)
                                            <datalist id="role-list">
                                             @foreach($attributes as $att)
                                              <option>{{$att->role}}</option>
                                              @endforeach
                                            </datalist>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputColor" class="">Color:</label>

                                        <input type="color" name="color" class="border-0 m-2" id="inputColor" value="#a7f4ec" />
                                    </div>
                                </div>
                            </div>
                        </form>
                        @else
                        {!! $form !!}
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button id="discard" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        <button id="add-generic" type="submit" class="btn btn-primary eventbutton">Create</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Event Modal End-->
        @endif
            
            @if($attributes && Helper::can_view($slug))
                <h3>{{ucwords($slug)}}</h3>
                <div class="row">

                @foreach($attributes as $att)
                    @if($att->attribute == $slug)
                        <div class="col-12 col-md-6 col-lg-3 mt-3 {{($slug == 'roles')?'role-assign-modal':'updateevent'}}" data-role_id="{{$att->id}}" data-rolename='{{$att->role}}' data-slug='{{$slug}}' style="cursor: pointer;">
                            <div class="card border-bottom-0">
                                <div class="card-content border-bottom border-primary border-w-5" style="border-color: {{$att->color}} !important;">
                                    <div class="card-body p-4">
                                        <div class="d-flex">
                                            <div class="circle-50 outline-badge-primary" style="color: {{$att->color}};border: 1px solid {{$att->color}};"><span class="cf card-liner-icon cf-xsn mt-2"></span></div>
                                            <div class="media-body align-self-center pl-3">
                                                <span class="mb-0 h6 font-w-600">{{$att->name}}</span><br />
                                                <!-- <p class="mb-0 font-w-500 h6">{{$att->role}}</p> -->
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



            @if($eloquent != '' && $table != null)
                <div class="row">
                     <div class="col-12 mt-3">
                        <div class="card">
                           <div class="card-header justify-content-between align-items-center">
                              <h4 class="card-title">{{ucwords($slug)}} Report</h4>
                           </div>
                           <div class="card-body">
                              <div class="table-responsive">
                                
                                 <table id="example" class="display table dataTable table-striped table-bordered">
                                    {!! $table['body'] !!}
                                </table>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            @endif
        
        <!-- END: Card DATA-->
    </div>
</main>
<!-- END: Content-->

@endsection 
@section('css') 
<link rel="stylesheet" href="{{asset('vendors/datatable/css/dataTables.bootstrap4.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/datatable/buttons/css/buttons.bootstrap4.min.css')}}"/>
@endsection 
@section('js')
<script src="{{asset('vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script src="{{asset('js/datatable.script.js')}}"></script>
<script>
    $(document).ready(function(){
        if ($("#description").length > 0) {
            var description = CKEDITOR.replace( 'description' );
            description.on( 'change', function( evt ) {
                $("#description").text( evt.editor.getData())    
            });
        }

        // if ($("#username").length > 0) {
        //     $("#username").addClass("validator")
        // }

        // if ($("#email").length > 0) {
        //     $("#email").addClass("validator")
        // }
    })
</script>
@if($eloquent != '' && $table != null)
<script id="scriptor">
    {!! $table['script'] !!}
</script>
@endif
<script type="text/javascript">

    $("#add-generic").click(function(){
    
        /* var counter = 0;
        var listed = $("#generic-form input").find("required");
        $(listed).each(function(i,e){
            if($(e).val() == ""){
                counter++;
            }
        })
        if (counter > 0) {
            toastr.error("All fields are required");
            return false;
        }
        $(".submit-button").click(); */

        $("#generic-form").submit();

    })

    $("body").on(".add-event","click", function(){
        $("#generic-form")[0].reset();
        $("#addevent").modal("show")
        $("#attribute").click();
    })

    $(".updateevent").click(function(){
        $("#generic-form")[0].reset();
        $("#generic-form input").each(function(i,e){
            $(e).prop("disabled" , false)
            $(e).prop("readonly" , false)            
        })
        $("#password").prop("placeholder" , "Create Password");
        $("#addevent").modal("show")
        $("#username").addClass("validator")
        $("#email").addClass("validator")
        $("#attribute").click();
    })

    $(".delete-record").click(function(){
        var id = $(this).data("id");
        var model = $(this).data("model");
        var is_active = 0;
        var is_deleted = 1;
        $.ajax({
            type: 'post',
            dataType : 'json',
            url: "{{route('delete_record')}}",        
            data: {id:id, model:model, is_active:is_active, is_deleted:is_deleted , _token: '{{csrf_token()}}'},
            success: function (response) {
                if (response.status == 0) {
                    toastr.error(response.message);
                }else{
                    toastr.success(response.message); 
                    var table = $('#example').DataTable();
                    table.ajax.reload();
                }
            }
        });
    })

    
    
    function convertToSlug( str ) {
      //replace all special characters | symbols with a space
      str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
      // trim spaces at start and end of string
      str = str.replace(/^\s+|\s+$/gm,'');
      // replace space with dash/hyphen
      str = str.replace(/\s+/g, '-');   
      document.getElementById("slug").value = str;
      //return str;
    }

    

    $("#attribute").click(function(){
        var otype = $(this).children("option:selected").val();
        if (otype == "roles") {
            $("#role-label").show();
            $("#rank-label").show();
        }else if(otype == "departments"){
            $("#role-label").hide();
            $("#rank-label").show();
        }else if(otype == "designations"){
            $("#role-label").hide();
            $("#rank-label").show();
        }
        else if(otype == "project"){
            $("#role-label").hide();
            $("#rank-label").show();
        }
    })
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif

</script>
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
        url: "{{route('role_assign_modal')}}",        
        data: {role_id, role_id , _token: '{{csrf_token()}}'},
        success: function (response) {
            if (response.body == "") {
                toastr.error("No rights found");
            }else{
                $('#body_modal').html(response.body);  
                $("#addrole-modal").modal("show");    
            }
            
        }
    });
    
    
  });


    $("body").on("focusout",".validator", function(){
  //$(".validator").on("focusout" , ".validator", focusout(function(){
    var like = $(this);
    console.log(like);
    var val = $(this).val();
    var type = 'duplicate';
    var table = $(this).data('table');
    var column = $(this).data('column');
    $.ajax({
        type: 'post',
        dataType : 'json',
        url: "{{route('validator_check')}}",        
        data: {
            val: val,
            type: type,
            table: table,
            column: column,
            "_token": "{{ csrf_token() }}",
            },
        success: function (response) {
            if (response.status == 0) {
                $(like).val("")
                $(like).prop("placeholder" , response.data)
                toastr.error(response.message);
            }else{
                $(like).val(response.data)
            }
            
        }
    });
  });
</script>
@endsection

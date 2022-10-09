@extends('layouts.main') 
@section('content')
<!-- START: Card Data-->
<main>
   <div class="container-fluid site-width">
      <!-- START: Breadcrumbs-->
      <div class="row">
         <div class="col-12 align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
               <div class="w-sm-100 mr-auto">
                  <h4 class="mb-0">Custom Users Report</h4>
               </div>
               <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item">Report</li>
                  <li class="breadcrumb-item active"><a href="#">Custom Report</a></li>
               </ol>
            </div>
         </div>
      </div>
      <!-- END: Breadcrumbs-->
      <!-- START: Card Data-->
      <div class="row">
         <div class="col-12 mt-3">
            <div class="card">
               <div class="card-header justify-content-between align-items-center">
                  <h4 class="card-title">Report</h4>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                    
                     <table id="example" class="display table dataTable table-striped table-bordered">
                        <thead>
                           <tr>
                              <th>Emp ID</th>
                              <th>Name</th>
                              <th>Designation</th>
                              <th>Department</th>
                              <th>Email</th>
                              {{-- <th>Joining date</th> --}}
                              <th>Salary</th>
                              <th>Role</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($all_user) @foreach($all_user as $val)
                           <tr>
                              <td>{{$val->emp_id}}</td> 
                              <td>{{$val->name}}</td>
                              <td>{{!is_null($val->designations)?$val->designations->name:'None'}}</td>
                              <td>{{!is_null($val->departments)?$val->departments->name:'None'}}</td>
                              <td>{{$val->email}}</td>
                              {{-- <td>{{$val->join_date}}</td> --}}
                              <td>{{$val->salary}}</td>
                              <td>{{($val->roles)?$val->roles->role:'Not Assign'}}</td>
                              <td>
                                 <button type="button" class="btn btn-primary edit_user" data-designation= "{{!is_null($val->designations)?$val->designations->name:'None'}}"data-edit_userid= "{{$val->id}}" data-emp_id= "{{$val->emp_id}}" data-department= "{{!is_null($val->departments)?$val->departments->name:'None'}}" data-reporting_line= "{{$val->reporting_line}}" data-salary= "{{$val->salary}}" data-email= "{{$val->email}}"data-role_id= "@if(!is_null($val->roles)) {{$val->roles->role}} @else No Role Assigned @endif"data-status= "@if($val->is_active == 1) Acitve @else Inactive @endif" data-shift_in="{{$val->shift_in}}" data-shift_out="{{$val->shift_out}}">Edit</button>
                              </td>
                           </tr>
                           @endforeach @endif
                        </tbody>
                        <tfoot>
                           <tr>
                              <th>Emp ID</th>
                              <th>Name</th>
                              <th>Designation</th>
                              <th>Department</th>
                              <th>Email</th>
                              {{-- <th>Joining date</th> --}}
                              <th>Salary</th>
                              <th>Role</th>
                              <th>Action</th>
                           </tr>
                        </tfoot>
                    </table>
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- END: Card DATA-->
   </div>
</main>
<!-- Edit user modal -->
<div class="modal fade" id="exampleModalgrid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle3" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle3">Edit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
        <form method="POST" action="{{route('user_updates')}}">
        @csrf
        <input type="hidden" name="user_id" id="edit_userid">
         <div class="modal-body">
            <div class="container-fluid">
               <div class="container-fluid site-width">
                  <!-- START: Breadcrumbs-->
                  <div class="row">
                     <div class="col-12 align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                           <div class="w-sm-100 mr-auto">
                              <h4 class="mb-0">User Form</h4>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END: Breadcrumbs-->
                  <!-- START: Card Data-->
                    
                      <div class="row">
                         <div class="col-12 mt-3">
                            <div class="card">
                               <div class="card-body">
                                  <table id="user" class="table table-bordered table-striped" style="clear: both;">
                                     <tbody>
                                        <tr>
                                           <td class="w-50">Email Address</td>
                                           <td class="w-50">
                                            <a href="#" id="edit_email" data-type="email" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter Email"></a>
                                        </td>
                                        </tr>
                                        <tr>
                                           <td>Employee ID</td>
                                           <td>
                                              <a href="#" id="edit_emp_id" data-type="number" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter Employee ID"></a>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>Select Designation</td>
                                           <td>
                                              <a href="#"  id="edit_designation" data-type="select" data-pk="1" data-value="" data-title="Select designation"></a>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>Select Role</td>
                                           <td>
                                                <a href="#" id="edit_role_id" class="edit_form" data-feild_name="role_id" data-type="select" data-pk="1" data-value="" data-title="Select Role"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>Select Department</td>
                                           <td>
                                              <a href="#" id="edit_department" data-type="select" data-pk="1" data-value="" data-title="Select department"></a>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>Select Reporting Line Person</td>
                                           <td>
                                              <a href="#" id="edit_reporting_line" data-type="select" data-pk="1" data-value="" data-title="Select Reporting Line Person"></a>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>Select Shift In</td>
                                           <td>
                                              <a href="#" id="edit_shift_in" data-type="select" data-pk="1" data-value="" data-title="Select Shift Timing In"></a>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>Select Shift Out</td>
                                           <td>
                                              <a href="#" id="edit_shift_out" data-type="select" data-pk="1" data-value="" data-title="Select Shift Timing Out"></a>
                                           </td>
                                        </tr>
                                        <tr>
                                           <td>Salary</td>
                                           <td>
                                              <a href="#" id="edit_salary" data-type="number" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter Salary"></a>
                                           </td>
                                        </tr>
                                        
                                        <tr>
                                           <td>Status</td>
                                           <td>
                                              <a href="#" id="edit_active" data-type="select" data-pk="1" data-value="" data-title="Select Person Status"></a>
                                           </td>
                                        </tr>
                                     </tbody>
                                  </table>
                               </div>
                            </div>
                         </div>
                      </div>
                    
                  <!-- END: Card DATA-->
               </div>
            </div>
         </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
   </div>
</div>

<!-- Edit user modal End-->
<!-- END: Card DATA-->
@endsection 
@section('link') 
<link rel="stylesheet" href="{{asset('vendors/datatable/css/dataTables.bootstrap4.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/datatable/buttons/css/buttons.bootstrap4.min.css')}}"/>
<link rel="stylesheet" href="{{asset('vendors/x-editable/css/bootstrap-editable.css')}}" />
@endsection 

@section('script') 
<!-- END: Template JS-->

<script src="{{asset('vendors/x-editable/js/bootstrap-editable.min.js')}}"></script>
<script src="{{asset('js/xeditable.script.js')}}"></script>

<script src="{{asset('vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('vendors/datatable/jszip/jszip.min.js')}}"></script>
<script src="{{asset('vendors/datatable/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/datatable/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('vendors/datatable/buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/datatable/buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/datatable/buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('vendors/datatable/buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('vendors/datatable/buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/datatable/buttons/js/buttons.print.min.js')}}"></script>

<script src="{{asset('js/datatable.script.js')}}"></script>
@endsection 

@section('css') 
<style type="text/css"></style>
@endsection 
@section('js') 
<script type="text/javascript">

    // $(".edit_user").click(function(){
        
    //     $("#edit_designation").text($(this).data('designation'));
    //     $("#edit_department").text($(this).data('department'));
    //     $("#edit_emp_id").text($(this).data('emp_id'));
    //     $("#edit_reporting_line").text($(this).data('reporting_line'));
    //     $("#edit_salary").text($(this).data('salary'));
    //     $("#edit_role_id").text($(this).data('role_id'));
    //     $("#edit_email").text($(this).data('email'));
    //     $("#edit_email").prop("data-placeholder",$(this).data('email'));
    //     $("#edit_active").text($(this).data('status'));

    //     $("#edit_shift_in").text($(this).data('shift_in'));
    //     $("#edit_shift_out").text($(this).data('shift_out'));

    //     $("#edit_userid").val($(this).data('edit_userid'));
    //     $("#exampleModalgrid").modal('show');
    // })   

    $('#edit_designation').click(function(){
            @if($designation)
            var body = "<select name='designations' class='form-control input-sm'>";
                @foreach($designation as $key => $val)
                    @if($val->attribute == "designations")
                        body += "<option value='{{$val->id}}'>{{$val->name}}</option>";
                    @endif
                @endforeach
                body += " </select>";
            @endif
        $(this).closest("td").html(body);
    })
    $('#edit_role_id').click(function(){
        @if($designation)
        var body = "<select name='role_id' class='form-control input-sm'>";
            @foreach($designation as $key => $val)
                @if($val->attribute == "roles")
                    body += "<option value='{{$val->id}}'>{{$val->role}}</option>";
                @endif
            @endforeach
            body += " </select>";
        @endif
        $(this).closest("td").html(body);
    })
    $('#edit_department').click(function(){
        @if($designation)
            var body = "<select name='department_id' class='form-control input-sm'>";
            @foreach($designation as $key => $val)
                @if($val->attribute == "departments")
                body += "<option value='{{$val->id}}'>{{$val->name}}</option>";
                @endif
            @endforeach
            body += " </select>";
        @endif
        $(this).closest("td").html(body);
    })
    $('#edit_reporting_line').click(function(){
        @if($all_user)
            var body = "<select name='reporting_line_id' class='form-control input-sm'>";
            @foreach($all_user as $key => $val)
                @if($val->role_id != 0)
                body += "<option value='{{$val->id}}'>{{$val->name}}</option>";
                @endif
            @endforeach
            body += " </select>";
        @endif
        $(this).closest("td").html(body);
    })
    
    $('#edit_shift_in').click(function(){
            @php 
            $body = "";
            $start = "00:00"; //you can write here 00:00:00 but not need to it
            $end = "23:30";

            $tStart = strtotime($start);
            $tEnd = strtotime($end);
            $tNow = $tStart;
            $body .= "<select name='shift_in' class='form-control input-sm'>";
            while($tNow <= $tEnd){
                $body .= "<option value='".date('H:i:s',$tNow)."'>".date('H:i:s',$tNow)."</option>";
                $tNow = strtotime('+30 minutes',$tNow);
            }
            $body .= "</select>";
            @endphp
            
        $(this).closest("td").html("<?=$body?>");
    })

    $('#edit_shift_out').click(function(){
            @php 
            $body = "";
            $start = "00:00"; //you can write here 00:00:00 but not need to it
            $end = "23:30";

            $tStart = strtotime($start);
            $tEnd = strtotime($end);
            $tNow = $tStart;
            $body .= "<select name='shift_out' class='form-control input-sm'>";
            while($tNow <= $tEnd){
                $body .= "<option value='".date('H:i:s',$tNow)."'>".date('H:i:s',$tNow)."</option>";
                $tNow = strtotime('+30 minutes',$tNow);
            }
            $body .= "</select>";
            @endphp
            
        $(this).closest("td").html("<?=$body?>");
    })

    $('#edit_active').click(function(){
        var body = "<select name='status' class='form-control input-sm'>";
        body += "<option value='1'>Active</option><option value='0'>In-Active</option>";
        body += " </select>";        
        $(this).closest("td").html(body);
    })

    $('#edit_emp_id').click(function(){
        var body = "<input type='number' class='form-control input-mini' name='emp_id' placeholder='Required' style='padding-right: 24px;'>";
        $(this).closest("td").html(body);
    })

    $('#edit_email').click(function(){
        var body = "<input type='email' class='form-control input-mini' name='email' placeholder='Required' style='padding-right: 24px;'>";
        $(this).closest("td").html(body);
    })

    $('#edit_salary').click(function(){
        var body = "<input type='number' class='form-control input-mini' name='salary' placeholder='Required' style='padding-right: 24px;'>";
        $(this).closest("td").html(body);
    })
    
</script>
@endsection
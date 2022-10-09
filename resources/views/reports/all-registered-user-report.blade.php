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
                  <h4 class="mb-0">All Users</h4>
               </div>
               <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item">Report</li>
                  <li class="breadcrumb-item active"><a href="#">User Report</a></li>
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
                        @if($slug == "personnel")
                          <thead>
                             <tr>
                                <th>Emp ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Role</th>
                                <th>Personnel Email</th>
                                <th>Joining Date</th>
                                <th>Salary</th>
                                <th>CNIC</th>
                                <th>Bank Account Number</th>
                                <th>Shift Timing</th>
                                
                             </tr>
                          </thead>
                          <tbody>
                             @if($all_user) 
                               @foreach($all_user as $val)
                               <tr>
                                  <td>{{$val->emp_id}}</td> 
                                  <td>{{$val->name}}</td>
                                  <td>{{!is_null($val->designations)?$val->designations->name:'None'}}</td>
                                  <td>{{!is_null($val->departments)?$val->departments->name:'None'}}</td>
                                  <td>{{($val->roles)?$val->roles->role:'Not Assign'}}</td>
                                  <td>{{$val->email}}</td>
                                  <td>{{$val->join_date}}</td>
                                  <td>{{$val->salary}}</td>
                                  <td>{{$val->cnic}}</td>
                                  <td>{{$val->bank_account_number}}</td>
                                  <td>{{$val->shift_in}} to {{$val->shift_out}}</td>
                                  
                               </tr>
                               @endforeach 
                             @endif
                          </tbody>
                          <tfoot>
                             <tr>
                                <th>Emp ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Role</th>
                                <th>Personnel Email</th>
                                <th>Joining Date</th>
                                <th>Salary</th>
                                <th>CNIC</th>
                                <th>Bank Account Number</th>
                                <th>Shift Timing</th>
                             </tr>
                          </tfoot>

                        @else

                          <thead>
                             <tr>
                                <th>Emp ID</th>
                                <th>Name</th>
                                <th>Official Email</th>
                                <th>Contact Number</th>
                                <th>Emergency Number</th>
                                <th>CNIC</th>
                                <th>Residential Address</th>
                                <th>DOB</th>
                                <th>Marital Status</th>
                                <th>Blood Group</th>
                                
                             </tr>
                          </thead>
                          <tbody>
                             @if($all_user) 
                                 @foreach($all_user as $val)
                                 <tr>
                                    <td>{{$val->emp_id}}</td> 
                                    <td>{{$val->name}}</td>
                                    <td>{{$val->personal_email}}</td>
                                    <td>{{$val->phonenumber}}</td>
                                    <td>{{$val->emergency_number}}</td>
                                    <td>{{$val->cnic}}</td>
                                    <td>{{$val->residential_address}}</td>
                                    <td>{{$val->dob}}</td>
                                    <td>{{$val->marital_status}}</td>
                                    <td>{{$val->blood_group}}</td>
                                  
                                 </tr>
                                 @endforeach 
                               @endif
                            </tbody>
                            <tfoot>
                               <tr>
                                <th>Emp ID</th>
                                <th>Name</th>
                                <th>Official Email</th>
                                <th>Contact Number</th>
                                <th>Emergency Number</th>
                                <th>CNIC</th>
                                <th>Residential Address</th>
                                <th>DOB</th>
                                <th>Marital Status</th>
                                <th>Blood Group</th>
                               </tr>
                            </tfoot>
                        @endif
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

    $(".edit_user").click(function(){
      var user_id = $(this).data('edit_userid');
      $("#userid_shift").val(user_id);
    })
        
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

    $("#update_shift").click(function(){
      $("#exampleModalgrid").modal('hide');
      $("#user_shift_modal").modal('show');
    })
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
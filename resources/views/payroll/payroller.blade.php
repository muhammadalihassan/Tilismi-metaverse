@extends('layouts.main') @section('content')
<!-- START: Card Data-->

<!-- START: Main Content-->
{{--
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">Task Board</h4>
                    </div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item active"><a href="#">Task Board</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- Add Task -->
        <div class="modal fade" id="edittask">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><i class="icon-pencil"></i> Edit Task</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="icon-close"></i>
                        </button>
                    </div>

                    <form class="edit-task">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="edit-task-name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" id="edit-task-name" />
                            </div>
                            <div class="form-group">
                                <label for="edit-task-description" class="col-form-label">Description</label>
                                <textarea class="form-control" rows="10" id="edit-task-description"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="task-date" />
                            <button type="submit" class="btn btn-primary send-email">Edit Task</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- START: Card Data-->
        <div class="row row-eq-height task-list-row">
            <div class="col-12 col-md-6 col-lg mt-3 task-list-item">
                <div class="card bg-primary-light">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title">Columns</h6>
                    </div>
                    <div class="card-body">
                        <div class="task-list">
                          <div class="row">
                            
                            <div class="card my-2 task-card col-md-6 pay-column">
                                <div class="card-content">
                                    <div class="card-body p-4 body-color">
                                        <h6 class="mb-3 font-w-600">Name</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-2 task-card col-md-6 pay-column">
                                <div class="card-content">
                                    <div class="card-body p-4 body-color">
                                        <h6 class="mb-3 font-w-600">Salary </h6>
                                        <!-- <a class="text-success edit-task" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a> -->
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg mt-3 task-list-item">
                <div class="card bg-primary-light">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title">Include in Report</h6>
                    </div>
                    <div class="card-body">
                        <div class="task-list">
                          <div class="row">
                            <div class="card my-2 task-card col-md-6 pay-column">
                                <div class="card-content">
                                    <div class="card-body p-4 body-color">
                                        <h6 class="mb-3 font-w-600">Employee ID</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card my-2 task-card">
                                <div class="card-content">
                                    <div class="card-body p-4 body-color">
                                        <h6 class="mb-3 font-w-600">Video not Wokring</h6>
                                        <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <span class="task-date">May 15th, 2020</span></p>
                                        <div class="d-flex">
                                            <div class="my-auto line-h-1 h5">
                                                <a class="text-success edit-task" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                <a class="text-danger delete-task" href="#"><i class="icon-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                          </div>
                        </div>
                        <!-- <a href="#" class="bg-primary w-100 d-block text-center py-2 px-2 mt-3 rounded text-white add-task" data-toggle="modal" data-target="#addtask">
                            <i class="icon-plus align-middle text-white"></i> <span>Add Task</span>
                        </a> -->
                    </div>
                </div>
            </div>
            
        </div>
        <!-- END: Card DATA-->
    </div>
</main>
--}}
<!-- END: Content-->

<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">Users Payroll</h4>
                    </div>
                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Payroll</li>
                        <li class="breadcrumb-item active"><a href="#">Users Payroll</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->
        <!-- START: Card Data-->
        <div class="row">
          <div class="col-12 mt-3">
            <div class="card">
              <div class="card-content">
                                <div class="card-body py-5">                                   
                                    <form class="form-row" id="report-payroll-form">                                                                                     
                                        <div class="form-group col-sm-6">                                               
                                            <input type="month" class="form-control" name="month_name" id="month_name" value="" onchange="this.setAttribute('value', this.value);">
                                            <label class="form-control-placeholder" for="month_name">Month</label>
                                        </div>                                                    
                                        <div class="form-group col-sm-6">
                                            <button class="btn btn-primary" type="button" id="generate-payroll">Generate</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header justify-content-between align-items-center">
                        <h4 class="card-title">Payroll Report</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="payroll-report" class="display table dataTable table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Emp-ID</th>
                                        <th>Name</th>
                                        <th>Working-Day</th>
                                        <th>Absents</th>
                                        <th>Late-In</th>
                                        <th>Early-Out</th>
                                        <th>Working-Hours</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody id="body_roll"></tbody>
                                <tfoot>
                                    <tr>
                                        <th>Emp-ID</th>
                                        <th>Name</th>
                                        <th>Working-Day</th>
                                        <th>Absents</th>
                                        <th>Late-In</th>
                                        <th>Early-Out</th>
                                        <th>Working-Hours</th>
                                        <th>Salary</th>
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


<!-- Edit user modal End-->
<!-- END: Card DATA-->
@endsection @section('link')
<link rel="stylesheet" href="{{asset('vendors/datatable/css/dataTables.bootstrap4.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/datatable/buttons/css/buttons.bootstrap4.min.css')}}" />

@endsection @section('script')
<!-- END: Template JS-->

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
<script src="{{asset('js/app-taskboard.js')}}"></script>
@endsection @section('css')
<style type="text/css">
  .pay-column{
    height: 65px;
  }

  .pay-column-head{
    height: 10px;
  }

</style>
@endsection @section('js')
<script type="text/javascript">
    $("#generate-payroll").click(function () {
      var month_name = $("#month_name").val();
      $.ajax({
        type: 'post',
        dataType : 'json',
        url: "{{route('payroll_month_report')}}",  
        data: {month_name, month_name , _token: '{{csrf_token()}}'},
        success: function (response) {
            if (response.body == "") {
                toastr.error("No data found");
            }else{
                $('#body_roll').html(response.body);  
            }
        }
      });
    });
</script>
@endsection

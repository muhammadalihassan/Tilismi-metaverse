@extends('layouts.main') @section('content')
<!-- START: Card Data-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">Leave Applications</h4>
                    </div>
                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Report</li>
                        <li class="breadcrumb-item active"><a href="#">Employee Leave Application</a></li>
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
                                        <th>#</th>
                                        <th>App ID</th>
                                        <th>Emp ID</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Department</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Day</th>
                                        <th>Reason</th>
                                        <th>Approval Date</th>
                                        <th>Update By</th>
                                        <th>Comments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($leave_application) @foreach($leave_application as $key => $leave)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$leave->code}}</td>
                                        <td>{{$leave->emp_id}}</td>
                                        <td>{{$leave->employee->name}}</td>
                                        <td>{{$leave->designations->name}}</td>
                                        <td>{{$leave->departments->name}}</td>
                                        <td>{{date('d M Y' ,strtotime($leave->start_date))}}</td>
                                        <td>{{date('d M Y' ,strtotime($leave->end_date))}}</td>
                                        <td>{{$leave->day}}</td>
                                        <td><a href="javascript:void(0)" class="view-data" data-view="{{$leave->reason}}">View</a></td>
                                        <td>{{date('d M Y' ,strtotime($leave->updated_at))}}</td>
                                        <td>{{isset($leave->linemanager)?$leave->linemanager->name:'Pending'}}</td>
                                        <td>@if(isset($leave->update_reason)) <a href="javascript:void(0)" class="view-data" data-view="{{$leave->update_reason}}">View</a> @else None @endif</td>
                                    </tr>
                                    @endforeach @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>App ID</th>
                                        <th>Emp ID</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Department</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Day</th>
                                        <th>Reason</th>
                                        <th>Approval Date</th>
                                        <th>Update By</th>
                                        <th>Comments</th>
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

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Leave Application Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="leave-reason">Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
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
@endsection @section('css')
<style type="text/css"></style>
@endsection @section('js')
<script type="text/javascript">
    $(".view-data").click(function () {
        var data = $(this).data("view");
        $("#leave-reason").html(data);
        $(".bd-example-modal-lg").modal("show");
    });
</script>
@endsection

@extends('layouts.main') @section('content')
<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><h4 class="mb-0">Team Leave Application</h4></div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Application</li>
                        <li class="breadcrumb-item active"><a href="#">Team List</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- Edit Invoice -->
        <div class="modal fade" id="editinvoice">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><i class="icon-pencil"></i> Update Application</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="icon-close"></i>
                        </button>
                    </div>
                    <form class="edit-invoice-form" method="POST" action="{{route('update_leave_form')}}">
                        @csrf
                        <input type="hidden" name="leave_application_id" id="leave_application_id">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="status" class="col-form-label">Status</label>
                                <select class="form-control" id="status" name="status" required="">
                                    <option value="" selected="" disabled="">Please select the Status</option>
                                    <option value="2">Approved</option>
                                    <option value="3">Rejected</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="taskdescription" class="">Update Reason:</label>
                                <div class="d-flex event-description">
                                    <textarea id="taskdescription" placeholder="Enter Reason for Update" rows="4"  class="form-control" name="update_reason" required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="edit-date" />
                            <button type="submit" class="btn btn-primary add-todo">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- START: Card Data-->
        <div class="row row-eq-height">

            <div class="col-12 col-lg-2 mt-3 todo-menu-bar flip-menu pr-lg-0">
                <a href="#" class="d-inline-block d-lg-none mt-1 flip-menu-close"><i class="icon-close"></i></a>
                <div class="card border h-100 invoice-menu-section">
                    <ul class="nav flex-column invoice-menu">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-invoicetype="invoice"> <i class="fas fa-list-alt"></i> All </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-invoicetype="pending-invoice"> <i class="fas fa-hourglass-end"></i> Pending </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-invoicetype="paid-invoice"> <i class="fas fa-check-double"></i> Approved </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-invoicetype="canceled-invoice"> <i class="fas fa-window-close"></i> Rejected </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-10 mt-3 pl-lg-0">
                <div class="card border h-100 invoice-list-section">

                    <div class="card-header border-bottom p-1 d-flex">
                        <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i class="icon-menu"></i></a>
                        <input type="text" class="form-control border-0 p-2 w-100 h-100 invoice-search" placeholder="Search ..." />
                    </div>
                    <div class="card-body p-0">
                        <div class="invoices list">
                            @if($leave_application) @foreach($leave_application as $leave)
                            <?php
                            if($leave->status == 1){ $stat = "pending-invoice"; } elseif ($leave->status == 2) { $stat = "paid-invoice"; } elseif ($leave->status == 3) { $stat = "canceled-invoice"; } ?>
                            <div class="invoice {{$stat}}" data-status="{{$stat}}">
                                <div class="invoice-content" data-status="{{$stat}}">
                                    <div class="">
                                        <p class="mb-0 small">Application Number:</p>
                                        <p class="invoice-no">{{$leave->code}}</p>
                                    </div>
                                    <div class="">
                                        <p class="mb-0 small">Employee Name:</p>
                                        <p class="cliname">{{$leave->employee->name}}</p>
                                    </div>
                                    <div class="">
                                        <p class="mb-0 small">Title:</p>
                                        <p class="cliname">{{$leave->title}}</p>
                                    </div>
                                    <div class="">
                                        <p class="mb-0 small">Start Date:</p>
                                        <p class="invocie-date">{{date('d M Y' , strtotime($leave->start_date))}}</p>
                                    </div>
                                    <div class="">
                                        <p class="mb-0 small">End Date:</p>
                                        <p class="invoice-due-date">{{date('d M Y' , strtotime($leave->end_date))}}</p>
                                    </div>
                                    <div class="">
                                        <p class="mb-0 small">Day:</p>
                                        <p class="invoice-due-date">{{$leave->day}}</p>
                                    </div>
                                    <div class="">
                                        <p class="mb-0 small">Reason:</p>
                                        <button type="button" style="font-size: 10px;" class="btn btn-lg btn-danger" data-toggle="popover" title="" data-content="{{$leave->reason}}" data-original-title="{{$leave->title}}">
                                            View Reason
                                        </button>
                                    </div>
                                    <div class="invoice-status-info">
                                        <p class="mb-0 small">Status</p>
                                        <p class="invoice-status"></p>
                                    </div>

                                    <div class="line-h-1 h5">
                                        
                                        @if($leave->status == 1)
                                        <a class="text-success edit-invoice" href="#" data-toggle="modal" data-target="#editinvoice" data-record_id="{{$leave->id}}"><i class="icon-pencil"></i></a>
                                        @else
                                        <a class="text-info" href="#"><i class="icon-user-unfollow"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Card DATA-->
    </div>
</main>

<!-- END: Content-->
@endsection @section('css')
<style type="text/css"></style>

@endsection @section('js')
<script src="{{asset('vendors/popper/popper.min.js')}}"></script>
<script src="{{asset('vendors/tooltip/tooltip-min.js')}}"></script>

<!-- <script src="{{asset('js/flatpickr.js')}}"></script>
<script src="{{asset('js/app.invoicelist.js')}}"></script> -->

<script type="text/javascript">
    $('.invoice-menu a').on('click', function () {
        $('.invoice-menu a').removeClass('active');
        $(this).addClass('active');
        $('.invoice').hide();
        $('.' + $(this).data("invoicetype")).show(500);
        return false;
    });

    $(".edit-invoice").click(function () {
        var id = $(this).data("record_id");
        $("#leave_application_id").val(id);
    });
</script>
@endsection

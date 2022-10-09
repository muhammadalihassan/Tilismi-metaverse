@extends('layouts.main') @section('content')
<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><h4 class="mb-0">Application List</h4></div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Application</li>
                        <li class="breadcrumb-item active"><a href="#">List</a></li>
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
                        <h5 class="modal-title"><i class="icon-pencil"></i> Edit Invoice</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="icon-close"></i>
                        </button>
                    </div>
                    <form class="edit-invoice-form">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="due-date" class="col-form-label">Due Date</label>
                                <input type="text" id="due-date" class="form-control" required="" />
                            </div>

                            <div class="form-group">
                                <label for="status" class="col-form-label">Status</label>
                                <select class="form-control" id="status">
                                    <option value="generated-invoice">Generated</option>
                                    <option value="paid-invoice">Paid</option>
                                    <option value="pending-invoice">Pending</option>
                                    <option value="canceled-invoice">Canceled</option>
                                </select>
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
            <div class="col-12 col-md-12 mt-3">
                <div class="card">
                    <div class="card-body d-md-flex text-center">
                        <ul class="d-md-flex m-0 pl-0 list-unstyled">
                            <li class="pill cl-pending py-1 px-2 mr-md-2 text-center my-1">
                                Pending
                            </li>

                            <li class="pill cl-approved py-1 px-2 mr-md-2 text-center my-1">
                                Approved
                            </li>
                            <li class="pill cl-rejected py-1 px-2 mr-md-2 text-center my-1">
                                Rejected
                            </li>
                        </ul>
                        <a href="#" class="btn btn-outline-success font-w-600 my-auto text-nowrap ml-auto add-event" data-toggle="modal" data-target="#addevent"><i class="icon-calendar"></i> Create Leave</a>

                        <!-- Modal -->
                        <div id="addevent" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog text-left">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="model-header">Leave Application Form</h4>
                                    </div>
                                    <form class="" method="POST" action="{{route('leave_submit')}}" id="leave_form_submit">
                                        @csrf
                                    <div class="modal-body">
                                        
                                            <div class="row">
                                                
                                                <div class="col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="start-date" class="">Title:</label>
                                                        <div class="d-flex event-title">
                                                            <input id="title" type="text" placeholder="Enter Title" class="form-control" name="title" required="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="col-md-6 col-sm-6 col-12">
                                                    <div class="form-group start-date">
                                                        <label for="app-start-date" class="">Leave Type:</label>
                                                        <div class="d-flex">
                                                            <select name="leave_type" required="" class="form-control">
                                                                <option value="" selected="" disabled="">Please select leave type</option>
                                                                <option value="1">Sick Leave</option>
                                                                <option value="2">Casual Leave</option>
                                                                <option value="3">Annual Leave</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-12">
                                                    <div class="form-group start-date">
                                                        <label for="app-start-date" class="">From:</label>
                                                        <div class="d-flex">
                                                            
                                                            <input type="text" id="app-start-date" placeholder="Start Date" class="form-control" required="" name="start_date" readonly="readonly">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-12">
                                                    <div class="form-group end-date">
                                                        <label for="app-end-date" class="">To:</label>
                                                        <div class="d-flex">
                                                            <input id="app-end-date" placeholder="End Date" name="end_date" type="text" required="" class="form-control"  />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="taskdescription" class="">Leave Reason:</label>
                                                        <div class="d-flex event-description">
                                                            <textarea id="taskdescription" placeholder="Enter Description" rows="3" class="form-control" name="reason" required=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="inputColor" class="">Color:</label>
                                                        <input type="color" name="color" class="border-0 m-2" id="inputColor" value="#a7f4ec" />
                                                    </div>
                                                </div>
                                            </div>
                                            --}}
                                            <div class="row" id="error-area">
                                                <div class="col-md-12">
                                                    <p id="error-msg" style="color: red"></p>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="discard" class="btn btn-outline-primary" data-dismiss="modal">Discard</button>
                                        <button type="button" id="leave_form_submit_button" class="btn btn-primary eventbutton">Submit Leave</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                    <div class="view-invoice">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="card border-0">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <a href="#" class="bg-primary float-left mr-3 py-1 px-2 rounded text-white back-to-invoice">
                                            Back
                                        </a>
                                        <h4 class="card-title">Invoice# <span class="inv-no"></span></h4>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <address>
                                                            <strong>Your Store</strong><br />
                                                            2940 Rainbow Road Alhambra, CA 91801 California
                                                        </address>
                                                        <b>Telephone:</b> 123456789<br />
                                                        <b>E-Mail:</b> demo@demo.com<br />
                                                        <b>Web Site:</b> <a href="#">http://abc.com</a>
                                                    </td>
                                                    <td>
                                                        <b>Date Added:</b> 26/09/2016<br />
                                                        <b>Order ID:</b> 3135<br />
                                                        <b>Payment Method:</b> Cash On Delivery<br />
                                                        <b>Shipping Method:</b> Flat Shipping Rate<br />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="card border-0">
                                    <div class="card-body table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td style="width: 50%;"><b>To</b></td>
                                                    <td style="width: 50%;"><b>Ship To (if different address)</b></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <address>
                                                            2940 Rainbow Road<br />
                                                            Alhambra, CA<br />
                                                            91801 California
                                                        </address>
                                                    </td>
                                                    <td>
                                                        <address>
                                                            1424 Brown Avenue<br />
                                                            Knoxville, TN<br />
                                                            91801 Tennessee
                                                        </address>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="card border-0">
                                    <div class="card-body table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td><b>Product</b></td>
                                                    <td><b>Model</b></td>
                                                    <td class="text-right"><b>Quantity</b></td>
                                                    <td class="text-right"><b>Unit Price</b></td>
                                                    <td class="text-right"><b>Total</b></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        HP LP3065 <br />
                                                        &nbsp;<small> - Delivery Date: 2011-04-22</small>
                                                    </td>
                                                    <td>Product 21</td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right">$122.00</td>
                                                    <td class="text-right">$122.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="4"><b>Sub-Total</b></td>
                                                    <td class="text-right">$100.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="4"><b>Flat Shipping Rate</b></td>
                                                    <td class="text-right">$5.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="4"><b>Eco Tax (-2.00)</b></td>
                                                    <td class="text-right">$4.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="4"><b>VAT (20%)</b></td>
                                                    <td class="text-right">$21.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="4"><b>Total</b></td>
                                                    <td class="text-right">$130.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="card redial-border-light redial-shadow">
                                    <div class="card-body table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td><b>Comment</b></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>This is comment section</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-header border-bottom p-1 d-flex">
                        <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i class="icon-menu"></i></a>
                        <input type="text" class="form-control border-0 p-2 w-100 h-100 invoice-search" placeholder="Search ..." />
                    </div>
                    <div class="card-body p-0">
                        <div class="invoices list">
                            @if($leave_application)
                            @foreach($leave_application as $leave)
                            <?php
                            if($leave->status == 1){ $stat = "pending-invoice"; }
                            elseif ($leave->status == 2) {  $stat = "paid-invoice"; }
                            elseif ($leave->status == 3) {  $stat = "canceled-invoice"; }
                             
                            ?>
                            <div class="invoice {{$stat}}" data-status="{{$stat}}">
                                <div class="invoice-content" data-status="{{$stat}}">
                                    <div class="">
                                        <p class="mb-0 small">Application Number:</p>
                                        <p class="invoice-no">{{$leave->code}}</p>
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
                                        <button type="button" style="font-size: 10px;" class="btn btn-lg btn-danger" data-toggle="popover" title="" data-content="{{$leave->reason}}" data-original-title="{{$leave->title}}">View Reason</button>
                                    </div>
                                    <div class="invoice-status-info">
                                        <p class="mb-0 small">Status</p>
                                        <p class="invoice-status"></p>
                                    </div>

                                    <div class="line-h-1 h5">
                                        {{--
                                        <a class="text-success edit-invoice" href="#" data-toggle="modal" data-target="#editinvoice"><i class="icon-pencil"></i></a>
                                        --}}
                                        @if($leave->status == 1)
                                            <a class="text-danger delete-invoice" data-record="{{$leave->id}}" href="#"><i class="icon-trash"></i></a>
                                        @else
                                            <a class="text-info" href="#"><i class="icon-user-unfollow"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
@endsection @section('js')
<script src="{{asset('vendors/popper/popper.min.js')}}"></script>
<script src="{{asset('vendors/tooltip/tooltip-min.js')}}"></script>

<script src="{{asset('js/flatpickr.js')}}"></script>
<script src="{{asset('js/app.invoicelist.js')}}"></script>

<!-- For Record deletion -->
<script type="text/javascript">
    $(".delete-invoice").click(function(){
        var id = $(this).data('record');
        $.ajax({
                type: 'GET',
                url: "{{ route('application_delete',"+id+") }}",
                data: {id:id},
                dataType: 'JSON',
                success: function (response) {
                    if (response.status==1){
                        toastr.success(response.msg,'Success!');
                    }else{
                        toastr.success(response.msg,'Error!');
                    }
                }
               
            });
    })
</script>

<!-- Already leave submitted check form -->
<script type="text/javascript">
    $("#error-area").hide();
    $("#leave_form_submit_button").click(function(){
        var datastring = $("#leave_form_submit").serialize();
        $.ajax({
                type: 'POST',
                url: "{{ route('leave_form_validate') }}",
                data: datastring,
                dataType: 'JSON',
                success: function (response) {
                    if (response.status==1){
                        $("#error-area").hide();
                        $("#leave_form_submit").submit();
                    }else{
                        $("#error-msg").text(response.msg);
                        $("#error-area").show();
                        return false;
                    }
                }
               
            });
    })

    $("#discard").click(function(){
        $("#error-area").hide();
        $('#leave_form_submit').trigger("reset");
    })
</script>
@endsection

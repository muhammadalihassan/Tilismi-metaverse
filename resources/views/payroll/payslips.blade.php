@extends('layouts.main') @section('content')
<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><h4 class="mb-0">Employees Payslips </h4></div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Payroll</li>
                        <li class="breadcrumb-item active"><a href="#">Payslip</a></li>
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
            <div class="col-12 col-md-12 mt-12">
                <div class="card">
                    <div class="card-body d-md-flex text-center">
                        
                        <a href="#" class="btn btn-outline-success font-w-600 my-auto text-nowrap ml-auto add-event" data-toggle="modal" data-target="#addevent"><i class="icon-calendar"></i> Create Payslip</a>

                        <!-- Modal -->
                        <div id="addevent" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog text-left">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="model-header">Payslip Form</h4>
                                    </div>
                                    <form class="" method="POST" action="{{route('payslip_generate')}}" id="payslip_form_submit">
                                        @csrf
                                    <div class="modal-body">
                                        
                                            <div class="row">
                                                
                                                <div class="col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="start-date" class="">Employee name:</label>
                                                        <div class="d-flex event-title">
                                                                <select name="emp_id" id="emp_id" required="" class="form-control">
                                                                    <option value="" selected="" disabled="">Choose Employee </option>
                                                                    @if($empployees)
                                                                        @foreach($empployees as $empployee)
                                                                            <option data-salary="{{$empployee->salary}}" value="{{$empployee->emp_id}}">{{ucwords($empployee->name)}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                    
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="col-md-6 col-sm-6 col-12">
                                                    <div class="form-group start-date">
                                                        <label for="app-start-date" class="">Salary:</label>
                                                        <div class="d-flex">
                                                            
                                                            <input id="salary_amount" type="text" placeholder="Enter Salary Amount" class="form-control" name="salary" required="" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-4 col-12">
                                                    <div class="form-group start-date">
                                                        <label for="deduction_amount" class="">Deduction:</label>
                                                        <div class="d-flex">
                                                            
                                                            <input id="deduction_amount"  placeholder="Enter Deduction Amount" class="form-control" name="deduction_amount" type="number" min="0" oninput="validity.valid||(value='');" required="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-12">
                                                    <div class="form-group end-date">
                                                        <label for="net_pay" class="">Net Pay:</label>
                                                        <div class="d-flex">
                                                            <input id="net_pay" placeholder="Net Pay Amount" name="net_pay" readonly="" type="text" required="" class="form-control"  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-12">
                                                    <div class="form-group end-date">
                                                        <label for="month" class="">Month:</label>
                                                        <div class="d-flex">
                                                            <select id='month' name="month" required="" class="form-control">
                                                                <option value='' selected="" disabled="">--Select Month--</option>
                                                                <option value='1'>Janaury</option>
                                                                <option value='2'>February</option>
                                                                <option value='3'>March</option>
                                                                <option value='4'>April</option>
                                                                <option value='5'>May</option>
                                                                <option value='6'>June</option>
                                                                <option value='7'>July</option>
                                                                <option value='8'>August</option>
                                                                <option value='9'>September</option>
                                                                <option value='10'>October</option>
                                                                <option value='11'>November</option>
                                                                <option value='12'>December</option>
                                                            </select> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-12">
                                                    <div class="form-group end-date">
                                                        <label for="medical_allowance" class="">Medical Allowance:</label>
                                                        <div class="d-flex">
                                                            <input id="medical_allowance" placeholder="Medical Allowance Amount" name="medical_allowance" type="number" min="0" oninput="validity.valid||(value='');" required="" class="form-control"  />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-4 col-12">
                                                    <div class="form-group end-date">
                                                        <label for="fuel_allowance" class="">Fuel Allowance:</label>
                                                        <div class="d-flex">
                                                            <input id="fuel_allowance" placeholder="Fuel Allowance Amount" name="fuel_allowance" type="number" min="0" oninput="validity.valid||(value='');" required="" class="form-control"  />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-4 col-12">
                                                    <div class="form-group end-date">
                                                        <label for="house_rent" class="">Rent Allowance:</label>
                                                        <div class="d-flex">
                                                            <input id="house_rent" placeholder="House Rent Allowance Amount" name="house_rent" type="number" min="0" oninput="validity.valid||(value='');" required="" class="form-control"  />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-4 col-12">
                                                    <div class="form-group end-date">
                                                        <label for="conveyance" class="">Conveya. Allowance:</label>
                                                        <div class="d-flex">
                                                            <input id="conveyance" placeholder="Conveyance Allowance Amount" name="conveyance" type="number" min="0" oninput="validity.valid||(value='');" required="" class="form-control"  />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-4 col-12">
                                                    <div class="form-group end-date">
                                                        <label for="late_timing" class="">Late Timing Count:</label>
                                                        <div class="d-flex">
                                                            <input id="late_timing" placeholder="Late Timing" name="late_timing" type="number" min="0" oninput="validity.valid||(value='');" required="" class="form-control"  />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-4 col-12">
                                                    <div class="form-group end-date">
                                                        <label for="leaves" class="">Leaves Count:</label>
                                                        <div class="d-flex">
                                                            <input id="leaves" placeholder="Leaves" name="leaves" type="number" min="0" oninput="validity.valid||(value='');" required="" class="form-control"  />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-12">
                                                    <div class="form-group end-date">
                                                        <label for="advance_payment" class="">Advance Payment:</label>
                                                        <div class="d-flex">
                                                            <input id="advance_payment" placeholder="Advance Payment" name="advance_payment" type="number" min="0" oninput="validity.valid||(value='');" required="" class="form-control"  />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-12">
                                                    <div class="form-group end-date">
                                                        <label for="income_tax" class="">Income Tax:</label>
                                                        <div class="d-flex">
                                                            <input id="income_tax" placeholder="Income Tax" name="income_tax" type="number" min="0" oninput="validity.valid||(value='');" required="" class="form-control"  />
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="taskdescription" class="">Reason:</label>
                                                        <div class="d-flex event-description">
                                                            <textarea id="taskdescription" placeholder="Enter Description" rows="3" class="form-control" name="reason" required=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row" id="error-area">
                                                <div class="col-md-12">
                                                    <p id="error-msg" style="color: red"></p>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="discard" class="btn btn-outline-primary" data-dismiss="modal">Discard</button>
                                        <button type="submit" class="btn btn-primary eventbutton">Generate</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 mt-12">
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
                                @if($payslips)
                                @foreach($payslips as $key => $payslip)
                                    <div class="invoice"> 
                                        <div class="invoice-content" data-status="generated-invoice">                                               
                                            <div class="invoice-info">
                                                <p class="mb-0 small">Serial #: </p>
                                                <p class="invoice-no">{{$key+1}}</p>
                                            </div>
                                            <div class="invoice-info">
                                                <p class="mb-0 small">Name: </p>
                                                <p class="cliname">{{$payslip->user->name}}</p>
                                            </div>
                                            <?php 
                                            $dateObj   = DateTime::createFromFormat('!m', $payslip->month);
                                            $monthName = $dateObj->format('F'); // March
                                            ?>
                                            <div class="invoice-info">
                                                <p class="mb-0 small">Month: </p>
                                                <p class="invocie-date">{{$monthName}}</p>
                                            </div>
                                            <div class="invoice-info">
                                                <p class="mb-0 small">Salary: </p>
                                                <p class="invoice-due-date">{{$payslip->salary}}</p>
                                            </div>
                                            <div class="invoice-info">
                                                <p class="mb-0 small">Deduction: </p>
                                                <p class="invoice-due-date">{{$payslip->deduction}}</p>
                                            </div>
                                            <div class="invoice-info">
                                                <p class="mb-0 small">Net Pay: </p>
                                                <p class="invoice-due-date">{{$payslip->net_pay}}</p>
                                            </div>
                                            <div class="invoice-status-info">
                                                <p class="mb-0 small">Status </p>
                                                <p class="invoice-status"></p>
                                            </div>
                                            <div class="line-h-1 h5">   
                                                <a class="text-success edit-invoice" href="{{route('view_payslip',[$payslip->id])}}"><i class="icon-eye"></i></a>
                                                <a class="text-danger delete-invoice" href="#"><i class="icon-trash"></i></a>                                 
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

@endsection @section('js')

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

    $("#discard").click(function(){
        $("#error-area").hide();
        $('#leave_form_submit').trigger("reset");
    })

    $("#emp_id").change(function(){
        var emp_id = $(this).find(":selected").val();
        var salary = $(this).find(":selected").data("salary");
        $("#salary_amount").val(salary);

        var deduction = $("#deduction_amount").val();
        if(deduction != ''){
            var total = salary-deduction;
            if(total < 0){
                $("#error-msg").text("Note: Deduction amount can not be more than salary");
                $("#error-area").show();
            }else{
                $("#error-area").hide();
                $("#net_pay").val(total)
            }
            
        }
        
    })

    $("#deduction_amount").keyup(function(){
        var salary = $("#salary_amount").val();
        var deduction = $(this).val();
        var total = salary-deduction;
        if(total < 0){
            $("#error-msg").text("Note: Deduction amount can not be more than salary");
            $("#error-area").show();
        }else{
            $("#error-area").hide();
            $("#net_pay").val(total)
        }
    })

    
</script>
@endsection

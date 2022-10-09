<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="#" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Bootstrap CSS -->

        <title>THE SOFT CUBE</title>
    </head>
    <style type="text/css">
        @charset "utf-8";
/* CSS Document */
body, html{
    height: 100%;
}
body{
    background: #fff;
}

h1, h2, h3, h4, h5, h6{
    font-family: 'Montserrat', sans-serif;
}
p{
    font-family: 'Roboto', sans-serif;
}
h1, h2, h3, h4, h5, h6, p, a, ul, li{
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
a {
    text-decoration: none !important;
    transition: all 0.5s;
}
.carousel-item img {
    width: 100%;
}
ul {
    padding: 0;
    margin: 0;
}
div#navbarCollapse {
    flex-direction: row-reverse;
}

/*start soft cube header*/
header{
    padding-top:100px;
}
.logo {
    display: inline-block;
    margin: 0 0 20px;
    padding: 10px 20px;
}


small{
text-align: center;
display: block;
font-size: 18px;
}

/*End soft cube header*/


/*star table start*/
.table{
    width: 90%;
    margin: 0 auto;
    color:#000!important;
}
.table td, .table th {
    /* padding: .75rem; */
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    padding: 0;

}
#soft-cube-t{
    text-align: center;
}

.heading-soft{
    width: 36%;
    display: inline-block;
}
.heading-soft p{
line-height: 40px;
}
.heading-soft h6{
    font-weight: 600;
}

.table td, .table th {
text-align: left;
border:none;
}

.table thead th {
    font-weight: 400;
    font-size: 15px;
    border:0;
    }

.table .hp{
    padding-top: 30px;
}

.mt-30{
    margin-top:40px; 
}

.table td {
    width: 150px;
}

#soft-cube-t{
    padding-bottom: 50px;
}
/*End table star here*/
.earing-box{
    margin-left: 0;
    border:1px solid #000;
}
.earing-box2{
    border:1px solid #000;
}
.mb-10{
    margin-top:10px; 
}

.earing-box{
    border:1px solid #000;
}
#earing ul{
    list-style: none;
    margin: 0;
    padding:5px;
    margin-bottom: 0;
}
#earing h4{
margin-left:15px;
}
.heading-1{
    width: 350px;
}

.total-ear{
    padding:50px 0;
}

.pt-60{
    padding-top:60px;
}

.total-pric {
    margin: 0;
}

.der{
    margin-left: 15px;
}


ul.list li{
    list-style: none;
    line-height: 40px;
    padding-left:15px; 

}

.bak{
    background:#ccc;
    
}
.earing-box, .earing-box2 {
    padding: 10px 10px;
    min-height: 180px;
}
span.net-slry {
    display: inline-block;
    float: right;
    padding-right: 15px;
}

.logo-img{
    height: 100px;
}


@media only screen and (min-device-width:520px) and (max-device-width:767px) and (orientation:portrait) {}
@media only screen and (min-device-width:120px) and (max-device-width:750px) and (orientation:landscape) {}
@media only screen and (min-device-width:751px) and (max-device-width:999px) and (orientation:portrait) {}
@media only screen and (min-device-width:751px) and (max-device-width:999px) and (orientation:landscape) {}
@media only screen and (min-device-width:1000px) and (max-device-width:1030px) and (orientation:portrait) {}
@media only screen and (min-device-width:1000px) and (max-device-width:1030px) and (orientation:landscape) {}

@media only screen and (min-width: 1366px) and (max-width: 1920px){}
@media only screen and (min-width: 1200px) and (max-width: 1365px){}
@media only screen and (min-width: 992px) and (max-width: 1199px){}
@media only screen and (min-width: 768px) and (max-width: 991px){}
@media only screen and (min-width: 520px) and (max-width: 767px){}
@media only screen and (min-width: 300px) and (max-width: 519px){}
    </style>
    <body>
        <!-- start top  -->
        <header>
            <div class="container">
                <div class="logo-cntr text-center">
                    <div class="logo">
                    <img class="logo-img" src="{{asset('uploads\project\softcube.png')}}">
                </div>
                </div>
            </div>
        </header>

        <!-- end top heder -->
        <!-- start soft cube table here -->
        <section id="soft-cube-t">
            <div class="container">
                <div class="heading-soft text-center">
                    <h6>THE SOFT CUBE</h6>
                    <?php  
                    $monthNum  = $payslip->month;
                    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                    $monthName = $dateObj->format('F');
                    ?>
                    <p>
                        Plot # C-5, Block-3 Gulshan-e-Iqbal Karachi, Pakistan<br />
                        Pay Slip for the period of {{$monthName}} 2021
                    </p>
                </div>
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <th>Employee Name:</th>
                            <th>Employee ID:</th>
                            <th>Employment Type:</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$payslip->user->name}}</td>
                                <td>{{$payslip->emp_id}}</td>
                                <td>Permanent</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped mt-30">
                        <thead>
                            <th>Department:</th>
                            <th>Date of Joining:</th>
                            <th>Slip Generated By:</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$payslip->user->departments->name}}</td>
                                <td>{{date("M d Y" , strtotime($payslip->user->join_date))}}</td>
                                <td>HR</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped mt-30">
                        <thead>
                            <th>Position:</th>
                            <th>CNIC:</th>
                            <th>City:</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$payslip->user->designations->name}}</td>
                                <td>{{$payslip->user->cnic}}</td>
                                <td>Karachi</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped mt-30">
                        <thead>
                            <th>Service Period:</th>
                            <th>Company:</th>
                            <th>Bank Account No:</th>
                        </thead>
                        <tbody>
                            <?php  
                            //or get Date difference as total difference
                            $d1 = strtotime($payslip->user->join_date);
                            $d2 = strtotime(date("Y-m-d" , strtotime($payslip->created_at))); 
                            $totalSecondsDiff = abs($d1-$d2); //42600225
                            $totalMinutesDiff = $totalSecondsDiff/60; //710003.75
                            $totalHoursDiff   = $totalSecondsDiff/60/60;//11833.39
                            $totalDaysDiff    = $totalSecondsDiff/60/60/24; //493.05
                            $totalMonthsDiff  = $totalSecondsDiff/60/60/24/30; //16.43
                            $totalYearsDiff   = $totalSecondsDiff/60/60/24/365; //1.35

                            $strr = "Issue with your joining date";
                            if ($totalYearsDiff > 0) {
                                $strr = number_format($totalYearsDiff,0)." Year(s), ".number_format($totalMonthsDiff,0)." Month(s)";
                            }
                            ?>
                            <tr>
                                <td>{{$strr}}</td>
                                <td>The Soft Cube</td>
                                <td>{{$payslip->user->bank_account_number}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- start soft cube table here -->

        <!-- statrt  section Earing Here -->

        <section id="earing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Earnings</h4>
                        <div class="earing-box">
                            <div class="row">
                                <div class="col-md-8">
                                    <ul class="">
                                        <li>Earnings</li>
                                        <li>Basic Salary</li>
                                        <li>Medical Allowance</li>
                                        <li>Fuel Allowance</li>
                                        <li>House Rent Allowance</li>
                                        <li>Conveyance</li>
                                    </ul>

                                </div>

                                <div class="col-md-4">
                                    <ul class="">
                                        <li>Amount</li>
                                        <li>&#8360; {{$payslip->salary}}</li>
                                        <li>&#8360; {{$payslip->medical_allowance}}</li>
                                        <li>&#8360; {{$payslip->fuel_allowance}}</li>
                                        <li>&#8360; {{$payslip->house_rent}}</li>
                                        <li>&#8360; {{$payslip->conveyance}}</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h4>Deductions</h4>
                        <div class="earing-box2">
                            <div class="row">
                                <div class="col-md-8">
                                    <ul class="">
                                        <li>Deductions</li>
                                        <li>Late timings</li>
                                        <li>Leave</li>
                                        <li>Advance payment</li>
                                        <li>Income Tax</li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <ul class="">
                                        <li>Amount</li>
                                        <li>&#8360; {{$payslip->late_timing}}</li>
                                        <li>&#8360; {{$payslip->leaves}}</li>
                                        <li>&#8360; {{$payslip->advance_payment}}</li>
                                        <li>&#8360; {{$payslip->income_tax}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-60">
                    <div class="col-md-4">
                        <p class="ear">Total Earnings</p>
                    </div>
                    <div class="col-md-2">
                        <p class="ear total-pric">&#8360; {{$payslip->salary}}</p>
                    </div>

                    <div class="col-md-4">
                        <p class="der">Total Deductions</p>
                    </div>
                    <div class="col-md-2">
                        <p class="der total-pric">&#8360; {{$payslip->deduction}}</p>
                    </div>

                    <div class="col-md-12">
                        <ul class="list">
                            <li>Net Salary <span class="net-slry"><b> &#8360; {{$payslip->salary}} </b></span></li>
                            <li class="bak">Total Net Salary for the current month<span class="net-slry"><b> &#8360; {{$payslip->net_pay}} </b></span></li>
                            <li>This is a system generated pay slip, so no signature is required.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Stripe Payment Gateway Integration </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://demo.javatpoint.com/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"></script> 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
    <style type="text/css">
        .panel-title {
        display: inline;
        font-weight: bold;
        }
        .display-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }
    </style>
</head>
<body>
<div class="container"> 
    <h1>Stripe Payment Gateway Integration </h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
  
                    <form role="form" action="<?php echo e(route('subscribe_process')); ?>" 
                            method="post" 
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="pk_test_51Jr35VIVk2qJM0IQP5GCJkYzl5FzX80ZAwWnGexHHVORTjTpD4bg9OhlirT7MyVd1YS87sTUCLoARqxTrHpVpWZw00jv17GESQ"
                            id="payment-form" >
                        <?php echo csrf_field(); ?>

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text' name="name">
                            </div>
                        </div>
                         <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                        <label class='control-label'>Email:</label> <input
                                    autocomplete='off' class='form-control email'
                                    type='email' name="email">
                            </div>
                        </div>
                         <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                        <label class='control-label'>Address:</label> <input
                                    autocomplete='off' class='form-control' 
                                    type='text' name="address">
                            </div>
                        </div>
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                        <label class='control-label'>ZipCode Number</label> <input
                                    autocomplete='off' class='form-control' size='20'
                                    type='text' name="zip">
                            </div>
                        </div>
                         <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                        <label class='control-label'>Phone Number</label> <input
                                    autocomplete='off' class='form-control' 
                                    type='text' name="phone">
                            </div>
                        </div>


                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                        <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text' name="CardNo">
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text' name="cvc">
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text' name="expMonth">
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text' name="expYear">
                            </div>
                        </div>
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit" id="form-submit">Pay Now ($100)</button>
                            </div>
                        </div>   
                    </form>
                </div>
            </div>        
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
     var $form = $(".require-validation");
        
        $("#form-submit").click(function (e) {
           
            var $form = $(".require-validation"),
                inputSelector = ["input[type=email]", "input[type=text]", "textarea"].join(", "),
                $inputs = $form.find(".required").find(inputSelector),
                $errorMessage = $form.find("div.error"),
                valid = true;
            $errorMessage.addClass("hide");

            $(".has-error").removeClass("has-error");
            $inputs.each(function (i, el) {
                var $input = $(el);
                if ($input.val() === "") {
                    $input.parent().addClass("has-error");
                    $errorMessage.removeClass("hide");
                    e.preventDefault();
                }
            });

            if (!$form.data("cc-on-file")) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data("stripe-publishable-key"));
                Stripe.createToken(
                    {
                        number: $(".card-number").val(),
                        cvc: $(".card-cvc").val(),
                        exp_month: $(".card-expiry-month").val(),
                        exp_year: $(".card-expiry-year").val(),
                    },
                    stripeResponseHandler
                );
            }
        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $(".error").removeClass("hide").find(".alert").text(response.error.message);
                console.log(response.error);
                generateNotification(0,response.error.message);
                return false;
            } else {
                console.log(response);

                // alert(response);
                // token contains id, last4, and card type
                var token = response["id"];
                
                // insert the token into the form so it gets submitted to the server
                $form.find("input[type=text]").empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
   
</script>
</html><?php /**PATH D:\FareehaShah\dna_update_4\resources\views/web/create-customer.blade.php ENDPATH**/ ?>
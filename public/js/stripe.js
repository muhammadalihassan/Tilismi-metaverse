var createCheckoutSession = function(planId) {
  var plan = {
        plan_id: planId
    };
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
    var data = new FormData();
    data.append( "plan", JSON.stringify( plan ) );

    return fetch("/stripe-checkout", {

    method: "POST",
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'url': '/payment',
        "X-CSRF-Token": document.querySelector('input[name=_token]').value
    },
    body: data
  }).then(function(result) {
   console.log(result);
    return result.json();
  });
};

// Handle any errors returned from Checkout
var handleResult = function(result) {
  if (result.error) {
    var displayError = document.getElementById("error-message");
    displayError.textContent = result.error.message;
  }
};
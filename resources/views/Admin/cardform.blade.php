<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
  integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
  crossorigin="anonymous">
<link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>

<body>
  <div class="container" style="border: radius 25px;">
    <div class='row'>
      <div class='col-md-4'></div>
    <div class="card" style="margin-top:8%;">
      <div class='col-md-4' style="margin-left:30%; ">
        <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
        <form accept-charset="UTF-8" action="/" class="require-validation"
          data-cc-on-file="false"
          data-stripe-publishable-key="pk_test_51NknywEzFs0spnMqk2sU4cljcXjFiJNOMV8YlvMJsZERZxit2IJqFumIQJo7Ym0NThVhCIZK7PcyjABNwfpDx9A600YtPdEb3t"
          id="payment-form" method="post" style="padding: 1em 2em;
            border-radius: 1em;">
          @csrf
        
            <div class='form-row' >
                <div class='col-xs-12 form-group required'>
                <label class='control-label'>Card Holder Name</label> <input
                    class='form-control'id="card_holder" name="card_holder"size='4' type='text' placeholder="Enter Card Holder Name">
                </div>
            </div>
            <div class='form-row'>
                <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label> <input
                    autocomplete='off' class='form-control card-number' size='20'
                    type='text' placeholder="Enter Card number">
                </div>
            </div>
            <div class='form-row'>
                <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label> <input
                    autocomplete='off' class='form-control card-cvc'
                    placeholder='CVV' size='4' type='text'>
                </div>
                <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label> <input
                    class='form-control card-expiry-month' placeholder='MM' size='2'
                    type='text'>
                </div>
                <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>YEAR</label> <input
                    class='form-control card-expiry-year' placeholder='YYYY'
                    size='4' type='text'>
                </div>
            </div>
            <div class='form-row' >
                <div class='col-xs-12 form-group required'>
                <label class='amount' style="margin-left:40% ! important">Total</label> <input
                    class='form-control'  name="amount" id="amount"size='8' type='text' ">
                </div>
            </div>
            
          
          <style>
            .btn-primary {
                color: #fff;
                background-color: #081546;
                border-color: #2e6da4;
            }
            element.style {
            margin-left: 30%;
            border-color: #2e6da4;
            }
          </style>
          <div class='form-row'>
            <div class='col-md-12 form-group'>
              <button class='form-control btn btn-primary submit-button'
                type='submit' style="margin-top: 10px;" style="background-color:#081546 ! important">Confirm</button>
            </div>
          </div>
          <div class='form-row'>
            <div class='col-md-10 form-group'>
              <a href="{{('/member-capture')}}" class='form-control btn btn-primary submit-button'
              style="margin-top: 10px; margin-left:10% !important; background-color:#081546 !important">Continue</a>
            </div>

          </div>
          
        
          <div class='form-row'>
            <div class='col-md-12 error form-group hide'>
              <div class='alert-danger alert'>Please correct the errors and try
                again.</div>
            </div>
          </div>
        </form>
        @if ((Session::has('success-message')))
        <div class="alert alert-success col-md-12" id="success-message">{{
          Session::get('success-message') }}</div>
        @endif @if ((Session::has('fail-message')))
        <div class="alert alert-danger col-md-12">{{
          Session::get('fail-message') }}</div>
        @endif
      </div>
    </div>
      <div class='col-md-4'></div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.12.3.min.js"
    integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
    crossorigin="anonymous"></script>
  <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
    crossorigin="anonymous"></script>
  <script>
    $(function() {
        $('form.require-validation').bind('submit', function(e) {
          var $form         = $(e.target).closest('form'),
              inputSelector = ['input[type=email]', 'input[type=password]',
                               'input[type=text]', 'input[type=file]',
                               'textarea'].join(', '),
              $inputs       = $form.find('.required').find(inputSelector),
              $errorMessage = $form.find('div.error'),
              valid         = true;

          $errorMessage.addClass('hide');
          $('.has-error').removeClass('has-error');
          $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
              $input.parent().addClass('has-error');
              $errorMessage.removeClass('hide');
              e.preventDefault(); 
            }
          });
        });
      });

      $(function() {
        var $form = $("#payment-form");

        $form.on('submit', function(e) {
          if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
              number: $('.card-number').val(),
              cvc: $('.card-cvc').val(),
              exp_month: $('.card-expiry-month').val(),
              exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
          }
        });

        function stripeResponseHandler(status, response) {
          if (response.error) {
            $('.error')
              .removeClass('hide')
              .find('.alert')
              .text(response.error.message);
          } else {
            
            var token = response['id'];
            
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            console.log(token);
            $form.get(0).submit();
          }
        }
      })
    </script>
    <script>
    // Wait for the document to be ready
    document.addEventListener('DOMContentLoaded', function () {
        // Select the success message element by its ID
        var successMessage = document.getElementById('success-message');

        // Check if the element exists
        if (successMessage) {
            // Set a timeout to hide or remove the element after 10000 milliseconds (10 seconds)
            setTimeout(function () {
                successMessage.style.display = 'none'; // Or remove it: successMessage.remove();
            }, 10000);
        }
    });
</script>
</body>
</html>
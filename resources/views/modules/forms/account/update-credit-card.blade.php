<div class="panel-body">
<div class="text-center">

    <h4>The credit card we have on file ends with {{ $lastfour }}. </h4>
    <p> You can use the form below to attach a different credit card to your account.</p>
<hr>
</div>

<form id="change-card" method="post" action="/subscription/update-credit-card" role="payment-form" data-gateway-publishable-key="{{ $app_settings->service_stripe_api_key_publishable }}" class="form-vertical">
    {{ csrf_field() }}
  @include('modules.forms.credit-card')
    <div class="text-center">
        <button role="submit" class="btn-alt btn-primary">Update Card</button>
        </div>
</form>

</div>

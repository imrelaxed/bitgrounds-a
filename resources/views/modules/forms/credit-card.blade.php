<div class="payment-errors"></div>

<div class="form-row">
  <div class="col-xs-12 form-group card required">

  <label for="cc-num" class="control-label">
    Card Number
  </label>
    
    <input 
      type="tel"
      id="cc-num"
      class="cc-num form-control input-lg" 
      data-stripe="number"
      placeholder="•••• •••• •••• ••••" 
      autocomplete="cc-number"
      required 
    />
  </div>
</div>

<div class="form-row">

    <div class="col-xs-6 expiration required form-group">
      <label for="cc-exp" class="control-label">
        Expiration
      </label>

        <input 
          type="tel"
          id="cc-exp"
          class="cc-exp form-control input-lg" 
          placeholder="•• / ••" 
          size="6" 
          autocomplete="cc-exp" 
          required
        />

        <input type="hidden" data-stripe="exp-month">
        <input type="hidden" data-stripe="exp-year">
    </div>


    <div class="col-xs-6 cvc form-group required">
      <label for="cc-cvc" class="control-label">
        CVC
      </label>
        <input 
          type="tel"
          id="cc-cvc"
          class="cc-cvc form-control input-lg"
          data-stripe="cvc" 
          placeholder="•••" 
          size="4" 
          autocomplete="off"
          required
        />
    </div>

</div>
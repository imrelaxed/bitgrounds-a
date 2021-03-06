  <div class=" text-center padding-medium">
  <h4>You are currently subscribed to the <strong class="text-primary">
      {{ $subscription->stripe_plan }}
  </strong> plan.</h4>
  
    <p>If you'd like you can change your plan below.</p>
      <hr>
      @foreach($plans as $plan)
          <div class="col-md-4">
              <div class="panel {{ ( $is_subscribed && $subscription->stripe_plan ==  $plan->id ) ? 'panel-success' :  'panel-primary' }}">
                  <div class="panel-heading text-uppercase">{{ $plan->id }}</div>
                  <div class="panel-body text-center">
                      <h3 class="modal-title">
                          {{ $plan->name }}
                      </h3>

                      <p> {{ $plan->amount / 100 }} {{ strtoupper($plan->currency) }} / {{ $plan->interval }}</p>
                  </div>
                  <div class="panel-footer">
                      @if( $is_subscribed &&  ( $subscription->stripe_plan ==  $plan->id ) )
                          <a href="#" class="btn btn-outline-primary">
                              Your Current Plan
                          </a>
                      @else
                          <a href="{{ route('plan', $plan->id) }}" class="btn btn-primary" onclick="event.preventDefault();
                                                     document.getElementById('swap-form').submit();">
                              Swap To This Plan
                          </a>
                          <form id="swap-form" action="{{ route('swapPlans') }}" method="POST" style="display: none;">
                              <input type="hidden" name="plan_to_swap_to" id="plan_to_swap_to" value="{{ $plan->id }}">
                              {{ csrf_field() }}
                          </form>
                      @endif
                  </div>
              </div>
          </div>
          @endforeach
  </div>
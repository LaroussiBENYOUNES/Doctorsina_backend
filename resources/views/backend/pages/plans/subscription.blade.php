@extends('backend.layouts.blank_master')

@section('content')
  <!-- Content -->

  <div class="container-xxl">
           

                            <div class="container mt-5 mb-5 d-flex justify-content-center">
                                <div class="card p-5">
                                    <div class="app-brand justify-content-center">
                                        <a href="/" class="app-brand-link gap-2">
                                          <span class="app-brand-logo demo">
                                          <img src="{{ asset('frontend_assets/img/logo@2x.png') }}" alt="LOGO" width="200px">
                                          </span>
                                        </a>
                                      </div>
                                    <h4 class="mb-2">Adventure starts here 🚀</h4>
                                    <p class="mb-4">Make your app management easy and fun!</p>
                                  <div>
                                    <h4 class="heading">Upgrade your plan</h4>
                            <div class="pricing p-3 rounded mt-4 d-flex justify-content-between">
                                <div class="images d-flex flex-row align-items-center">
                                  <img src="https://cdn-icons-png.flaticon.com/512/7510/7510522.png" class="rounded" width="60">
                                   <div class="d-flex flex-column ml-4">
                                      <span class="business"> {{ $plan->name }}</span>
                                      <a href="/plans">
                                       <span class="plan">CHANGE PLAN</span>
                                      </a>
                                      </div>
                                      </div>
                            <div class="d-flex flex-row align-items-center">
                                <sup class="dollar font-weight-bold">  </sup> <h4 class="amount ml-1 mr-1">${{ $plan->price }}</h4>
                                 <span class="year font-weight-bold">/ year</span> </div>
                                  <!-- /pricing table-->
                                  </div>
                                <div class="heading"> <span class="h2">Payment details</span></div>
                                  <form id="payment-form" action="{{ route('subscription.create') }}" method="POST">
                                   @csrf
                                   <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">
                                   <div class="mt-3">
                                    <h4 class="mt-4 text-primary" name="name" id="card-holder-name">CARDHOLDER NAME</h4>
                                 <div class="email mt-2">
                                   <input type="text" class="form-control email-text" placeholder="Cardholder Name">
                                   </div> 
                            <div>
                                <h4 class="mt-4 text-primary">CARD DETAILS</h4>
                                  <div class="mt-4 text-primary" id="card-element">
                                </div>
                                <div class="mt-3">
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary btn-block payment-button" id="card-button" data-secret="{{ $intent->client_secret }}">Purchase</button>
                            </div>
                        </form>

              
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>
  
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}')
       
        const elements = stripe.elements()
        const cardElement = elements.create('card')
       
        cardElement.mount('#card-element')
       
        const form = document.getElementById('payment-form')
        const cardBtn = document.getElementById('card-button')
        const cardHolderName = document.getElementById('card-holder-name')
       
        form.addEventListener('submit', async (e) => {
            e.preventDefault()
       
            cardBtn.disabled = true
            const { setupIntent, error } = await stripe.confirmCardSetup(
                cardBtn.dataset.secret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value
                        }   
                    }
                }
            )
       
            if(error) {
                cardBtn.disable = false
            } else {
                let token = document.createElement('input')
                token.setAttribute('type', 'hidden')
                token.setAttribute('name', 'token')
                token.setAttribute('value', setupIntent.payment_method)
                form.appendChild(token)
                form.submit();
            }
        })
    </script>
    @endsection
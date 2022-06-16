@extends('Layouts.app')
@section('content')
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Welcome to Starplus Host</h1>
        <p class="lead text-muted">Please kindly Login or regiter if it's your first time coming here</p>
        {{-- <p>
          <a href="/login" class="btn btn-primary my-2">Login</a>
          <a href="/register" class="btn btn-secondary my-2">Register</a>
        </p> --}}
        
      </div>
    </div>
  </section>
  <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Silver Package</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>10 users included</li>
            <li>2 GB of storage</li>
            <li>Email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Platinum Package</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>20 users included</li>
            <li>10 GB of storage</li>
            <li>Priority email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Diamond Package</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>30 users included</li>
            <li>15 GB of storage</li>
            <li>Phone and email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
        </div>
      </div>
    </div>
  
@endsection

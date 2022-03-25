@extends('layouts.landing')


@section('content')
<div class="container">

    <div class="row">


        @foreach ($products as $product)
        <div class="col-md-4">
        <div class="card-body">
            <h1 class="card-title pricing-card-title">$ {{$product->price}}<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Category:  {{$product->category}}</li>
              <li>Date available: {{$product->date_available}} </li>
             <li> {{$product->description}}</li>
            </ul>
            <button type="button" class="w-50 btn btn-lg btn-primary">lend</button>
          </div>
        </div>
       @endforeach
    </div>

   

</div>


@endsection
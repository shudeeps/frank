@extends('layouts.auth')

@section('content')

<div class="row justify-content-center">


<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Product Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">available date</th>
      <th scope="col">category</th>
      <th scope="col">Desciption</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($products as $product)
    <tr>
      <th scope="row"> {{$product->id}}</th>
      <td> {{$product->name}}</td>
      <td> {{$product->price}}</td>
      <td> {{$product->date_available}}</td>
      <td> {{$product->description}}</td>
      <td> {{$product->category}}</td>
      <td>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">delete</button>

      </td>
    </tr>
    @endforeach  
  </tbody>
</table>
  



</div>

@endsection
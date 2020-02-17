@extends('layouts.main')
@section('page-title','Show Detail Product')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="float-left">Detail Product</h1>
                <a  class="btn btn-primary float-right" href="{{route('products.index')}}">Back to teh list</a> 
              
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
               <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">ID:{{$product->id}}</h5>
                    <h5 class="card-title">Name: {{$product->name}}</h5>
                    <h5 class="card-title">Weight: {{$product->weight}}</h5>
                    <h5 class="card-title">Kind: {{$product->kind}}</h5>
                    <a href="{{ route('products.edit' , ['product' => $product->id] )}}" class="btn btn-warning">Edit</a>
                     <form class="form-inline" action="{{ route('products.destroy' , ['product' => $product->id] ) }}" method="post" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
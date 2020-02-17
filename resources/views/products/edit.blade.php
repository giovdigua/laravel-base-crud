@extends('layouts.main')
@section('page-title','Edit Products')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Edit Product</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 col offset-3">
                <form method="post" action="{{ route('products.update',['product' => $product->id]) }}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required value="{{$product->name}}">
                    </div>
                    <div class="form-group">
                        <label for="peso">Weight</label>
                        <input type="text" class="form-control" name="weight" id="weight" placeholder="Weight" required value="{{$product->weight}}">
                    </div>
                    <div class="form-group">
                        <label for="varieta">Kind</label>
                        <input type="text" class="form-control" name="kind" id="kind" placeholder="Kind" value="{{$product->kind}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection
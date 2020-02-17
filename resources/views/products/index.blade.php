@extends('layouts.main')
@section('page-title','Index Products')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="float-left">List Products</h1>
                <a  class="btn btn-primary float-right" href="{{route('products.create')}}">Create Product</a> 
              
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th colspan="2">Name</th>
                            <th colspan="2">Weight</th>
                            <th colspan="2">Kind</th>
                            <th colspan="8" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                                @forelse ($products as $product)
                                     <tr>
                                        <td>{{ $product->id}}</td>
                                        <td colspan="2">{{ $product->name}}</td>
                                        <td colspan="2">{{ $product->weight}}</td>
                                        <td colspan="2">{{ $product->kind}}</td>
                                        <td colspan="8" class="d-flex justify-content-around">
                                            <a href="{{ route('products.show', ['product' => $product->id] )}}" class="btn btn-info">
                                    Detail
                                </a>
                                <a href="{{ route('products.edit' , ['product' => $product->id] )}}" class="btn btn-warning">
                                    Edit
                                </a>
                                <form class="form-inline" action="{{ route('products.destroy' , ['product' => $product->id] ) }}" method="post" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                                        </td>
                                     </tr>     
                                @empty
                                    
                                @endforelse
                            
                            
                        </tbody>
                </table>
              
            </div>
        </div>
    </div>
@endsection
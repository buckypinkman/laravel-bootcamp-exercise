@extends('layouts.app')
@section('content')
<form class="mt-5" action="/product/update/{{$product->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="name" class="form-label">Product Name</label>
      <input class="form-control" value="{{ $product->name }}" id="name" name="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Product Price</label>
        <input class="form-control" value="{{ $product->price }}" type="number" id="price" name="price" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input class="form-control" value="{{ $product->description }}" type="text" id="description" name="description" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
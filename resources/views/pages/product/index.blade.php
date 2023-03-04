@extends('layouts.app')
@section('content')
    <section id="product" class="mt-5">
        <a href="/product/create" class="btn btn-primary mb-2">Create Product</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="/product/edit/{{$product->id}}" class="btn btn-primary">Edit</a>
                                <form action="/product/delete/{{ $product->id }}" method="post" data-confirm="return confirm('Are you sure ?')">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" onclick="">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
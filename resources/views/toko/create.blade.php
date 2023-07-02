@extends('template/admin/index')
@section('content')
<h1>tambah produk</h1>
<form action="{{ route('produk.store') }}" method="POST">
    @csrf
    <div class="form-grup row mb-3">
        <label for="name" class="col-4 col-form-label">Name :</label>
        <div class="col-8 input-grup">
            <input type="text" name="name" id="name" class="form-control">
        </div>
    </div>
    <div class="form-grup row mb-3">
        <label for="price" class="col-4 col-form-label">Price :</label>
        <div class="col-8 input-grup">
            <input type="text" name="price" id="price" class="form-control">
        </div>
    </div>
    <div class="form-grup row mb-3">
        <label for="description" class="col-4 col-form-label">Description :</label>
        <div class="col-8 input-grup">
            <input type="text" name="description" id="description" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-secondary mb-3">Submit</button>

</form>


@endsection
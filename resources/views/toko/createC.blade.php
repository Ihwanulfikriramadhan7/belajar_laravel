@extends('template/admin/index')
@section('content')
<h1>tambah customer</h1>
<form action="{{ route('customer.store') }}" method="POST">
    @csrf
    <div class="form-grup row mb-3">
        <label for="name" class="col-4 col-form-label">Name :</label>
        <div class="col-8 input-grup">
            <input type="text" name="name" id="name" class="form-control">
        </div>
    </div>
    <div class="form-grup row mb-3">
        <label for="address" class="col-4 col-form-label">Address :</label>
        <div class="col-8 input-grup">
            <input type="text" name="address" id="address" class="form-control">
        </div>
    </div>
    <div class="form-grup row mb-3">
        <label for="no_hp" class="col-4 col-form-label">No Hp :</label>
        <div class="col-8 input-grup">
            <input type="text" name="no_hp" id="no_hp" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-secondary mb-3">Submit</button>

</form>


@endsection
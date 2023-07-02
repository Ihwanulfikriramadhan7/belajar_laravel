@extends('template/admin/index')

@section('content')
<a href="{{ route('customer.create') }}" class="btn btn-secondary mb-3"><i class="fas fa-plus"></i>    Tambah Customer</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Customer</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Telepon</th>
      </tr>
    </thead>
    <tbody>
        @php $number = 1;  @endphp
        @foreach($customers as $customer)
        <tr>
            <td>{{ $number }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->no_hp }}</td>
            <td>

              <a href="{{ route('customer.edit', $customer) }}" class="btn btn-primary">Edit</a>
              <form action="{{ route('customer.destroy', $customer) }}" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
              </form> 

            </td>
        </tr>
        @php  $number++ @endphp
        @endforeach
        
    </tbody>
</table>
@endsection'

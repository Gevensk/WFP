@extends("layouts.adminlte4")

@section('title')
Total Menu
@endsection

@section("content")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<div class="container">
  <h2>Orderan Belum Selesai</h2>       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Order ID</th>
        <th>Customer</th>
        <th>Food</th>
        <th>Quantity</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $r)
            <tr>
                <td>{{ $r->order_id }}</td>
                <td>{{ $r->customer }}</td>
                <td>{{ $r->food }}</td>
                <td>{{ $r->quantity }}</td>
                <td>{{ $r->status }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
</body>
@endsection

@include("partials.sidebar")
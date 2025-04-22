@extends("layouts.adminlte4")

@section('title')
Total Menu
@endsection

@section("content")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<div class="container">
  <h2>Payment Method Report</h2>       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Payment Method</th>
        <th>Jumlah Transaksi</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $r)
            <tr>
                <td>{{ $r->metode_payment }}</td>
                <td>{{ $r->jumlah_transaksi }}</td>
                <td>{{ $r->total_pendapatan }}</td>

            </tr>
        @endforeach
    </tbody>
  </table>
</div>
</body>
@endsection

@include("partials.sidebar")





@extends("layouts.adminlte4")

@section('title')
Total Menu
@endsection

@section("content")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<div class="container">
  <h2>Menu Terlaris</h2>       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Food</th>
        <th>Total Order</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $r)
            <tr>
                <td>{{ $r->nama }}</td>
                <td>{{ $r->total }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
</body>
@endsection

@include("partials.sidebar")
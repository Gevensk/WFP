@extends("layouts.adminlte4");

@section("totalFood")
<div class="container">
  <h2>Foods</h2>       
  <table class="table">
    <thead>
      <tr>
        <th>Category</th>
        <th>Total Foods</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($report as $r)
            <tr>
                <td>{{ $r->name }}</td>
                <td>{{ $r->totalfood }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
</body>
@endsection
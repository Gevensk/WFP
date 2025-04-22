@extends("layouts.adminlte4")

@section('title')
Active User
@endsection

@section("content")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<div class="container">
  <h2><a href="#" onclick="showActiveUser()">Active User</a></h2>
  <div id ="showactiveuser"></div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nama Customer</th>
        <th>Jumlah Pesanan</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($report as $r)
            <tr>
                <td>{{ $r->nama }}</td>
                <td>{{ $r->jumlah_pesan }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
</body>
@endsection

@include("partials.sidebar")

@push("script")
<script>
    function showActiveUser() {
      $.ajax({
        type: 'POST',
        url: '{{ route("order.showactiveuser") }}',
        data: '_token=<?php echo csrf_token(); ?>',
        success: function(data) {
          $('#showactiveuser').html(data.msg);
        }
      });
    }
  </script>
@endpush
@extends("layouts.adminlte4")

@section('title')
Total Menu
@endsection

@section("content")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<div class="container">
  <h2>Total Menu per Kategori</h2>       
  <table class="table">
    <thead>
      <tr>
        <th>Kategori</th>
        <th>Total Menu</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($report as $r)
            <tr>
                <td>{{ $r->nama }}</td>
                <td>{{ $r->totalfood }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
</body>
@endsection

@section('side-bar')
  <li class="nav-item">
    <a href="{{ route('foods.index') }}" class="nav-link {{ request()->routeIs('foods.*') ? 'active' : '' }}">
      <i class="nav-icon bi {{ request()->routeIs('foods.*') ? 'bi-circle-fill' : 'bi-circle' }}"></i>
      <p>Food</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{ route('categories.index') }}" class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}">
      <i class="nav-icon bi {{ request()->routeIs('categories.*') ? 'bi-circle-fill' : 'bi-circle' }}"></i>
      <p>Category</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link {{ request()->routeIs('customers.*') ? 'active' : '' }}">
      <i class="nav-icon bi {{ request()->routeIs('customers.*') ? 'bi-circle-fill' : 'bi-circle' }}"></i>
      <p>Customer</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link {{ request()->routeIs('orders.*') ? 'active' : '' }}">
      <i class="nav-icon bi {{ request()->routeIs('orders.*') ? 'bi-circle-fill' : 'bi-circle' }}"></i>
      <p>Order</p>
    </a>
  </li>
@endsection

@section("side-bar-report")
<li class="nav-item">
  <a href="{{ route('totalfood') }}" class="nav-link">
    <i class="nav-icon bi"></i>
    <p>Total Foods</p>
  </a>
</li>
@endsection
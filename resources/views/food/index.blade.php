@extends('layouts.adminlte4')

@section('title')
Daftar Menu
@endsection

@section('content')
<!-- css utk tampilan card -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="container">
  <h2>Daftar Menu</h2>

  <!-- draft tampilan card -->
  {{-- @foreach ($foods as $f)
  <div class="card" style="width:400px">
    <img class="card-img-top" src="{{ asset('storage/food/'.$f->image) }}" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">{{ $f->name }}</h4><br>
        <p class="card-text">{{ $f->description }}</p>
        <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div> 
  @endforeach --}}

  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Nutrition Facts</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Kategori</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($foods as $f)
            <tr>
                <td>{{ $f->id }}</td>
                <td>{{ $f->nama }}</td>
                <td>{{ $f->harga }}</td>
                <td>{{ $f->porsi }}</td>
                <td>{{ $f->berat }}</td>
                <td>{{ $f->category->nama ?? 'Tidak ada kategori' }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
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
      <p>Orders</p>
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
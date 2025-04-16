@extends('layouts.adminlte4')

@section('title')
Foods
@endsection

@section('content')
<div class="container">
  <h2>Foods</h2>       
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Nutrition Facts</th>
        <th>Description</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($foods as $f)
            <tr>
                <td>{{ $f->id }}</td>
                <td><a href="{{ route('foods.show', $f->id) }}">{{ $f->name }}</a></td>
                <td>{{ $f->nutrition_fact }}</td>
                <td>{{ $f->description }}</td>
                <td>{{ $f->price }}</td>
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
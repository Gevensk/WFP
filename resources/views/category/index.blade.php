@extends('layouts.adminlte4')

@section('title')
Category
@endsection

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<div class="container">
  <h2>Categories</h2>       
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Foods</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($category as $c)
          <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->nama }}</td>
            <td>
                <ul>
                  @foreach($c->foods as $f)
                      <li>{{ $f->nama }}</li>
                  @endforeach
                </ul>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection

@include("partials.sidebar")
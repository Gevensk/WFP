@extends('layouts.adminlte4')

@section('title')
Category
@endsection

@section('content')
<div class="container">
  <h2>Categories</h2>       
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $g)
            <tr>
                <td>{{ $g->id }}</td>
                <td>{{ $g->name }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
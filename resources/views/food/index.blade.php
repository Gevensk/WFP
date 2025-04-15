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
                <td>{{ $f->name }}</td>
                <td>{{ $f->nutrition_fact }}</td>
                <td>{{ $f->description }}</td>
                <td>{{ $f->price }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
@extends('layouts.adminlte4')

@section('title')
Add New Food
@endsection

@section('content')
    <form method="POST" action="{{ route('foods.store') }}">
        @csrf
        <div class="form-group">
            <p><label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama"
                placeholder="Enter food name"></p>

            <p><label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" aria-describedby="deskriprsi"
                placeholder="Enter description"></textarea></p>

            <p><label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" aria-describedby="harga"
                placeholder="Enter price"></p>

            <p>Porsi</p>
            <input type="radio" id="radioKecil" name="porsi" value="kecil">
            <label for="radioKecil">Kecil</label><br>
            <input type="radio" id="radioSedang" name="porsi" value="sedang">
            <label for="radioSedang">Sedang</label><br>
            <input type="radio" id="radioBesar" name="porsi" value="besar">
            <label for="radioBesar">Besar</label>
            
            <p><label for="berat">Berat</label>
            <input type="number" class="form-control" id="berat" name="berat" aria-describedby="berat"
                placeholder="Enter weight in grams"></p>

            <p><label for="category">Kategori</label>
            <select class="form-control" name="category" id="category">
                <option value="">-- Pilih Kategori --</option>
                @foreach ($category as $c)
                    <option value="{{ $c->id }}">{{ $c->nama }}</option>
                @endforeach
            </select></p>

            <p><label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image" aria-describedby="image"
                placeholder="Enter image"></p>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@include("partials.sidebar")
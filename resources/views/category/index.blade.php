@extends('layouts.adminlte4')

@section('title')
  Category
@endsection

@section('content')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <div class="container">
    <h2>Categories</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
        <th>#</th>
        <th>Image</th>
        <th>Name</th>
        <th>List of Foods Name</th>
        <th colspan="2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($category as $c)
          <tr>
            <td>{{ $c->id }}</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageModal-{{ $c->id }}">Show</button>
              @push('modals')
                <div class="modal fade" id = "imageModal-{{ $c->id }}" tabindex="-1" aria-labelledby="imageModalLabel">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Gambar untuk {{$c->nama}} </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img class="img-responsive" style="max-height:250px;" src="{{ asset('storage/category/'.$c->image) }}"/>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              @endpush
            </td>
            <td>{{ $c->nama }}</td>
            <td>
              <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailModal-{{ $c->id }}">Details</button>
              @push('modals')
                <div class="modal fade" id="detailModal-{{ $c->id }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $c->id }}" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="detailModalLabel-{{ $c->id }}">
                          Daftar Makanan - {{ $c->name }}
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                    <div class="modal-body">
                      @if($c->foods->count() > 0)
                        <ul>
                          @foreach ($c->foods as $food)
                            <li>{{ $food->nama }}</li>
                          @endforeach
                        </ul>
                      @else
                      <p><em>Tidak ada makanan dalam kategori ini.</em></p>
                        @endif
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                  </div>
                </div>
              @endpush
            </td>
            <td>
              <a href="#modalEdit" class="btn btn-warning" data-bs-toggle="modal" onclick="">Edit</a>
            </td>
            <td>
              <form method="POST" action="{{ route('categories.destroy', $c->id) }}">
              @csrf
              @method("DELETE")
                <input type="submit" value="delete" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus {{ $c->id }} = {{ $c->name }} ?');">
                  </form>
              </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection

@include("partials.sidebar")
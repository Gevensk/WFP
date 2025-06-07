@extends('layouts.adminlte4')

@section('title')
  Category
@endsection

@section('content')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  @if (session('status'))
    <div class="alert alert-warning">
        {{ session('status') }}
    </div>
  @endif

  @push('modals')
    <div class="modal fade" id="btnFormModal" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add New Category</h4>
      </div>
    <div class="modal-body">
      <form id="formTambahKategori" method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Category Name">

          <label for="image">Image</label>
          <input type="file" class="form-control" id="image" name="image" accept=".jpg,.jpeg,.png">
        </div>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </form> <!-- closing tag form disini supaya bisa baca btnSubmit click -->
    </div>
  </div>
  </div>
  </div>
  @endpush

  @push("script")
    <script>
      function getEditForm(id)
      {
        $.ajax({
        type:'POST',
        url:'{{route("category.getEditForm")}}',
        data: {
          '_token' : '<?php echo csrf_token() ?>',
          'id': id
        },
        success: function(data){
          $('#modalContent').html(data.msg);

          document.getElementById('formUpdateKategori').addEventListener('submit', function (e) {
                let nama = document.getElementById('enama').value.trim();

                if (!nama) {
                    e.preventDefault();
                    alert('Field harus diisi!');
                }
          });
        }
        });
      }

      document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('formTambahKategori').addEventListener('submit', function (e) {
          let nama = document.getElementById('nama').value.trim();
          let image = document.getElementById('image').value;

          if (!nama || !image) {
            e.preventDefault(); // Stop form submit
            alert('Field harus diisi!');
          }
        });
      });
    </script>
  @endpush

  <div class="container">
    <h2>Categories</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#btnFormModal">+ Add Category</button>
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
          <tr id="tr_{{ $c->id }}">
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
              <a href="#modalEdit" class="btn btn-warning" data-bs-toggle="modal" onclick="getEditForm({{ $c->id }})">Edit</a>
            </td>
            <td>
              <form method="POST" action="{{ route('categories.destroy', $c->id) }}">
              @csrf
              @method("DELETE")
                <input type="submit" value="delete" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus {{ $c->id }} = {{ $c->nama }} ?');">
                  </form>
              </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection

<div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
   <div class="modal-dialog modal-wide">
       <div class="modal-content" >
          <div class="modal-body" id="modalContent">
              {{-- You can put animated loading image here... --}}
          </div>
       </div>
   </div>
</div>

@include("partials.sidebar")
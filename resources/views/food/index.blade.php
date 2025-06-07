@extends('layouts.adminlte4')

@section('title')
Food
@endsection

@section('content')
<!-- css utk tampilan card -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

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
            <h4 class="modal-title">Add New Food</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('foods.store') }}">
            @csrf
            <div class="form-group">
                <p><label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama"
                    placeholder="Enter food name"></p>

                <p><label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" aria-describedby="deskriprsi"
                    placeholder="Enter description"></textarea></p>

                <p><label for="nutrition_facts">Nutrition Facts</label>
                <textarea class="form-control" id="nutrition_facts" name="nutrition_facts" aria-describedby="nutrition_facts"
                    placeholder="Enter nutrition facts (tekan 'Enter' untuk baris baru)"></textarea></p>

                <p><label for="ingredients">Ingredients</label>
                <textarea class="form-control" id="ingredients" name="ingredients" aria-describedby="ingredients"
                    placeholder="Enter ingredients (tekan 'Enter' untuk baris baru)"></textarea></p>

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
                <small id="name" class="form-text text-muted">Enter image URL here!</small>

                <div id="image-preview-container">
                  <img id="image-preview" src="" alt="Image preview" style="max-width: 100%; display: none; border: 1px solid #ccc; margin-top: 10px;" />
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </form>
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
      url:'{{route("food.getEditForm")}}',
      data: {
        '_token' : '<?php echo csrf_token() ?>',
        'id': id
      },
      success: function(data){
        $('#modalContent').html(data.msg)
      }
      });
    }
  document.addEventListener("DOMContentLoaded", function () {
    const imageInput = document.getElementById("image");
    const imagePreview = document.getElementById("image-preview");

    imageInput.addEventListener("input", function () {
      const url = imageInput.value.trim();

      if (url) {
        imagePreview.src = url;
        imagePreview.style.display = "block";
      } else {
        imagePreview.src = "";
        imagePreview.style.display = "none";
      }
    });
  });
</script>
@endpush

<div class="container">
  <h2>Foods</h2>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#btnFormModal">+ Add Food</button>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Porsi</th>
        <th>Kategori</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($foods as $f)
            <tr>
                <td>{{ $f->id }}</td>
                <td>   
                  <a href="#" data-bs-toggle="modal" data-bs-target="#detailModal-{{ $f->id }}">{{ $f->nama }}</a>
                  @push("modals")
                  <div class="modal fade" id="detailModal-{{ $f->id }}" tabindex="-1" aria-labelledby="detailModalLabel-{{ $f->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="detailModalLabel-{{ $f->id }}">{{ $f->nama }}</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex gap-3 flex-wrap">
                          <div style="flex: 1; min-width: 200px;">
                            <img class="img-responsive w-100" style="max-height:250px; object-fit:cover;" src="{{ $f->image }}">
                          </div>
                          <div style="flex: 1; min-width: 200px;">
                            <h5>Nutrition Facts</h5>
                            <ul>
                                @foreach(explode("\n", $f->nutrition_facts) as $nf)
                                    <li>{{ $nf }}</li>
                                @endforeach
                            </ul>
                          </div>
                          <div style="flex: 1; min-width: 200px;">
                            <h5>Ingredients</h5>
                            <ul>
                                @foreach(explode("\n", $f->ingredients) as $i)
                                    <li>{{ $i }}</li>
                                @endforeach
                            </ul>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endpush
                </td>
                <td>{{ $f->deskripsi }}</td>
                <td>{{ $f->harga }}</td>
                <td>{{ $f->porsi }}</td>
                <td>{{ $f->category->nama ?? 'Tidak ada kategori' }}</td>
                <td>
                  <a href="#modalEdit" class="btn btn-warning" data-bs-toggle="modal" onclick="getEditForm({{ $f->id }})">Edit</a>

                  <form method="POST" action="{{ route('foods.destroy', $f->id) }}">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="delete" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus {{ $f->id }} = {{ $f->nama }} ?');">
                  </form>
                </td>
                {{-- <td>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal-{{ $f->id }}">Pesan</button>
                  @push("modals")
                  <div class="modal fade" id="orderModal-{{ $f->id }}" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="orderModalLabel">{{$f->nama}}</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex gap-3">
                          <div style="flex: 1;">
                            <img class="img-responsive w-100" style="max-height:250px; object-fit:cover;" src="{{ asset('storage/food/'.$f->image) }}">
                          </div>
                        
                          <div style="flex: 1; position: relative;">
                            <h5>Jumlah</h5>
                            
                            <div class="d-flex align-items-center gap-2 mb-3">
                              <button class="btn btn-outline-secondary btn-sm" onclick="">-</button>
                              <span id="qty-{{ $f->id }}">1</span>
                              <button class="btn btn-outline-secondary btn-sm" onclick="">+</button>
                            </div>
                        
                            <h5>Catatan</h5>
                            <textarea id="catatan" name="catatan" required></textarea>
                        
                            <button type="button" class="btn btn-primary" 
                                    style="position: absolute; bottom: 0; right: 0;" 
                                    data-bs-dismiss="modal">
                              Add to Cart
                            </button>
                          </div>
                        </div>                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endpush
                </td> --}}
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
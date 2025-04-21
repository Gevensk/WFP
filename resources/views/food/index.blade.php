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
        <th>Harga</th>
        <th>Porsi</th>
        <th>Berat</th>
        <th>Kategori</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($foods as $f)
            <tr>
                <td>{{ $f->id }}</td>
                <td>   
                  <a href="" data-bs-toggle="modal" data-bs-target="#detailModal-{{ $f->id }}">{{ $f->nama }}</a>
                  @push("modals")
                  <div class="modal fade" id="detailModal-{{ $f->id }}" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="detailModalLabel">{{$f->nama}}</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex gap-3">
                          <div style="flex: 1;">
                            <img class="img-responsive w-100" style="max-height:250px; object-fit:cover;" src="{{ asset('storage/food/'.$f->image) }}">
                          </div>

                          <div style="flex: 1;">
                            <h5>Nutrition Facts</h5>
                            <ul style="font-size: 0.9em;">
                              @foreach($f->nutritions as $n)
                                <li>{{ $n->nama }}: {{ $n->pivot->jumlah }} {{$n->satuan}}</li>
                              @endforeach
                            </ul>
                          
                            <h5>Ingredients</h5>
                            <ul style="font-size: 0.9em;">
                              @foreach($f->ingredients as $i)
                                <li>{{ $i->nama }}</li>
                              @endforeach
                            </ul>
                          </div>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endpush
                </td>
                <td>{{ $f->harga }}</td>
                <td>{{ $f->porsi }}</td>
                <td>{{ $f->berat }}</td>
                <td>{{ $f->category->nama ?? 'Tidak ada kategori' }}</td>
                <td>
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
              </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection

@include("partials.sidebar")

<!-- handling tambah dan kurang jumlah pesanan -->
{{-- @push("script")
<script>
  function incrementQty(id) {
    let qtyEl = document.getElementById(`qty-${id}`);
    let current = parseInt(qtyEl.innerText);
    qtyEl.innerText = current + 1;
  }

  function decrementQty(id) {
    let qtyEl = document.getElementById(`qty-${id}`);
    let current = parseInt(qtyEl.innerText);
    if (current > 1) qtyEl.innerText = current - 1;
  }
</script>
@endpush --}}
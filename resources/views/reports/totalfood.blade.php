@extends("layouts.adminlte4")

@section('title')
Total Menu
@endsection

@section("content")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<div class="container">
  <h2>Total Menu per Kategori</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Kategori</th>
        <th>Total Menu</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($report as $r)
      <tr>
          <td>{{ $r->nama }}</td>
          <td>{{ $r->foods_count }}</td>
          <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#foodModal-{{ $r->id }}">
                  View
              </button>
      
              <!-- Modal -->
              <div class="modal fade" id="foodModal-{{ $r->id }}" tabindex="-1" aria-labelledby="foodModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h1 class="modal-title fs-5" id="foodModalLabel">Daftar Menu: {{ $r->nama }}</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              @if ($r->foods->count() > 0)
                                  <ul>
                                      @foreach ($r->foods as $f)
                                          <li>{{ $f->nama }}</li>
                                      @endforeach
                                  </ul>
                              @else
                                  <p>Tidak ada makanan dalam kategori ini.</p>
                              @endif
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
              </div>
          </td>
      </tr>
      @endforeach      
    </tbody>
  </table>
</div>
</body>
@endsection

@include("partials.sidebar")
@extends('layouts.eshop')

@section('content')
  @if (session('status'))
    <div class="box success-box">
      {{ session('status') }}
    </div>
  @endif

  @if (count($cart) > 0)
     @php
        $total = 0;
      @endphp
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Photo</th>
            <th>Nama Product</th>
            <th>Quantity</th>
            <th>Harga Satuan</th>
            <th>Subtotal</th>
            <th>Note</th>
            <th>Control</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cart as $index => $r)
            @php
              $subtotal = $r['food']->harga * $r['quantity'];
              $total += $subtotal;
            @endphp
            <tr>
              <td><img width="170px" height="170px" src="{{ $r['food']->image }}" alt="Photo of Food #{{ $r['food']->id }}" /></td>
              <td>{{ $r['food']->nama }}</td>
              <td>{{ $r['quantity'] }}</td>
              <td>Rp {{ number_format($r['food']->harga, 0, ',', '.') }}</td>
              <td>Rp {{ number_format($subtotal, 0, ',', '.') }}</td> {{-- ✅ Subtotal --}}
              <td><input type="text" class="form-control note-input" placeholder="Catatan untuk pesanan anda..."></td>
              <td>
                <a class="btn btn-warning" href="{{ url('/detail/' . $r['id']) }}">Lihat</a>
                <form action="{{ route('deleteCart', $r['id']) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Batalkan</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-end mb-4">
          <h5><strong>Total Harga: Rp {{ number_format($total, 0, ',', '.') }}</strong></h5>
      </div>

      <form method="POST" action="{{ route('checkout') }}" onsubmit="return prepareNotes();">
      @csrf
        <input type="hidden" name="note_data" id="note_data">
        <div class="row mb-3">
          <!-- Kolom Jenis Pesanan -->
          <div class="col-md-6">
            <label><strong>Pilih Jenis Pesanan:</strong></label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="dinein" id="dinein" value="1" checked>
              <label class="form-check-label" for="dinein">Dine-In</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="dinein" id="takeaway" value="0">
              <label class="form-check-label" for="takeaway">Takeaway</label>
            </div>
          </div>
        </div>

        <!-- Kolom Metode Pembayaran -->
        <div class="col-md-6">
            <label><strong>Pilih Metode Pembayaran:</strong></label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="payment_method" id="tunai" value="tunai" checked>
              <label class="form-check-label" for="tunai">Tunai</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="payment_method" id="debit" value="debit">
              <label class="form-check-label" for="debit">Debit</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="payment_method" id="qris" value="qris">
              <label class="form-check-label" for="qris">QRIS</label>
            </div>
          </div>
        </div>

        <div class="text-right">
          <input type="submit" value="Checkout" class="btn btn-success">
        </div>
      </form>
  @else
    <div class="box info-box">
      Belum ada data yang dibuat
    </div>
  @endif

  @push('scripts')
    <script>
      function prepareNotes() {
        const notes = [];
        document.querySelectorAll('.note-input').forEach(input => {
          notes.push(input.value);
        });

        document.getElementById('note_data').value = JSON.stringify(notes);
        return true;
      }
    </script>
  @endpush
@endsection
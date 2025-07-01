@extends('layouts.eshop')

@section('content')
<div class="container mt-4">
    <h3>Daftar Pesanan</h3>
    @foreach ($orders as $date => $orderGroup)
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Tanggal Pemesanan</th>
                    <th>Nama Makanan</th>
                    <th>Catatan</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>SubTotal</th>
                    <th>Lokasi Makan</th>
                    <th>Metode Pembayaran</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderGroup as $order)
                    @php $total = 0; @endphp
                    @foreach ($order->foods as $index => $food)
                        @php
                            $subtotal = $food->harga * $food->pivot->quantity;
                            $total += $subtotal;
                        @endphp
                        <tr>
                            @if ($index == 0)
                                <td rowspan="{{ $order->foods->count() }}">{{ $order->created_at->format('d M Y') }}</td>
                            @endif
                            <td>{{ $food->nama }}</td>
                            <td>{{ $food->pivot->note ?? '-' }}</td>
                            <td>{{ $food->pivot->quantity }} pcs</td>
                            <td>Rp {{ number_format($food->harga, 0, ',', '.') }}</td>
                            <td>Rp {{ number_format($subtotal, 0, ',', '.') }}</td>
                            @if ($index == 0)
                                <td rowspan="{{ $order->foods->count() }}">{{ $order->dinein ? 'Dine In' : 'Take Away' }}</td>
                                <td rowspan="{{ $order->foods->count() }}">{{ ucfirst($order->metode_payment) }}</td>
                                <td rowspan="{{ $order->foods->count() }}">{{ ucfirst($order->status) }}</td>
                            @endif
                        </tr>
                    @endforeach
                        <tr>
                        <td colspan="5"></td>
                        <td colspan="4"><strong>Total: Rp {{ number_format($total, 0, ',', '.') }}</strong></td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
</div>
@endsection
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
                    <th>Lokasi Makan</th>
                    <th>Metode Pembayaran</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderGroup as $order)
                    @foreach ($order->foods as $index => $food)
                        <tr>
                            @if ($index == 0)
                                <td rowspan="{{ $order->foods->count() }}">{{ $order->created_at->format('d M Y') }}</td>
                            @endif
                            <td>{{ $food->nama }}</td>
                            <td>{{ $food->pivot->note ?? '-' }}</td>
                            <td>{{ $food->pivot->quantity }} pcs</td>
                            @if ($index == 0)
                                <td rowspan="{{ $order->foods->count() }}">{{ $order->dinein ? 'Dine In' : 'Take Away' }}</td>
                                <td rowspan="{{ $order->foods->count() }}">{{ ucfirst($order->metode_payment) }}</td>
                                <td rowspan="{{ $order->foods->count() }}">{{ ucfirst($order->status) }}</td>
                            @endif
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    @endforeach
</div>
@endsection
@extends('layouts.adminlte4')
 
@section('title')
    Orders
@endsection

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <div class="container">
        <h2>Orders</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Food</th>
                    <th>Order Date</th>
                    <th>Dining Location</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    @php $rowspan = $order->foods->count(); @endphp
                    @foreach ($order->foods as $index => $food)
                        <tr>
                            @if ($index === 0)
                                <td rowspan="{{ $rowspan }}">{{ $order->id }}</td>
                                <td rowspan="{{ $rowspan }}">{{ optional($order->user)->name }}</td>
                            @endif

                            <td>
                                {{ $food->nama }} ({{ $food->pivot->quantity }} pcs)
                                @if ($food->pivot->note)
                                    <br><small><i>{{ $food->pivot->note }}</i></small>
                                @endif
                            </td>

                            @if ($index === 0)
                                <td rowspan="{{ $rowspan }}">{{ optional($order->created_at)->format('d M Y') }}</td>
                                <td rowspan="{{ $rowspan }}">{{ $order->dinein ? 'Dine In' : 'Take Away' }}</td>
                                <td rowspan="{{ $rowspan }}">{{ ucfirst($order->metode_payment) }}</td>
                                <td rowspan="{{ $rowspan }}">{{ ucfirst($order->status) }}</td>
                                <td rowspan="{{ $rowspan }}">
                                    @if ($order->status == 'proses')
                                        <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="selesai">
                                            <button type="submit" class="btn btn-warning btn-sm"
                                                onclick="return confirm('Tandai pesanan ini sebagai selesai?')">Selesai</button>
                                        </form>
                                    @else
                                        <span class="text-success">Selesai</span>
                                    @endif
                                </td>
                            @endif
                        </tr>
                    @endforeach
                @endforeach
                </tbody>
        </table>
    </div>
@endsection

@include("partials.sidebar")
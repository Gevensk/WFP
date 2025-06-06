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
                 <th>Food Name</th>
                 <th>Order Date</th>
                 <th>Dining Location</th>
                 <th>Payment Method</th>
                 <th>Status</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($orders as $order)
             <tr>
                 <td>{{ $order->id }}</td>
                 <td>{{ optional($order->customer)->nama }}</td>
                 <td>
                    @if($order->keranjangs->count() > 0)
                    @php
                        $groupedItems = [];
                        foreach ($order->keranjangs as $item) {
                            if ($item->food) {
                                $name = $item->food->nama;
                                if (!isset($groupedItems[$name])) {
                                    $groupedItems[$name] = 0;
                                }
                                $groupedItems[$name] += $item->quantity;
                            }
                        }
                    @endphp
                    <ul>
                        @foreach ($groupedItems as $name => $qty)
                            <li>{{ $name }} ({{ $qty }} pcs)</li>
                        @endforeach
                    </ul>
                    @else
                        No Items
                    @endif
                </td>
                
                 <td>{{ optional($order->created_at)->format('d M Y') }}</td>
                 <td>{{ $order->dinein == 1 ? 'Dine In' : 'Take Away' }}</td>
                 <td>{{ ucfirst($order->metode_payment) }}</td>
                 <td>{{ ucfirst($order->status) }}</td>
             </tr>
             @endforeach
         </tbody>
     </table>
 </div>
 @endsection
 
 @include("partials.sidebar")
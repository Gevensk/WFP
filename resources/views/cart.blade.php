@extends('layouts.eshop')
@section('content')
    @if (session('status'))
        <div class="box success-box">
            {{ session('status') }}
        </div>
    @endif
    @if (count($reports) > 0)
        @if (count($cart) > 0)
            @if (count($cart) > 0)
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Photo</th>
                    <th>Nama Product</th>
                    <th>Quantity</th>
                    <th>Control</th>
                </tr>
                </thead>
                
                @foreach ($cart as $r)
                <tr>
                    <td><img src="{{ $r['food']->image }}" class="attachment-blog_libra_small 
                        wp-post-image" alt="Photo of Food #{{ $r['food']->id }}" /></td>
                        <td><p>{{$r['food']->name}}</p></td>
                        <td>{{$r['quantity']}}</td>
                        <td>
                        <a class="btn btn-warning" href="{{ url('/detail/' . $r['id']) }}">
                        Lihat
                        </a>
                        <form action="{{ route('deleteCart',$r["id"]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Batalkan</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        @else
        <div class="box info-box">
            Belum ada data yang dibuat
        </div>
        @endif

    @else
        <div class="box info-box">
            Belum ada laporan yang dibuat
        </div>
    @endif

    form method="POST" action="{{ route('checkout') }}">
    @csrf
    <input type="submit" value="Checkout" class="btn btn-success">
    </form>
@endsection
@extends('layouts.eshop')
@section('content')
    
    <!-- your content starts here  -->
   <div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src={{ $data->image }} /></div>
						</div>
						
					</div>
					<div class="details col-md-6">
                        <form method="POST" action="{{ route('putCart',$data->id) }}">
                            @csrf
                        <h3 class="product-title">{{$data->nama}} </h3>
                        <p><i>{{$data->category->nama}}</i></p>
                        <p class="product-description">{{$data->deskripsi}}</p>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h5>Nutrition Facts</h5>
                                <ul>
                                    @foreach(explode("\n", $data->nutrition_facts) as $nf)
                                        <li>{{ $nf }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5>Ingredients</h5>
                                <ul>
                                    @foreach(explode("\n", $data->ingredients) as $i)
                                        <li>{{ $i }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <h4 class="price">Current price: <span id="current-price">Rp {{ number_format($data->harga, 0, ',', '.') }}</span></h4>
                        @can('customer-permission', Auth::user())
                            <p>
                                <b>Quantity: </b>
                                <input type="number" min="1" value="1" name="quantity" id="quantity-input" data-harga="{{ $data->harga }}">
                            </p>
                            <div class="action">
                                <input class="add-to-cart btn btn-default" type="submit" value="add to cart">
                            </div>
                        @endcan
                        </form>
                    </div>
				</div>
			</div>
		</div>

        @push('scripts')
            <script>
            document.addEventListener('DOMContentLoaded', function () {
                const qtyInput = document.getElementById('quantity-input');
                const priceDisplay = document.getElementById('current-price');
                const hargaPerItem = parseInt(qtyInput.dataset.harga);

                qtyInput.addEventListener('input', function () {
                    let qty = parseInt(this.value);
                    if (isNaN(qty) || qty < 1) qty = 1;
                    const totalHarga = hargaPerItem * qty;
                    priceDisplay.textContent = totalHarga;
                });
            });
            </script>
        @endpush
@endsection
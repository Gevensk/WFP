@extends('layouts.eshop')
@section('content')
    
    <!-- your content starts here  -->
   <div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
                        <form method="POST" action="{{ route('putCart',$data->id) }}">
                            @csrf
                            @method('PUT')
                        <h3 class="product-title">{{$data->nama}} </h3>
                        <p><i>{{$data->category->nama}}</i></p>
                        <p class="product-description">{{$data->deskripsi}}</p>
                        <h4 class="price">current price: <span>{{$data->harga}}</span></h4>
                        <p class="vote">{{$data->nutrition_facts}}</p>
                        <p><b>Quantity: </b><input type="number" min=1 value="1" name="quantity"></p>
                                                      <div class="action">
                            <input class="add-to-cart btn btn-default" type="submit" value="add to cart">
                        </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>

    
@endsection
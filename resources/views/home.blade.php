@extends('layouts.main')
{{-- title start here --}}
@push('title')
    Home
@endpush

{{-- home-section start here --}}
@section('home-section')

{{-- success message  --}}
@if(session('success'))
    <div class="success-message delay">
        {{ session('success') }}
    </div>
@endif

<div class="footer">
    {{-- main image start here --}}
	<div class="main-img">
		<img src="{{asset('assets/images/16.png')}}">
	</div>
	{{-- left list include here --}}
	@include('layouts.leftlist')

    {{-- contact div start here --}}
	<div class="contact">
		<div class="contact-us">
			<p>FEATURED PRODUCTS</p>
		</div>

        {{-- camera info start here --}}
		@foreach ($products->random(6) as $product )
		<div class="Camera-info">
			<div class="samsung-cam">

				<!-- <div class="cam-info"> -->
					<div class="cam-info">
					<img src="{{asset($product->pimage)}}" />
					<div class="sam-prc">
						<span>{{$product->pname}}</span>
						<p>Rs.{{$product->pprice}}</p>
					</div>
					<hr class="hr2">
                    {{-- cart btn section start here --}}
					<div class="cart-btn">
						<i class="fa fa-plus-circle iconn" aria-hidden="true"></i>
						<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
						<i class="fa fa-plus" aria-hidden="true"></i>
						<i class="fa fa-cart-plus" aria-hidden="true"></i>
						<input type="submit" name="" value="Add to cart">
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection

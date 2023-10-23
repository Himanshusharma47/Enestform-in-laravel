@extends('layouts.main')

{{-- title add here --}}
@push('title')
   Buy-Product
@endpush

{{-- buy-product-section start here --}}
@section('buy-product-section')
<div class="footer">
{{--leftlist start here  --}}
@include('layouts.leftlist')
<div class="contact">
    {{-- contact-us section start here --}}
    <div class="contact-us">
        @foreach ($category as $catg)
        <p>{{$catg->categoryname}}</p>
        @endforeach
    </div>
    {{-- product-info start here --}}
    <div class="product-info">
        <span>Sort by:</span>
        <form>
            <select>
                <option>product name</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </form>
    </div>
    {{-- display-product start here --}}
    <div class="display-product">
        <span>Displaying 1 to 5(of 6 new product)</span>
        <div class="btnnn">
            <input  class="pre" type="submit" name="" value="Previous">
            <input class="nxt" type="submit" name="" value="Next">
        </div>
    </div>
    {{-- dash-info start here --}}
    @foreach ($product as $item)
    <div class="dish-info">
        <div class="machine-pic">
            <div class="img">
                <img src="{{asset($item->pimage)}}">
            </div>
            <div class="stock">
                <p>In Stock : {{$item->pstock}}</p>
            </div>

        </div>
        {{-- machine-info start here --}}
        <div class="machine-info">
            <div class="date">
                <span>Date Added:2013-06-01  08:05:32</span>
            </div>
            <!-- <hr class="hr"> -->
            <div class="washer">
                <p>{{$item->pname}}</p>
            </div>
            <div class="model-info">
                <span>Model:{{$item->pname}}</span>
                <p>Manufacturer:{{$item->pdescription}}</p>
            </div>
            <div class="price">
                <span>Rs.{{$item->pprice}}</span>
            </div>
            {{-- checkout section start here --}}
            <div class="checkout">
                {{-- authentication for signup --}}
                @if (!Auth::guard('signup')->check())
                <!-- Show the "Logout" button when the user is authenticated -->
                <a href="{{ route('login') }}">
                    <input type="button" value="Login First">
                </a>
                @else
                    <a href="{{ url('add-product-page/'. $item->id) }}">
                        <input type="button" value="Buy Now">
                    </a>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection

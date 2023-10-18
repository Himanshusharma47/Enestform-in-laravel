@extends('layouts.main')

@push('title')
    Add-Product
@endpush

@section('add-product-section')
@if(session('success'))
    <div class="success-message delay">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="error-danger delay">
        {{ session('error') }}
    </div>
@endif
<div class="footer">
@include('layouts.leftlist')
<div class="contact">
    @foreach ($product as $item)
    <div class="contact-us">

        <p>{{$item->pname}} </p>

    </div>
    <div class="dish-info">
        <div class="machine-pic">
            <div class="img">
                <img src="{{asset($item->pimage)}}" />
            </div>
            <div class="stock">
                <p>In Stock:{{$item->pstock}} </p>
            </div>
            <div class="detail">
                <span>Details:</span>
                <p></p>
            </div>
        </div>
        <div class="machine-info">
            <div class="washer">
                <p></p>
            </div>
            <div class="model-info">
                <span>Model:{{$item->pname}}</span>
                <p>Manufacturer:{{$item->pname}}</p>
            </div>


            <form method="post" action="{{route('cart.data')}}">
                @csrf
                <div class="quantity">
                        <table>
                            <tr>
                                <td><input type="hidden" name="userid" value="{{$userId}}"></td>
                                <td><input type="hidden" name="productid" value="{{$item->id}}"></td>
                                <td><input type="hidden" name="pstock" value="{{$item->pstock}}"></td>
                                <td class="qty">Enter quantity</td>
                                <td><input type="text" name="quantity"></td>
                            </tr>
                        </table>
                    <div class="price">
                        <span>Rs.{{$item->pprice}}</span>
                    </div>
                </div>
                <div class="cart">
                    <input type="submit" name="addcart" value="Add to Cart">
                </div>
            </form>

            <div class="checkout">
                <input type="submit" name="" value="checkout">
            </div>
        </div>
    </div>
    @endforeach


    <div class="info">
        <form>
            <table class="table-info">
                <tr>
                    <td class="nme">Enter name</td>
                    <td><input type="" name=""></td>
                </tr>
                <tr>
                    <td class="nme">Enter Email</td>
                    <td><input type="" name=""></td>
                </tr>
                <tr>
                    <td class="nme">Enter Review</td>
                    <td><textarea></textarea></td>
                </tr>
                <tr>
                    <td class="nme">Rating</td>
                    <td><input type="" name=""></td>
                </tr>
                <tr>
                    <td class="btnn-1">
                        <input type="submit" name="" value="Submit query">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</div>
@endsection

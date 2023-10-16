@extends('layouts.main')

@push('title')
   Buy-Product
@endpush

@section('buy-product-section')
<div class="footer">
    @include('layouts.leftlist')	
<div class="contact">  
    <div class="contact-us">
    </div>
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
    <div class="display-product">
        <span>Displaying 1 to 5(of 6 new product)</span>
        <div class="btnnn">
            <input  class="pre" type="submit" name="" value="Previous">
            <input class="nxt" type="submit" name="" value="Next">
        </div>
    </div>
    
   
    
    <div class="dish-info">
        <div class="machine-pic">
            <div class="img">
                <img src="uploadimages/">
            </div>
            <div class="stock">
                <p>In Stock: </p>
            </div>
        </div>
        
        <div class="machine-info">
            <div class="date">
                <span>Date Added:2013-06-01  08:05:32</span>
            </div>
            <!-- <hr class="hr"> -->
            <div class="washer">
                <p></p>
            </div>
            <div class="model-info">
                <span>Model:</span>
                <p>Manufacturer:</p>
            </div>
            <div class="price">
                <span></span>
            </div>
            <div class="checkout">
          
            </div>
        </div>
    </div>
  
</div>
</div>
@endsection
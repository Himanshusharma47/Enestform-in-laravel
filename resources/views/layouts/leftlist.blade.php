{{-- categories div start here --}}
<div class="categorious">
    <div class="cate-heading">
        <p>CATEGORIES</p>
    </div>

    {{-- @if((request()->routeIs('add.product'))) --}}
    <div class="items">
        <ul>
            @foreach ($data as $item)
                <li><a href="{{url('buy-product-page/'. $item->id)}}"> {{$item->categoryname}}</a></li>
            @endforeach
        </ul>
    </div>

</div>

<div class="categorious">
    <div class="cate-heading">
        <p>CATEGORIES</p>
    </div>

    <div class="items">
        <ul>
            @foreach ($data as $item)
                <li><a href="{{url('buy-product-page/'. $item->id)}}"> {{$item->categoryname}}</a></li>
            @endforeach
        </ul>
    </div>


</div>

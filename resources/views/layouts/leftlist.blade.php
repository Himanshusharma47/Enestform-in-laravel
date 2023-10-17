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
    {{-- @endif

    <div class="items">
        <ul>
            <li>TVs</li>
            <li>Dishwasher</li>
            <li>Ranges</li>
            <li>Computer</li>
            <li>Blu-ray & DVD Player</li>
            <li>Projectors</li>
            <li>Hometheater System</li>
            <li>Cameras</li>
            <li>Camcorders</li>
            <li>Washer & Dryers</li>
            <li>Refrigerators</li>
            <li>Microwaves</li>
        </ul>
    </div>--}}


</div>

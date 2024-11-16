<div class="item-list">
    @yield('list')
    <h1>@yield('h1',$id)</h1>
    <ul>
        <li class="item">@yield('ListOfItems')
            <div class="item-name">Vehicle Model Id @yield('Model_ID',$Model_ID)</div>
<div class="item-description">$@yield('price',$p) </div>
<div class="item-name"><img src="{{asset('VehicleImages/'.$Photo)}}" alt=""></div>
        </li>

    </ul>
</div>

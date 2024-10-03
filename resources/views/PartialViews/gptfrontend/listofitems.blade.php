<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','VehicleLists')</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="item-list">
        @yield('list')
        <h1>@yield('h1','My Item List')</h1>
        <ul>
            <li class="item">@yield('ListOfItems')
                <div class="item-name">@yield('itemname','item 1')</div>
        <div class="item-description">@yield('description','This is a description for Item 1.')</div>
            </li>

        </ul>
    </div>

</body>
</html>

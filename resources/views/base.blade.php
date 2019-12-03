<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IS Karkasasi</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    <script defer src="{{ asset('icons/all.js') }}"></script>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap"
    />

    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin=""
    />
    <script
        src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""
    ></script>


</head>
<body>
<div class="page">
    <div class="content-container">
        <ul class="menu">
            <li class="menu-item {{ request()->is('shipments*') ? 'active' : '' }}"><a
                    href="{{route('shipments.index')}}">Shipments</a></li>
            <li class="menu-item {{ request()->is('shipment-statuses*') ? 'active' : '' }}"><a
                    href="{{route('shipment-statuses.index')}}">Statuses</a></li>
            <li class="menu-item {{ request()->is('clients') ? 'active' : '' }}"><a href="{{route('clients.index')}}">Clients</a>
            </li>      <li class="menu-item {{ request()->is('couriers') ? 'active' : '' }}"><a href="{{route('couriers')}}">Couriers</a>
            </li>
            <li class="menu-item {{ request()->is('about') ? 'active' : '' }}"><a href="/about">About</a></li>

            <li class="menu-item"><a href="/">
                    @guest
                        Guest
                    @else
                        {{ Auth::user()->name }}
                    @endguest
                </a></li>
        </ul>
        <div class="content">

            @yield('content')
        </div>
    </div>
    @yield('side-content')
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>

@extends('base')

@section('content')

    <div class="controls-container controls-container--top">
        <a href="{{route('shipments.create')}}">New shipment</a>
    </div>
    <div class="item-table-wrapper">
        <table class="item-table">
            <tr class="table-header">
                <th>ID</th>
                <th>Name</th>
                <th>Weight</th>
                <th>Address</th>
                <th>City</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            @foreach($shipments as $shipment)
                <tr class="item-row">
                    <td><span>{{$shipment->id}}</span></td>
                    <td><span>{{$shipment->name}}</span></td>
                    <td><span>{{$shipment->weight}}</span></td>
                    <td><span>{{$shipment->address}}</span></td>
                    <td><span>{{$shipment->city}}</span></td>
                    <td><span>{{$shipment->status}}</span></td>
                    <td>
                <span class="item-actions">
                  <a href="{{ route('shipments.edit',$shipment->id)}}"><i class="fas fa-pen fa-fw"></i></a>
                  <i class="fa fa-trash fa-fw"></i>
                </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <p>End of content</p>
@endsection

@section('side-content')
    <div class="map" id="main-map"></div>
    <script>
        const map = L.map("main-map").setView([54.897581, 23.909723], 13);

        const markers = [
                @foreach ($shipments as $shipment)
            [ "{{ $shipment->lat }}", "{{ $shipment->long }}" ],
            @endforeach
        ];

        console.log(markers);

        L.tileLayer(
            "https://api.maptiler.com/maps/basic/{z}/{x}/{y}.png?key=ltrALA6k9d2bkEeRn8Fn",
            {
                attribution:
                    '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
            }
        ).addTo(map);

        markers.forEach( marker => {
            L.marker([marker[0], marker[1]]).addTo(map);
        });

        const setMapView = (lat, long) => {
            map.setView([lat, long], 15);
            L.marker([lat, long]).addTo(map);
        };
    </script>

@endsection

@extends('base')

@section('content')

    <div class="page-header">
        <h2><i class="fas fa-bell"></i>Shipment statuses</h2>
        <div class="controls-container">
            <a href="{{route('shipments.create')}}">New status</a>
        </div>
    </div>
    <div class="item-table-wrapper">
        <table class="item-table">
            <tr class="table-header">
                <th>ID</th>
                <th>Name</th>
                <th>Shipment count</th>
                <th>Actions</th>
            </tr>
            @foreach($shipmentStatuses as $shipment)
                <tr class="item-row">
                    <td><span>{{$shipment->id}}</span></td>
                    <td><span>{{$shipment->name}}</span></td>
                    <td><span>{{count($shipment->shipments)}}</span></td>
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


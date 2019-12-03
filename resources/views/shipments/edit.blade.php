@extends('base')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
    @endif
    <form method="post" action="{{ route('shipments.update', $shipment->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-row">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" value="{{ $shipment->name }}" name="name"/>
            </div>
            <div class="form-group">
                <label for="weight">Weight:</label>
                <input type="text" class="form-control" value="{{ $shipment->weight }}"name="weight"/>
            </div>

            <div class="form-group">
                <label for="name">address:</label>
                <input type="text" class="form-control" value="{{ $shipment->address }}" name="address"/>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="name">lat:</label>
                <input disabled type="text" class="form-control" value="{{ $shipment->lat }}" name="lat"/>
            </div>
            <div class="form-group">
                <label for="name">long:</label>
                <input disabled type="text" class="form-control" value="{{ $shipment->long }}"name="long"/>
            </div>
            <div class="form-group">
                <label for="name">city:</label>
                <input type="text" class="form-control" value="{{ $shipment->city }}"name="city"/>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="user_id">User:</label>
                <select class="form-control" name="status_id">
                    @foreach($statuses as $status)
                        <option {{$shipment->status_id == $status->id ? "selected" : "" }} value="{{$status->id}}">{{$status->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="user_id">User:</label>
                <select disabled class="form-control" name="user_id">
                    @foreach($users as $user)
                        <option {{$shipment->user_id == $user->id ? "selected" : "" }} value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="user_id">Courier:</label>
                <select disabled class="form-control" name="courier_id">
                    @foreach($couriers as $courier)
                        <option {{$shipment->courier_id == $courier->id ? "selected" : "" }} value="{{$courier->id}}">{{$courier->first_name}}  {{$courier->last_name}}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <div class="form-controls">
            <a href="{{route('shipments.index')}}">Cancel</a>
            <button type="submit" class="submit-button">Save shipment</button>
        </div>
    </form>

@endsection

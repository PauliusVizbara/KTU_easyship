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
    <form method="post" action="{{ route('shipments.store') }}">
        @csrf
        <div class="form-row">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">
                <label for="weight">Weight:</label>
                <input type="text" class="form-control" name="weight"/>
            </div>

            <div class="form-group">
                <label for="name">address:</label>
                <input type="text" class="form-control" name="address"/>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="name">lat:</label>
                <input type="text" class="form-control" name="lat"/>
            </div>
            <div class="form-group">
                <label for="name">long:</label>
                <input type="text" class="form-control" name="long"/>
            </div>
            <div class="form-group">
                <label for="name">city:</label>
                <input type="text" class="form-control" name="city"/>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="user_id">User:</label>
                <select class="form-control" name="status_id">
                    @foreach($statuses as $status)
                        <option value="{{$status->id}}">{{$status->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="user_id">User:</label>
                <select class="form-control" name="user_id">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="user_id">Courier:</label>
                <select class="form-control" name="courier_id">
                    @foreach($couriers as $courier)
                        <option value="{{$courier->id}}">{{$courier->first_name}}  {{$courier->last_name}}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <div class="form-controls">
            <a href="{{route('shipments.index')}}">Cancel</a>
            <button type="submit" class="submit-button">Add shipment</button>
        </div>
    </form>

@endsection

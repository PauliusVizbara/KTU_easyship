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
                <label for="name">status:</label>
                <input type="text" class="form-control" name="status"/>
            </div>
            <div class="form-group">
                <label for="user_id">user id:</label>
                <input type="number" class="form-control" name="user_id"/>
            </div>

            <div class="form-group">
                <label for="courier_id">Courier id:</label>
                <input type="number" class="form-control" name="courier_id"/>
            </div>
        </div>
        <div class="form-controls">
            <a href="{{route('shipments.index')}}">Cancel</a>
            <button type="submit" class="submit-button">Add contact</button>
        </div>
    </form>

@endsection

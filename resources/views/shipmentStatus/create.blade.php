@extends('base')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a shipment</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('shipments.store') }}">
                    @csrf
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
                    <div class="form-group">
                        <label for="name">status:</label>
                        <input type="text" class="form-control" name="status"/>
                    </div>



                    <button type="submit" class="btn btn-primary-outline">Add contact</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('base')

@section('content')

    <div class="page-header">
        <h2><i class="fas fa-user fa-fw"></i>Couriers</h2>

    </div>
    <div class="item-table-wrapper">
        <table class="item-table">
            <tr class="table-header">
                <th>ID</th>
                <th>Name</th>
            </tr>
            @foreach($couriers as $courier)
                <tr class="item-row">
                    <td><span>{{$courier->id}}</span></td>
                    <td><span>{{$courier->first_name}} {{$courier->last_name}}</span></td>
                </tr>
            @endforeach
        </table>
    </div>
    <p>End of content</p>
@endsection

@extends('base')

@section('content')

    <div class="page-header">
        <h2><i class="fas fa-user"></i>Clients</h2>
    </div>
    <div class="item-table-wrapper">
        <table class="item-table">
            <tr class="table-header">
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            @foreach($users as $user)
                <tr class="item-row">
                    <td><span>{{$user->id}}</span></td>
                    <td><span>{{$user->name}}</span></td>
                    <td>
                <span class="item-actions">
                  <a href="{{ route('shipments.edit',$user->id)}}"><i class="fas fa-pen fa-fw"></i></a>
                  <i class="fa fa-trash fa-fw"></i>
                </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <p>End of content</p>
@endsection


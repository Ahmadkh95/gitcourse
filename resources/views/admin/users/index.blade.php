@extends('layouts.admin')

@section('content')

    <h1>Users</h1>

    <table style="width:100%">
      <tr>
          <th>User Id</th>
          <th>Firstname</th>
          <th>Role</th>
          <th>Is Active</th>
          <th>Email</th>
          <th>Created</th>
      </tr>

        @if($users)
            @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->isActive==1? 'Active' : 'Not Active'}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
              </tr>
            @endforeach
        @endif
    </table>
@endsection
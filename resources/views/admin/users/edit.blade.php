@extends('layouts.admin')
@section('content')

    <h1>Create Users</h1>

    <form method="post" action="{{url('admin/users/'.$user->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Full Name" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{$user->email}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Role</label>
            <select name="role" id="">
                <option value="{{$user->role_id}}">Admin</option>
                <option value="{{$user->role_id}}">Subscriber</option>
            </select>
        </div>
        <div class="form-check">
            <label for="exampleInputPassword1">Status</label>
            <select name="isActive" id="" value="{{$user->isActive}}">
                <option value="1">Active</option>
                <option value="0">Not Active</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                @endforeach
            </ul>
        </div>
    @endif
@endsection
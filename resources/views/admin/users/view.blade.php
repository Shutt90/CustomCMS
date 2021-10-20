@extends('admin.layouts.adminside')

@section('title', 'Admin - Users')

@section('content')

<div class="user-table">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Surname</th>
                <th>Admin</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->fname}}</td>
            <td>{{$user->surname}}</td>
            <td>
                <form method="post" onchange="this.submit();" action="{{route('users.update', $user->id)}}">
                    @csrf
                    @method('put')
                    <input type="radio" id="admin-yes" name="admin" value="1" @if($user->admin == "1") checked @endif>
                    <label for="admin-yes">Yes</label>
                    <input type="radio" id="admin-no" name="admin" value="0" @if($user->admin == "0") checked @endif>
                    <label for="admin-yes">No</label>
                </form
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @include('admin.layouts.success')
</div>

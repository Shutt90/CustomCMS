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
                <th>Admin?</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->fname}}</td>
            <td>{{$user->surname}}</td>
            <td>{{$user->admin === 1 ? "Yes" : "No"}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

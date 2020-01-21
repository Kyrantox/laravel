@extends('layouts.app')

@section('title', 'Index User')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Bio</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->firstname}}</td>
                <td>{{$user->bio}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

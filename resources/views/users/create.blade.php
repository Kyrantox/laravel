@extends('layouts.app')

@section('title', 'Create User')

@section('content')

    <form method="post" class="form" action="{{route('users.store')}}">
        @csrf
        <div class="form-group">
            <label for="lastname">Nom :</label>
            <input type="text" class="form-control" name="lastname"/>
            <label for="firstname">Prénom :</label>
            <input type="text" class="form-control" name="firstname"/>
            <label for="bio">Bio :</label>
            <input type="text" class="form-control" name="bio"/>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>

@endsection

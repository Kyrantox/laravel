@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                        <ul>
                            <li>{{Auth::user()->id}}</li>
                            <li>{{Auth::user()->lastname}}</li>
                            <li>{{Auth::user()->firstname}}</li>
                            <li>{{Auth::user()->bio}}</li>
                                @foreach(Auth::user()->skills as $skill)
                                    <li>{{$skill['name']}}</li>
                                @endforeach
                        </ul>
                        <a class="btn btn-info" href="{{ route('skills.index')}}">Voir mes compétences</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

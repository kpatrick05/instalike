@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">

        @foreach($users as $user)
            <a style="width: 100%; height: 100%;"  class="text-decoration-none text-dark card-text col col-12 col-sm-12 col-md-6 col-lg-4" href="/profile/{{$user->id}}">
            <div class="mb-3">
            <div class="card   d-flex align-items-stretch shadow" style="width: 18rem;">
                <img src="{{$user->profile->profileImage()}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$user->username}}</h5>

                </div>
            </div>
            </div>
            </a>


        @endforeach
    </div>


@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle w-100" style="width: 100%" src="{{$user->profile->profileImage()}}" alt="">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                <div class="h4 pr-3">{{ $user->username }}</div>

                <div id="app">
                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>







                </div>



                @can ('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can ('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="p-2"><strong>{{$postCount}}</strong> posts</div>
                <div class="p-2"><strong>{{$followersCount}}</strong> followers</div>
                <div class="p-2"><strong>{{$followingCount}}</strong> following</div>
            </div>
            <div>
                <div class="pr-5">{{ $user->profile->title }}</div>
                <div class="pr-5">{{ $user->profile->description }}</div>
                <div class="pr-5"><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>
    </div>
    <div class="row pt-4 ">
       @foreach($user->posts as $post)
    <div class="col col-12 col-sm-12 col-md-6 col-lg-4 pb-4">
        <a href="/p/{{ $post->id }}">
            <img src="/storage/{{$post->image}}"  alt="" class="w-100">
        </a>


    </div>
        @endforeach
    </div>
</div>
@endsection
<script>
    import FollowButton from "../../js/components/FolllowButton";
    export default {
        components: {FollowButton}
    }
</script>

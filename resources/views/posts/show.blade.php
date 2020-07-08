@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8">

            <img src="/storage/{{ $post->image }}" class="w-100" alt=":(">

        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="/storage/{{ $post->user->profile->image }}" class="w-100 rounded-circle" style="max-width: 50px ">
                    </div>
                    <div><span class="text-dark">
                            <a style="color: #1b1e21;" href="/profile/{{ $post->user->id }}">
                        <h4>{{  $post->user->username }}</h4>
                        </a>
                        </span>
                    </div>
                    <a href="#" class="pl-3">Follow</a>

                </div>
         </div>
            <hr>
            <p>{{ $post->caption }}</p>
        </div>
    </div>

</div>

@endsection

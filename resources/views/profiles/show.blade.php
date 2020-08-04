@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 pt-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="" class="w-80">
        </div>
        <div class="col-8 pt-5">
            <h1>{{ $user->username }}</h1>
            <div class="d-flex">
                <div class="mr-5"><strong>123</strong> posts</div>
                <div class="mr-5"><strong>123</strong> followers</div>
                <div class="mr-5"><strong>123</strong> following</div>
            </div>
            <div>
                <strong>{{ $user->profile->title }}</strong>
            </div>
            <div>{{ $user->profile->description }}</div>
            <div>{{ $user->profile->url }}</div>            
        </div>
    </div>

    <div class="row">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="" class="w-80">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="" class="w-80">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="" class="w-80">
    </div>
</div>
@endsection

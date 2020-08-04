@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 pt-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="" class="w-80">
        </div>
        <div class="col-8 pt-5">
            {{-- Username --}}
            <h1>LaraGram</h1>
            {{-- Posts, followers, following --}}
            <div class="d-flex">
                <div class="mr-5"><strong>123</strong> posts</div>
                <div class="mr-5"><strong>123</strong> followers</div>
                <div class="mr-5"><strong>123</strong> following</div>
            </div>
            {{-- Title --}}
            <div>
                <strong>LaraGram</strong>
            </div>
            {{-- Description --}}
            <div>Description Text</div>
            {{-- URL --}}
            URL
        </div>
    </div>

    <div class="row">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="" class="w-80">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="" class="w-80">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="" class="w-80">
    </div>
</div>
@endsection

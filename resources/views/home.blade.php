@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="" class="w-100">
        </div>
        <div class="col-9">
            {{-- Username --}}
            <h1>LaraGram</h1>
            {{-- Posts, followers, following --}}
            <div class="d-flex">
                <div class="mr-5"><strong>123</strong> posts</div>
                <div class="mr-5"><strong>123</strong> followers</div>
                <div class="mr-5"><strong>123</strong> following</div>
            </div>
            {{-- Title --}}
            {{-- Description --}}
            {{-- URL --}}
        </div>
    </div>
</div>
@endsection

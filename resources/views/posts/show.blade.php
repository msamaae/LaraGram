@extends('layouts.app')

@section('content')
<div class="container">
    Show single post
    <img src="/storage/{{ $post->image }}" alt="">
</div>
@endsection

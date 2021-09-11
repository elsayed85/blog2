@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->body }}</p>
                <p>{{ $post->created_at }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

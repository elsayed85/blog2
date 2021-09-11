@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach ($posts as $post)
                <h1>
                    <a href="{{ route('user.posts.show' , $post) }}">{{ $post->title }}</a>
                    @if($post->user_id == auth()->id())
                    <button><a href="{{ route('user.posts.edit' , $post) }}">edit</a></button>
                    @endif
                </h1>
                @endforeach

                {{ $posts->withQueryString()->render() }}
            </div>
        </div>
    </div>
</div>
@endsection

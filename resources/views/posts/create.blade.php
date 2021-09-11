@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{ route('user.posts.store') }}" method="POST">
                    @csrf

                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        value="{{ old('title') }}" placeholder="title"> <br>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="" cols="30"
                        rows="10">{{ old('body') }}</textarea> <br>
                    @error('body')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

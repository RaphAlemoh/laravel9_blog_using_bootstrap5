@extends('layouts.app')

@section('content')
<header class="masthead" style="background-image: url('img/contact-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Edit Post</h1>
                    <span class="subheading">Keep your post up to date</span>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Want to share knowledge? Enter the title and content then publish</p>
                <div class="my-5">
                    <form action="{{ route('posts.update', $post->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-floating">
                            <input class="form-control @error('title') is-invalid @enderror" name="title" type="text" value="{{ $post->title }}" placeholder="Enter post title..." required />
                            <label for="title">Title</label>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Enter your post here..." style="height: 12rem" required>
                            {{ $post->description }}
                        </textarea>
                        <label for="message">Description</label>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <br />
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Publish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@extends('layouts.app')

@section('content')
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Blog Posts</h1>
                    <span class="subheading">Recent blog posts</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">


            @forelse ($posts as $post)

            <!-- Post preview-->
            <div class="post-preview">
                <a href="{{ route('posts.show', $post->id) }}">
                    <h2 class="post-title">{{ $post->title }}</h2>
                </a>
                <h3 class="post-subtitle">{{ $post->description }}</h3>
                <p class="post-meta">
                    Posted by
                    <a href="#!">{{ $post->user->name }}</a>
                    on {{ $post->created_at }}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />

            @empty
            <h4 class="text-center">No Blog post available</h4>
            @endforelse

        </div>
    </div>
</div>
@endsection

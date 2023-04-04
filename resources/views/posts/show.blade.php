
      @include('posts.navbar')

<div class="container">
    <div class="row mt-5">
        <div class="col-12">

        <h1>Post Details</h1>

        <h3>{{ $post->title }}</h3>
        <p> {{ $post->body }}</p>


        <a href="/posts" class="btn btn-secondary">Home</a>


        </div>
    </div>
</div>
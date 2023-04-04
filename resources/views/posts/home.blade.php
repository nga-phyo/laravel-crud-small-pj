
 @include('posts.navbar')




<div class="container">
    <div class="row mt-5">
        <div class="col-12">

                    @foreach ($posts as $post)

  
                            <a href="post/show/{{$post->id}}" style="text-decoration: none"> 

                              <h3 style="color:cornflowerblue">  {{ $post->title }} </h3>
                                <p style="color:black;"> {{ $post->body }} </p>

                            </a>
                        
                            <div class="d-flex justify-content-end">

                                <a href="post/edit/{{$post->id}}" class="btn btn-primary">Edit</a>

                                <form action="post/delete/{{$post->id}}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>

                                    </form>
                                    </div>
                                

                        <hr>

                    @endforeach

        </div>
    </div>
</div>


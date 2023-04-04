
    @include('posts.navbar')

    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-8">

                <div class="card">

                    <div class="card-header" style="background-color:bisque">
                        <h1 style="color:brown; text-align:center;">Post Create</h1>
                    </div>

                    <div class="card-body">

                            <form action="/post/store" method="POST">

                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

                                @csrf

                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control" ><br><br>
                                @error('title')
                                        <div style="color:red">{{$message}}</div>
                                @enderror

                                <label for="">Body</label>
                                <textarea name="body"  cols="10" rows="5" class="form-control">
                                
                                </textarea><br><br>
                                @error('body')
                                <div style="color:red">{{$message}}</div>
                            @enderror


                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-success">Create</button>
                                    <a href="/posts" class="btn btn-secondary">Cancle</a>
                                </div>
                            </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
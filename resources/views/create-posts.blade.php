@extends( 'layouts.master' )
@section( 'title', 'Create Blogs' )

@section( 'content' )
    <br><br>
<div class="create-blog-wrapper">
    <div class="container">
        @include( 'layouts.messages' )
        <form action="{{url( '/posts' )}}" method="post">
                {{csrf_field()}}
                <h4>Create Post</h4><br>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="">
                </div>
                    <label for="exampleTextarea">Content</label>
                    <textarea class="form-control" name="content" id="exampleTextarea" rows="6"></textarea>
                <div class="form-group">
                    <label for="author" class="">Author Name</label>
                    <input type="text" name="author" class="form-control" id="author" value="">
                </div>
                <div class="form-group">
                    <label for="category" class="">Category</label>
                    <input type="text" name="category" class="form-control" id="category" value="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection

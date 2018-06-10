@extends( 'layouts.master' )
@section( 'title', 'Show Blogs' )


@section( 'content' )
    <br>
    <div class="show-bloas-container">
        <div class="container">
            @include( 'layouts.messages' )
            @if( ! empty( $posts ) )
                @foreach( $posts as $post )
                    <div class="card bg-light mb-3" style="max-width: 20rem;">
                        <div class="card-header">{{ $post->title }}</div>
                        <div class="card-body">
                            <p class="card-text">{{ $post->content }}</p>
                            <p>Posted by {{ $post->author }}</p>
                            <p>Posted {{ $post->created_at->diffForHumans() }}</p>
                            <p>Category: {{ $post->category }}</p>
                            <a href="{{url( "/posts/$post->id" )}}"><button type="button" class="btn post-edit-btn btn-warning">Edit</button></a>
                            <div class="delete-form">
                                <form action="{{url( "/posts/$post->id" )}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $posts->links() }}
            @endif
        </div>
    </div>
    @endsection
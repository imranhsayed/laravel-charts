@if( ! empty( $errors_array = $errors->all() ) )
    @foreach( $errors_array as $error )
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{{$error}}</p>
        </div>
        @endforeach
    @endif

@if( ! empty( ! empty( $success_msg = session( 'success' ) ) ) )
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{{$success_msg}}</p>
        </div>
@endif
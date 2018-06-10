@extends( 'layouts.master' )
@section( 'title', 'Blogs' )

@section( 'content' )
    <br>
    <div class="container">
        <!-- Area Chart Example-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Blog Posting Trend </div>
            <div class="card-body">
                <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at @php  echo date('F j, Y', time() ) @endphp</div>
        </div>
    </div>

    @endsection

@section( 'scripts' )
    <script src="{{url( 'vendor/jquery.min.js' )}}"></script>

    <script src="{{url( 'vendor/Chart.min.js' )}}"></script>

    <script src="{{url( 'vendor/create-charts.js' )}}"></script>
    @endsection

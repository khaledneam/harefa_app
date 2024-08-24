@extends('Base::layout.dashboard.base')


@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $users }}</h3>

                    <p>عدد الاعضاء</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>

            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $visitors }}</h3>

                    <p>عدد الزيارات</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>

            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $dawry }}</h3>

                    <p>عدد الدوريات</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>

            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $questions }}</h3>

                    <p>عدد الاسئله</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>

            </div>
        </div>
        <!-- ./col -->



        <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $hezma }}</h3>

                    <p>عدد الحزم</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>

            </div>
        </div>
        <!-- ./col -->

    </div>
    <!-- /.row -->
    <br />
    <br />
    <br /><br /><br />

    <div class="container">
        <div class="row">
            <button type="button" class="btn btn-success col-md-3 m-2 report" data-days="1">24 hours</button>
            <button type="button" class="btn btn-success col-md-3 m-2 report" data-days="7">7 days</button>
            <button type="button" class="btn btn-success col-md-3 m-2 report" data-days="30">30 days</button>
        </div>

        <div class="">
            <div class="analytics">

            </div>
        </div>
    </div>
@endsection



@section('script')

<script>
    $(document).ready(function() {
        $('.analytics').empty();

       $('.report').click(function() {
        $('.analytics').empty();
        let days = $(this).data('days');

        $.ajax({
                    url: "{{  route('reports.dashboardCards') }}",
                    type: 'GET',
                    data: { days },
                    dataType: 'json',

                    success: function(response) {

                       if (response.html)
                       {
                        $('.analytics').html(response.html);
                       }


                    },
                    error: function(xhr) {
                        $('.analytics').html('<p>An error occurred: ' + xhr.statusText + '</p>');
                    }
                });

       })// end of report
    });



</script>

@endsection


















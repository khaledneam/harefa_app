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

@endsection

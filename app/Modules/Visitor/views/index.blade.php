@extends('Base::layout.dashboard.base')

@section('style')


@endsection


@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">


        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered" id="dawryTable">
                <thead>
                <tr>
                    <th style="">ip_address</th>
                    <th style="">country</th>
                    <th style="">city</th>
                    <th style="">latitude</th>
                    <th style="">longitude</th>
                    <th>visited_at</th>

                </tr>
                </thead>
                <tbody>


                </tbody>
            </table>
        </div>
        <!-- /.card-body -->

    </div>




    <!-- /.row -->

@endsection

@section('script')




    <script type="text/javascript">
        $(document).ready(function() {
            'use strict';
            var table = $('#dawryTable').DataTable({
                responsive: true,
                ordering: false,
                processing: true,
                serverSide: true,
                searching: false,
                stateSave: true,
                ajax: '{{ route('visitors.index') }}',
                columns: [
                    { data: 'ip_address', name: 'ip_address' },
                    { data: 'country', name: 'country' },
                    { data: 'city', name: 'city' },
                    { data: 'latitude', name: 'latitude' },
                    { data: 'longitude', name: 'longitude' },
                    { data: 'visited_at', name:"visited_at" }
                ],


            });

            $(function() {
                // Any additional initialization code can go here
            });
        }); // end ready
    </script>


@endsection

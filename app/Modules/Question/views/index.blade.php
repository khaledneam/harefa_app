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
                    <th style="">السؤال</th>
                    <th style="">الدورى</th>
                    <th style="">التحدى</th>
                    <th style="">الحزمه</th>
                    <th style="">الصوره</th>
                    <th>العمليات</th>

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
                ajax: '{{ route('question.index') }}',
                columns: [
                    { data: 'question', name: 'question' },
                    { data: 'dawry_id', name: 'dawry_id' },
                    { data: 'challenge_id', name: 'challenge_id' },
                    { data: 'hezma_id', name: 'hezma_id' },
                    { data: 'photo', name: 'photo' },
                    { data: 'action', searchable: false, orderable: false }
                ],


            });

            $(function() {
                // Any additional initialization code can go here
            });
        }); // end ready
    </script>


@endsection

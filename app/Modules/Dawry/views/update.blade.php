@extends('Base::layout.dashboard.base')


@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    {{--                    <h3 class="card-title">Quick Example</h3>--}}
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ route('dawry.update',[$record->id??null]) }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">اسم الدورى</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" required name="name" value="{{ $record->name ?? "" }}">
                            @error('name')
                            <div class="error alert alert-error">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">update</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->



        </div>


    </div>
    <!-- /.card -->



    <!-- /.row -->

@endsection

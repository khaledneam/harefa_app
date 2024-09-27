@extends('Base::layout.dashboard.base')


@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>الاسم</th>
                <th>البريد الالكترونى</th>
                <th>الرساله</th>
            </tr>
            </thead>
            <tbody>
            @foreach($supports as $support)
                <tr>
                    <td>{{ $support->name }}</td>
                    <td>{{ $support->email }}</td>
                    <td>{{ $support->msg }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="row">
            <!-- Use Bootstrap-compatible pagination -->
            <div class="d-flex justify-content-center">
                {{ $supports->links('pagination::bootstrap-4') }}
            </div>
        </div>

    </div>



@endsection



@section('script')



@endsection


















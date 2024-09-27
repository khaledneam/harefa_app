@extends('Base::layout.dashboard.base')


@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">

        <form action="{{ route('insights.home.dashboard.store') }}" method="post">
            @csrf
            <div class="col-md-12 form-group">
                <label>عدد الاسئله</label>
                <input type="number" name="question_count" required value="{{ $insights->question_count }}">
            </div>
            <div class="col-md-12 form-group">
                <label> عدد الاحكام</label>
                <input type="number" name="count_judgments" required value="{{$insights->count_judgments}}">
            </div>
            <div class="col-md-12 form-group">
                <label> عدد التحدى </label>
                <input type="number" name="count_challenges" required value="{{$insights->count_challenges}}">
            </div>
            <div class="col-md-12 form-group">
                <label> عدد الباقات </label>
                <input type="number" name="count_packages" required value="{{ $insights->count_packages }}">
            </div>
            <div class="col-md-12 form-group">
                <label> عدد الاعبين </label>
                <input type="number" name="count_players" required value="{{ $insights->count_players }}">
            </div>
            <div class="col-md-12 form-group">
                <label> عدد الدوريات </label>
                <input type="number" name="count_leagues" required value="{{ $insights->count_leagues }}">
            </div>

            <button type="submit" name="">Save</button>

        </form>

    </div>

@endsection



@section('script')



@endsection


















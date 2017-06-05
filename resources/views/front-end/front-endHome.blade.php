@extends('front-end.front-endCore')

@section('homepage')
    <div id="part-01">
        <div id="red-flag">
            <div id="elektromarkt">
                <h3 class="inspired">{{trans('app.inspired_by')}}</h3>
            </div>
        </div>
        <h1 class="main-title">{{trans('app.find_yourself')}}</h1>
       <h5 class="baner-text">{{trans('app.baner_text')}}</h5>
    </div>

@endsection
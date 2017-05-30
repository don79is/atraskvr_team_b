@extends('admin.adminBase')

@section('adminMenusCreate')
    <div class="container">
        <h2>Sukurti naują meniu įrašą</h2>

        {!! Form::open(['url' => route($edit, $item['id'])]) !!}
        <br>
        {{ Form::label('sequence', 'Eiliškumas')}}<br>
        {{Form::text('sequence', $item['sequence'])}}
        <br>
        {{ Form::label('parent', 'Tėvinis meniu')}}<br>
        {{Form::text('parent', $item['parent'])}}
        <br>
        {{ Form::label('title', 'Pavadinimas')}}<br>
        {{Form::select('title', $pages)}}
        <br>
        {{ Form::label('slug', 'Nuoroda')}}<br>
        {{Form::text('slug', $item['slug'])}}
        <br>
        {{ Form::label('language', 'Kalba')}}<br>
        {{Form::select('language', $languages)}}
        <br>
        <br>

        {{ Form::submit('Patvirtinti') }} {{--TODO:: button reset--}}

        {!! Form::close() !!}
    </div>
@endsection
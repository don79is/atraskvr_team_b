@extends('layouts.app')

@section('error')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h2>{{ $exception->getMessage() }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
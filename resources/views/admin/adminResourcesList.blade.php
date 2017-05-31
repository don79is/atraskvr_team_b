@extends('admin.adminBase')

@section('adminResourcesList')
    <div class="container">
        <h2>Photo and video gallery</h2>

        <div class="row">
            @if(count($vr_resources) > 0)
                <div class="col-md-12 text-center">
                    <a href="{{ url('admin/upload/create') }}" class="btn btn-primary" role="button">
                        Add new
                    </a>
                    <hr/>
                    @include('error-notification')
                </div>
            @endif
            @forelse($vr_resources as $resource)
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="{{asset($resource->path)}}"/>
                        <div class="caption">
                            <h3>{{$resource->mime_type}}</h3>
                            <p> Size: {{ $resource->size }} kb</p>
                            <p>
                            <div class="row text-center" style="padding-left:1em;">
                                <span class="pull-left">&nbsp;</span>
                                {!! Form::open(['url'=>'/admin/upload/'.$resource->id, 'class'=>'pull-left']) !!}
                                {!! Form::hidden('_method', 'DELETE') !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm("Ar tikrai ketinate ištrinti?")']) !!}
                                {!! Form::close() !!}
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <h4>There is no uploaded files, <a href="{{ url('admin/upload/create') }}">Upload</a>?</h4>
            @endforelse
        </div>
        <div align="center">{!! $vr_resources->render() !!}
        </div>
    </div>
@stop

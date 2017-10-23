@extends('layout.app')

@section('content')
    <h1>Rollbar Laravel Notifier Example</h1>
    {!! Form::open(['url' => 'home/submit']) !!}
    <div class="fom-group">
        {{Form::submit('Create an error',['class'=> 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection
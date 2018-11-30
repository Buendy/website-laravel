@extends('layouts.layout')

@section('content')
    <h1>Contacta con nosotros</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email-Address') }}
        {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Enter your email']) }}
    </div>
    <div class="form-group">
        {{ Form::label('message', 'Message') }}
        {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter your message'] ) }}
    </div>
    <div>
        {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
    </div>
    {!! Form::close() !!}
@endsection

@section('sidebar')
    @parent
    <p>Esta es la barra de contactos</p>
@endsection

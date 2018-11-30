@extends('layouts.layout')

@section('content')
    <h1>Listado de mensajes</h1>
    @if(count($messages)>0)
        @foreach($messages as $message)

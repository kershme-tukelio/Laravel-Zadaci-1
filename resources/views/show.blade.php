@extends('layouts.app')

@section('title', 'Show Car')

@section('content')
    <h1>{{$car->title}}</h1>
        <p>{{$car}}</p>
@endsection
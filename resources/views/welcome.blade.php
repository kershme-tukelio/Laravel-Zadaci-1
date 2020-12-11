@extends('layouts.app')

@section('title', 'Welcome to Cars!')

@section('content')
<h1>Welcome {{$name}}!</h1>
    <p>
        I'm {{$age}} years old!
    </p>
@endsection
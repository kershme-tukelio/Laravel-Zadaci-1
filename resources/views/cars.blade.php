@extends('layouts.app')

@section('title', 'Cars')

@section('content')
<h1>Cars</h1>
    <ul>
        @foreach ($cars as $car)
            <li>
                <a href="{{route('cars.single', ['id' => $car->id])}}">{{$car->title}}</a>
            </li>
        @endforeach
    </ul>
@endsection
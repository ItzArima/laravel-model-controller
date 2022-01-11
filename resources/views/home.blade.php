@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/home.css')}}">

@section('content')
    <main>
        @foreach(DB::table('movies')->get() as $item)
            <p>{{$item->id}}</p>
        @endforeach
    </main>
@endsection
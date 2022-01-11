@extends('layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{asset('css/home.css')}}">

@section('content')
    <main>
        <div class="cards-container">
            @foreach($movies as $item)
                <div class="card">
                    <div class="id">
                        <p>id: {{$item->id}}</p>
                    </div>
                    <div class="titles">
                        <div class="title">
                            <h1>{{$item->title}}</h1>
                        </div>
                        <div class="original-title">
                            <h3>{{$item->original_title}}</h3>
                        </div>
                    </div>
                    <div class="card-bottom">
                        <div class="date-natationality">
                            <div class="nationality">
                                <p>{{$item->nationality}}</p>
                            </div>
                            <div class="date">
                                <p>{{$item->date}}</p>
                            </div>
                        </div>
                        <div class="vote {{$item->vote >= 6 ? 'positive' : 'negative'}}">
                            <p>{{$item->vote}} / 10</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
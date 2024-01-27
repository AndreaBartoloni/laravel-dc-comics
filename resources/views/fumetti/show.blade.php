@extends("layouts.app")
<header>
    <a href="{{route('fumetti.index')}}">Torna alla lista film</a>
</header>
@section('content')
    <img src="{{$fumettiDetails->thumb}}">
    <h1>{{$fumettiDetails->title}}</h1>
    <p>{{$fumettiDetails->description}}</p>
    
@endsection
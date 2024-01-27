@extends("layouts.app")
<header>
    <a href="{{route('fumetti.index')}}">Torna alla lista film</a>
</header>
@section('content')
    <div class="container-fumetto">
        <div class="container-img">
            <img src="{{$fumetti->thumb}}">
        </div>
        <div class="container-text">
            <h1>{{$fumetti->title}}</h1>
            <p>{{$fumetti->description}}</p>
        </div>
    </div>
    
  
    
@endsection


<style>

    .container-fumetto{
        display: flex;
        width: 80%;
        margin: auto;
    }
    .container-img{
        width: 50%;
        text-align: center;
    }
    .container-img > img{
        width: 60%;
        
    }
    .container-text{
        width: 50%;
    }
</style>
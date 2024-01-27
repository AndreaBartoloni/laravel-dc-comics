@extends("layouts.app")

@section('content')
    <div class="container-jumbo" >
        <img src="{{ asset('img/jumbotron.jpg')}}">
    </div>
    <div class="container-content">
        <div class="container-bg">
            <p class="background-blue">Current Series</p>
        </div>
        
        <div class="container-bg flex">

            @foreach ($fumetti as $fumetto)
                <div class="card-fumetti">
                    <a href="{{ route('fumetti.show', $fumetto->id) }}">
                        <img src="{{ $fumetto->thumb }}" alt="{{ $fumetto->title }}">
                    </a>
                    
                    <h5>{{$fumetto['title']}}</h5>
                    
                </div>
            @endforeach
                
            
        </div>
        <button class="button">Load More</button>
        <div class="sfondo-blu-iconbar">
            <div class="container-iconbar container-bg">
                {{-- @foreach($iconsBar as $iconBar)
                    <div class="card-icon">
                        <div class="container-image">
                            <img src="{{$iconBar['image']}}">
                        </div>
                        <div class="container-title">
                            <p>{{$iconBar['title']}}</p>
                        </div>                    
                    </div>
                @endforeach --}}
            </div>
        </div>
    </div>

@endsection


<style>
    /* Sezione Hero */
    .container-jumbo > img{
        width: 100%;
        height: 37vh;
        object-fit: cover;
        object-position: top;
    }
    /* Content */
    .container-content{
        min-height:auto;
        background-color: #1a1a1a;
        text-align: center;
        margin-top: -25px;
       
    }
    .flex{
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .card-fumetti{
        
        width: 15%;
    }
    .card-fumetti > a > img{
       width: 100%;
       height: 150px;
       object-fit: cover;
       object-position: top;
    }
    .card-fumetti > h5{
        margin-top: 10px;
        text-align: start;
        color: white;
        font-size: 15px;
    }
    .background-blue{
        background-color: #057bf3;
        width: 18%;
        padding: 10px 20px ;
        text-transform: uppercase;
        text-align: start;
        margin: 0px 0px 20px 0px;
        font-weight: 600;
        z-index: 99;
        position: relative;
        
    }
    p{
        color: white;
    }
    
    .button {
    
        border: 1px solid transparent;
        padding: 0.6em 2.4em;
        font-size: 1em;
        font-weight: 500;
        font-family: inherit;
        background-color: #057bf3;
        cursor: pointer;
        transition: border-color 0.25s;
        text-align: center;
        margin: 30px 0px 20px 0px ;
        color: white;
    
    }
    
    /* Icon Bar  */
    
    .sfondo-blu-iconbar{
        background-color: #057bf3;
        padding: 10px 0px;
    }
    .container-iconbar{
        display: flex;
        align-items: center;
        text-align: center;
        padding: 50px 0px;
    }
    .card-icon{
        width: 20%;
        display: flex;
        align-items: center;
        margin-right: 0px;
        
    }
    .container-image{
        width: 30%;
    }
    .container-image > img{
        width: 80%;
        text-align: start;
    }
    .container-title{
        width: 70%;
    }
    .container-title > p{
        text-transform: uppercase;
        font-size: 13px;
        text-align: start;
        margin-left: 5px;
    }
    
    </style>
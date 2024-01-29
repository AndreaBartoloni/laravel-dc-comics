@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Modifica Fumetto</h2>
        </div>
        <div class="row">
            <form action="{{route('fumetti.update', $fumetti->id)}}" method="POST" >
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$fumetti->title}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{$fumetti->description}}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{$fumetti->type}}">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">img</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{$fumetti->thumb}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$fumetti->price}}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{$fumetti->series}}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$fumetti->sale_date}}">
                </div>
                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
@endsection
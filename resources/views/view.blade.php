@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <a href="{{route('index')}}">list</a>
            <br>
            <a href="{{route('create')}}">create</a>
        </div>
        <div class="col-md-9">
            {{$note->text}}
        </div>
    </div>
</div>
@endsection

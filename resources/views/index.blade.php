@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <a href="{{route('create')}}">create</a>
        </div>
        <div class="col-md-9">
            @foreach($notes as $note)
                <div class="alert alert-info">{{$note->text}}</div>
            @endforeach
        </div>
    </div>
</div>
@endsection

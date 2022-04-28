@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <a href="{{route('index')}}">list</a>
        </div>
        <div class="col-md-9">


            {{$note->number}}<br>
            {{$note->number_tab}}<br>
            {{$note->rank}}<br>
            {{$note->name}}<br>
            {{$note->birthday}}<br>
            {{$note->passport_serio}}<br>
            {{$note->passport_number}}<br>
            {{$note->passport}}<br>
            {{$note->who_gift}}<br>
            {{$note->date_gift}}

        </div>
    </div>
</div>
@endsection

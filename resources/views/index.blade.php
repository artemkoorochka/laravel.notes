@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <a href="{{route('create')}}">create</a>
        </div>
        <div class="col-md-9">
            @foreach($notes as $note)
                <div class="alert alert-info row justify-content-between">
                    <div class="col-auto">{{$note->text}}</div>
                    <div class="col-auto">
                        <form action="{{route("destroy", $note->id)}}" method="post">
                            @csrf
                            @method("delete")
                            <a href="{{route("show", $note->id)}}" class="btn btn-outline-primary btn-sm">View</a>
                            <a href="{{route("edit", $note->id)}}" class="btn btn-outline-info btn-sm">Edit</a>
                            <input type="submit"
                                   class="btn btn-outline-danger btn-sm"
                                   value="Delete">
                        </form>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

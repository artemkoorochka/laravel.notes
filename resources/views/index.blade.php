@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">

        </div>
        <div class="col-md-9">

            <div class="mb-3">{{$notes->links()}}</div>

            @foreach($notes as $note)
                <div class="alert alert-info row justify-content-between">
                    <div class="col-auto">
                        <div class="row">
                            <div class="col-auto">{{$note->number}}</div>
                            <div class="col-auto">{{$note->name}}</div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="{{route("show", $note->id)}}" class="btn btn-outline-primary btn-sm">View</a>
                    </div>
                </div>
            @endforeach

                <div class="mt-3">{{$notes->links()}}</div>

        </div>
    </div>
</div>
@endsection

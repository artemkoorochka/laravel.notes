@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <a href="{{route('index')}}">list</a>
        </div>
        <div class="col-md-9">
            <form method="post" action="{{route('update', $note->id)}}">

                @csrf
                @method("patch")

                <div class="mb-3">
                    <label for="notetext" class="form-label">Note text</label>
                    <textarea name="text" id="notetext" class="form-control">{{$note->text}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

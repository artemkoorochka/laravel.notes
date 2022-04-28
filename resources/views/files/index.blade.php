@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="{{route('index')}}">list</a>
            </div>
            <div class="col-md-9">
                <form action="{{route('files.upload')}}"
                      method="post"
                      enctype="multipart/form-data">
                    @csrf

                    <input type="file" name="file">

                    <input type="submit"
                           value="submit"
                           class="btn btn-outline-primary">
                </form>

`               @if(empty($files))
                    <div class="alert alert-info text-center">There is not files</div>
                @else
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th colspan="2">Name</th>
                            <th>type</th>
                            <th>size</th>
                            <th>path</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($files as $file)
                            <tr>
                                <td>{{$file->id}}</td>
                                <td>
                                    <img width="100" src="/{{$file->path}}" class="img-thumbnail img-fluid">
                                </td>
                                <td>{{$file->name}}</td>
                                <td>{{$file->type}}</td>
                                <td>{{$file->size}}</td>
                                <td>{{$file->path}}</td>
                                <td>
                                    <form>
                                        <s href="#" class="btn btn-outline-primary btn-sm">Edit</s>
                                        <input type="submit" class="btn btn-outline-danger btn-sm" value="delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif

            </div>
        </div>
    </div>
@endsection

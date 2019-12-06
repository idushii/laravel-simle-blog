@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <form action="#" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="{{$record->id}}">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Title</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" value="{{$record->title}}" name="title" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Another label</label>
                            <textarea name="desc" rows="8" class="form-control">{{$record->desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Another label</label>
                            <textarea name="content" rows="15" class="form-control">{{$record->content}}</textarea>
                        </div>
                        <input type="submit" class="btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

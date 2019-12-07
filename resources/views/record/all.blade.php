@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($records as $record)
            <div class="col-12 col-md-6 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$record->title}}</h5>
                        <p class="card-text">{{$record->desc}}</p>
                        <a href="{{route('record.show', ['record' => $record->id])}}" class="btn btn-primary float-right">Дальше</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

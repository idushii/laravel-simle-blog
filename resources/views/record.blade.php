@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$record->title}}</h5>
                    <p class="card-text border-bottom pb-2">{{$record->desc}}</p>
                    <p class="card-text">{{$record->content}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

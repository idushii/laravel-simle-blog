@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($records as $recod)
            <div class="col-12 col-md-6 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$recod->title}}</h5>
                        <p class="card-text">{{$recod->desc}}</p>
                        <a href="#" class="btn btn-primary float-right">Дальше</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

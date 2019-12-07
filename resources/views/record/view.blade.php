@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 mb-2">
            <div class="card">
                <div class="card-body">
                    @auth
                    <a href="{{route('record.edit', ['record' => $record->id])}}" class="btn btn-link btn-sm float-right">Изменить</a>
                    @endauth
                    <h5 class="card-title">{{$record->title}}</h5>
                    <p class="card-text border-bottom pb-2">{{$record->desc}}</p>
                    <p class="card-text">{{$record->content}}</p>
                    @auth
                    <form action="{{route('record.edit', ['record' => $record->id])}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="Удалить" class="btn btn-outline-danger btn-sm">
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
                        @include('record.form')
                        <input type="submit" class="btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

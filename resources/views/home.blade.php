@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-2">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <passport-clients class="mb-2"></passport-clients>
            <passport-authorized-clients class="mb-2"></passport-authorized-clients>
            <passport-personal-access-tokens class="mb-2"></passport-personal-access-tokens>
        </div>
    </div>
</div>
@endsection

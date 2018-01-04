@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <h2 class="text-center">Welcome <strong>{{ Auth::user()->name}}</strong></h2>
        </div>
    </div>
</div>
@endsection

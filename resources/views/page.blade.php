@extends('layouts.layout')

@section('main')
    <div id="about" class="container page-content">
            <div class="row justify-content-center">
                <h2 id="about-title" class="about-block pad" > {{$title}}</h2>

                {!! $body !!}

            
        </div> <!-- about -->
@endsection

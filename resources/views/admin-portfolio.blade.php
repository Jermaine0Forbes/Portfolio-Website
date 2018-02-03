@extends('layouts.backend')

@section('content')
@include('vendor.laravel-editor.editor-css')
    <div class="container">
        <div class="row">
            <form class="mt-3 w-100 portfolio-form"  method="get" >
                {{ csrf_field() }}
                    <p>
                        <a  class="btn btn-primary" href="/admin/portfolio/{{$new}}">Create a new Project</a>
                    </p>
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>ID</th>
                            <th>Created</th>
                            <th>Updated</th>
                        </thead>
                        <tbody>
                            @foreach ($project as $pro )
                                <tr>
                                    <td>
                                        <a href="/admin/portfolio/{{$pro->pro_id}}">{{$pro->name}}</a>
                                    </td>
                                    <td>{{$pro->pro_id}}</td>
                                    <td>{{$pro->createdAt->format("M/d/Y")}}</td>
                                    <td>{{$pro->updatedAt->format("M/d/Y")}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

            </form>
        </div>
    </div>
    @include('vendor.laravel-editor.editor-js')
@endsection

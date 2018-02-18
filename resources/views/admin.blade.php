@extends('layouts.backend')

@section('content')
<div class="container panel">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <h2 class="text-center">Welcome <strong>{{ Auth::user()->name}}</strong></h2>
            <div class="fluid row">
            	<button class="col-md-4 text-center btn btn-primary">
            		Today
            	</button>
            	<button class="col-md-4 text-center btn btn-primary">
            		This Week
            	</button>
            	<button class="col-md-4 text-center btn btn-primary">
            		This Month
            	</button>
            </div>
            <table class="table">
            	<caption>Page Views</caption>
            	<thead>
            		<tr>
            			<th>IP</th>
            			<th>Path</th>
            			<th>Size</th>
            			<th>Country</th>
            			<th>Region</th>
            			<th>Zip code</th>
            			<th>Date</th>
            		</tr>
            	</thead>
            	<tbody>
            	 	@foreach( $address as $data)
	            		<tr>
	            			<td>{{$data->ip}}</td>
	            			<td>{{$data->path}}</td>
	            			<td>{{$data->screen_height}} x {{$data->screen_width}} </td>
	            			<td>{{$data->country}}</td>
	            			<td>{{$data->region}}</td>
	            			<td>{{$data->zip}}</td>
	            			<td>{{$data->created_at->format("M-d-Y")}}</td>
	            		</tr>
            		@endforeach
            	</tbody>
            </table>
        </div>
    </div>
</div>
@endsection

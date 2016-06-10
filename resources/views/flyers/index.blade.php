@extends('layout')


@section('content')

	<div id="app" class="col-md-6 col-md-offset-3">
		<h1>All street</h1>
		@foreach($flyers as $flyer)
			<div>
				<a href="/{{$flyer->zip}}/{{$flyer->street}}">{{$flyer->zip}}&nbsp;&nbsp;{{$flyer->street}}</a>
			</div>
		@endforeach
		{!! $flyers->links() !!}
	</div>
@stop
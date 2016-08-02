@extends('layouts.app')


@section(Config::get('chatter.yields.head'))
	@include('chatter::partials.css')
@stop

@section('content')

<div id="chatter">

	<div id="chatter_hero">

		<div id="chatter_hero_dimmer"></div>
		<h1>{{ Config::get('chatter.headline') }}</h1>
		<p>{{ Config::get('chatter.description') }}</p>
	</div>


	<div class="container">
		
	    <div class="row">

	    	<div class="col-md-3 left-column">
	    		@include('chatter::partials.sidebar')
	    	</div>
	        <div class="col-md-9 right-column">
	            <div class="panel panel-default">
	                <div class="panel-heading">Welcome to Chatter!</div>

	                <div class="panel-body">
	                    body contents
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

</div>

@endsection

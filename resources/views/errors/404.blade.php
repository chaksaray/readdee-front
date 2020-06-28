@extends('errors.layouts.error')

@section('meta-tag')
{{-- @include('partials._NO_INDEX') --}}
@endsection

@section('content')

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h3>Oops! Page not found</h3>
				<h1><span>4</span><span>0</span><span>4</span></h1>
			</div>
			<h2>we are sorry, but the page you requested was not found</h2>
			
			<form class="notfound-search" method="GET" action="/search" 
					accept-charset="UTF-8" 
					> 
				<div class="form-group">
					<input type="text" placeholder="Search..." name="q">
					<button type="submit">Search</button>
				</div>
			</form>
			<div class="btn-back">
				<a href="/" title="zilliongamer.com" alt="zilliongamer.com">
					<span class="arrow"></span>
					Go Back
				</a>
			</div>
		</div>
	</div>

@endsection
@extends('errors.layouts.error')

@section('meta-tag')
@include('partials._NO_INDEX')
@endsection

@section('content')
	<center>
		<div class="errors-503">
			<h2>COMING SOON</h2>
		
			<p class="info">Our website is under construction, follow us for update now!</p>
			
			<div class="duration">
				<ul>
					<li>
						<span class="duration__day days" id="day">00</span>
						<span class="duration__info">Days</span>
					</li>
					<li>:</li>
					<li>
						<span class="duration__hour hours" id="hour">00</span>
						<span class="duration__info">Hours</span>
					</li>
					<li>:</li>
					<li>
						<span class="duration__min minutes" id="min">00</span>
						<span class="duration__info">Minutes</span>
					</li>
					<li>:</li>
					<li>
						<span class="duration__sec seconds" id="sec">00</span>
						<span class="duration__info">Seconds</span>
					</li>
				</ul>
			</div>
			
		</div>
	</center>

@endsection
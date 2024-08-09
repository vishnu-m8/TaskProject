@extends('auth.layout.header')

@section('content')

<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-sm-6 col-lg-3 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-orange">Total Teacher</h4>
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-3" class="left-content"></div>
						<div class="right-content">
							@php
								$list_teacher 	= DB::table('teacher')
												->get();
							@endphp

							<h2 class="counter text-danger">{{ COUNT($list_teacher) }}</h2>
							{{-- <p class="text text-danger">Some text here</p> --}}
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-6 col-lg-3 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-success">Total Student</h4>
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-2" class="left-content margin-top-10"></div>
						<div class="right-content">
							@php
								$list_student	= DB::table('student')
												->get();
							@endphp

							<h2 class="counter text-success">{{ COUNT($list_student) }}</h2>
							{{-- <p class="text text-success">Some text here</p> --}}
						</div>
					</div>
				</div>
			</div>

			
		</div>

@endsection
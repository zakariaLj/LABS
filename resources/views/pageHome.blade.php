@extends('layout.app')
@section('content')

	@include('TemplatesHome.Carousel'),
	@include('TemplatesHome.ServiceFast'),
	@include('TemplatesHome.Presentation'),
	@include('TemplatesHome.Testimoniales'),
	@include('TemplatesHome.Service'),
	@include('TemplatesHome.Team'),
	@include('TemplatesHome.Ready'),
	@include('TemplatesHome.Contact'),

	<!-- Page Preloder -->
	{{-- <div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div> --}}

    
@endsection



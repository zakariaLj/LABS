
{{-- Section Carousel --}}
	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				@if ($logo != null)
				<img src="{{asset('storage/'. $logo->Logo_path)}}" alt="">			
			
				@else
				<img src="img/big-logo.png" alt="">
				
				@endif


				<p>{{!empty($carousel) ? $carousel->Description :   'Get your zak freebie template now!' }}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">

			@foreach ($carousels as $carousel)
				<div class="item  hero-item" data-bg="{{asset('storage/'. $carousel->Carousel_path)}}"></div>
			@endforeach


			{{-- <div class="item  hero-item" data-bg="img/01.jpg"></div>
			<div class="item  hero-item" data-bg="img/02.jpg"></div> --}}
		</div>
	</div>
	<!-- Intro Section -->


 {{-- Section Service --}}
	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>Get in <span>the Lab</span> and see the services</h2>
			</div>
			<div class="row">


	@if (!empty($services) != null)
		
	@for ($i = 0; $i < count($services); $i++)
			<!-- single service -->
			<div class="col-md-4 col-sm-6">
				<div class="service">
					<div class="icon">
						<i class="{{$services[count($services)-$i-1]->Icone}}"></i>
					</div>
					<div class="service-text">
						<h2>{{$services[count($services)-$i-1]->Titre}}</h2>
						<p>{{$services[count($services)-$i-1]->Description}}</p>
					</div>
				</div>
			</div>
			<!-- single service -->
	@endfor
	@endif			
		</div>
		<div>
			{{-- @if (!empty($services)   )
				{{$services->links()}}
			@endif --}}
			
		</div>
			<div class="text-center">
				<a href="" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
















	<!-- services section end -->

				{{-- <!-- single service -->
			<div class="col-md-4 col-sm-6">
				<div class="service">
					<div class="icon">
						<i class="{{$service->Icone}}"></i>
					</div>
					<div class="service-text">
						<h2>{{$service->Titre}}</h2>
						<p>{{$service->Description}}</p>
					</div>
				</div>
			</div>
			<!-- single service --> --}}
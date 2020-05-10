{{-- section des trois cartes --}}
	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@if (!empty($services)  != null)
							@for ($i = 0; $i < 3; $i++)
							<div class="col-md-4 col-sm-6">
								<div class="lab-card">
									<div class="icon">
										<i class="{{$services[count($services)-$i-1]->Icone}}"></i>
									</div>
										<h2>{{$services[count($services)-$i-1]->Titre}}</h2>
										<p>{{$services[count($services)-$i-1]->Description}}</p>
								</div>
							</div>
							@endfor
				
					
						
					@endif

				</div>
			</div>
		</div>
		<!-- card section end-->
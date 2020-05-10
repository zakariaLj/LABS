{{-- Section Testimonial --}}
	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						@if ($testimoniale1 != null)
							<h2>{{$testimoniale1->Titre}}</h2>
						@else
							<h2>What our clients say</h2>
						@endif
						
					</div>
					<!-- single testimonial -->
					
					
					<div class="owl-carousel" id="testimonial-slide">
					@foreach ($testimoniales as $testimoniale)
							<div class="testimonial">
								<span>‘​‌‘​‌</span>
								<p>{{$testimoniale->commentaire}}</p>
								<div class="client-info">
									<div class="avatar">
										<img src="{{asset('storage/'.$testimoniale->img_path)}}" alt="">
									</div>
									<div class="client-name">
										<h2>{{$testimoniale->nom}}</h2>
										<p>{{$testimoniale->fonction}}</p>
									</div>
								</div>
								
							</div>
							@endforeach
						</div>
						<!-- single testimonial -->
						{{-- <div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/02.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/01.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/02.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/01.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/02.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div> --}}
					
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->
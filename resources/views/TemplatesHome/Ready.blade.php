
{{-- Section Ready --}}
	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
						@if (!empty($ready) != null)
							<h2>{{$ready->Titre}}</h2>
					      	<p>{{$ready->Soustitre}}</p>
						@else
							<h2>titre</h2>
					      	<p>texte</p>							<a href="/contact" class="site-btn btn-2">dede</a>
						@endif

				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						@if (!empty($ready) != null)
							<a href="/contact" class="site-btn btn-2">{{$ready->Nombtn}}</a>
						@else
							<a href="/contact" class="site-btn btn-2">dede</a>
						@endif
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->
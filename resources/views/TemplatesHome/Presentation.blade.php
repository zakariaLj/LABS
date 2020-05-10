		{{-- Section Presentation --}}

		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					@if (!empty($presentation) != null)
					<h2>Get in <span>{{$presentation->TextVert}}</span> and discover the world</h2>
						
					@else
						<h2>Get in <span>text a mettre en vert</span> and discover the world</h2>
					@endif
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.</p>
					</div>
					<div class="col-md-6">
						<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.</p>
					</div>
				</div>
				<div class="text-center mt60">
					@if (!empty($presentation) != null)
						<a href="/contact" class="site-btn">{{$presentation->NomBtn}}</a>
						
					@else
						<a href="/contact" class="site-btn">Nom btn</a>
					@endif
					
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="img/video.jpg" alt="">
							@if ($video != null)
								<a href="{{$video->Video}}" class="video-popup">
							@else
								<a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
							@endif
							
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->
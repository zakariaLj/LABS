	{{-- Section Team --}}

	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				@if (!empty($team) != null)
					<h2>{{$titre->Titre1}}<span>{{$titre->Vert}}</span> {{$titre->Titre2}}</h2>
						
				@else
					<h2>salme<span>texte vert</span>suite</h2>
				@endif
				
			</div>
			<div class="row">


			<!-- single member -->
			@if (!empty($teams))
			@foreach ($teams as $team)
			   @if ($loop->first)
				   
				   <div class="col-sm-4">
					   <div class="member">
						   <img src="{{asset('storage/'.$team->Team_path)}}" alt="">
						   <h2>{{$team->Nom}}</h2>
						   <h3>{{$team->Function}}</h3>
					   </div>
				   </div>
			   @endif

			   				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="{{asset('storage/'.$teamer->Teamer_path)}}" alt="">
						<h2>{{$teamer->Ceo}}</h2>
						<h3>{{$teamer->FunctionCeo}}</h3>
					</div>
				</div>
				<!-- single member -->
			 @foreach ($teams as $team)
			 @if ($loop->last)
				 
				<div class="col-sm-4">
					<div class="member">
						<img src="{{asset('storage/'.$team->Team_path)}}" alt="">
						<h2>{{$team->Nom}}</h2>
						<h3>{{$team->Function}}</h3>
					</div>
				</div>
			 @endif
					
				@endforeach 
				   
			   @endforeach 
			@else
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/1.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Project Manager</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/2.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Junior developer</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/3.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Digital designer</h3>
					</div>
				</div>		
								
			@endif
				

				

				
			</div>
		</div>
	</div>
	<!-- Team Section end-->
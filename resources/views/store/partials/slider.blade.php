<div id="slider" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
	<li data-target="#slider" data-slide-to="0" class="active"></li>
	<li data-target="#slider" data-slide-to="1"></li>
	<li data-target="#slider" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="{{ url('/img/tarjetasGrande.jpg') }}" alt="slide1">
			<div class="carousel-caption">
		    	Tarjetas de Visita
			</div>
		</div>
		<div class="item">
	  		<img src="{{ url('/img/flyerGrande.jpg') }}" alt="Flyers">
	  		<div class="carousel-caption">
	    		Flyers
	  		</div>
		</div>
		<div class="item">
	  		<img src="{{ url('/img/tripticoGrande.jpg') }}" alt="Trípticos">
	  		<div class="carousel-caption">
	    		Trípticos
	  		</div>
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Anterior</span>
	</a>
	<a class="right carousel-control" href="#slider" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Siguiente</span>
	</a>
</div><hr>
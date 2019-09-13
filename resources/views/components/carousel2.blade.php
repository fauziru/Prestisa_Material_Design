<div id="carousel-example-2z" class="carousel slide carousel-fade" data-ride="carousel" style="max-height: 30vh;">
		  <!--Indicators-->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
		    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
		  </ol>
		  <!--/.Indicators-->
		  <!--Slides-->
		  <div class="carousel-inner" role="listbox">
		    <!--First slide-->
		    <div class="carousel-item active mh">
		    <a href="#"><img class="d-block w-100 rd" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg"
		        alt="First slide">
		    </div>
		    <!--/First slide-->
		    <!--Second slide-->
		    <div class="carousel-item mh">
		    <a href="#"><img class="d-block w-100 rd" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
		        alt="Second slide">
		    </div>
		    <!--/Second slide-->
		    <!--Third slide-->
		    <div class="carousel-item mh">
		    <a href="#"><img class="d-block w-100 rd" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
		        alt="Third slide">
		    </div>
		    <!--/Third slide-->
		  </div>
		  <!--/.Slides-->
		  <!--Controls-->
		  <a class="carousel-control-prev" href="#carousel-example-2z" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carousel-example-2z" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		  <!--/.Controls-->
		</div>
		@push('cssscope')
		<style type="text/css">
			.mh{
				max-height: 30vh;
			}
			.rd{
				border-radius: 6px;
			}
			.carousel{
				border-radius: 6px;	
			}
		</style>
		@endpush
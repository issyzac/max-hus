@extends('master.layout')
@section('content')
</header>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/slide-one.jpg" alt=" ">
      <div class="carousel-caption">
        <p>one</p>
      </div>
    </div>
    <div class="item">
      <img src="img/slide-two.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="img/slide-three.jpg" alt="">
      <div class="carousel-caption">
        <p>three</p>
      </div>
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>

<div class="container">

	<section>

		<div class="row">
			<div class="span12">
				<h2 class="text-center">We are Offering the Best Real Estate Deals</h2>
					<p class="text-center lead">
                      we are the best in selling houses,we provide the best services....Look at our Latest
                      listed properties and check out the facilities on them, We have already sold more than
                      5,000 Homes and we are still going at very good pace. We would love you to look into
                      these properties and we hope that you
                      will find something match-able to your needs.
				 </p>
					
		    </div>
		</div>

	<hr/>

		<div class="row">

		@foreach($object as $Mobject)


            <div class="col-sm-6 col-md-4" >

                <div class="thumbnail" style="padding-bottom: 20px;" id="center-image">

                <H4 class="btn btn-default" disabled="disabled" style="margin-top: 5px"> <i class="glyphicon glyphicon-tag"> </i> @if($Mobject->misc_interior == "1") <span style="color: green"> Sale </span> @else <span style="color: orange"> Rent </span> @endif </H4>

                   <img src="{{ url(''.$Mobject->imagesUrl) }}" alt="/assets/images/0yWbzrf1SViY_hgames.jpg" id="center-image" style="margin-top: 10px">

                    <div class="caption">
                        <h4>{{ $Mobject->location }}</h4>
                        <p>
                            <a href="{{ url("object/viewdetails/{$Mobject->id}") }}" @if($Mobject->misc_interior == "1") class="btn btn-xs btn-success pull-right" @else class="btn btn-xs btn-warning pull-right" @endif style="margin-top: 0px"> More Details </a>
                    </div>
                </div><br><br>

            </div>

        @endforeach



		</div>

	<hr/>

	</section>

	</div>

@stop
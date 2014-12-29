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
        <p>two</p>
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

		<div class="row" style="margin-top: 50px">

  			<div class="col-sm-6 col-md-4">

                <div class="thumbnail">

                <H4 class="btn btn-default" disabled="disabled" style="margin-top: 0px"> <i class="glyphicon glyphicon-tag"> </i>  Sale </H4>

                    <img src="img/one.jpg" alt=" " style="margin-top: 10px">

                    <div class="caption">
                        <h4>NO 1A,Juwata Area C Dodoma</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                            Donec id elit non mi porta gravida at eget metus.
                            <a href="./sale_prop_detail1" class="btn btn-xs btn-success pull-right" style="margin-top: 10px"> More Details </a> </p>
                    </div>
                </div>

  			</div>
  			
  			<div class="col-sm-6 col-md-4">
    			<div class="thumbnail">

    			<H4 class="btn btn-default" disabled="disabled" style="margin-top: 0px"> <i class="glyphicon glyphicon-tag"> </i>  Sale </H4>

      				<img src="img/2.jpg" alt=" " style="margin-top: 10px">
      				<div class="caption">
        				<h4>NO 1A,Juwata Area C Dodoma</h4>
        				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
        	 				Donec id elit non mi porta gravida at eget metus. 
        					<a href="./sale_prop_detail1" class="btn btn-xs btn-success pull-right" style="margin-top: 10px"> More Details </a> </p>
      				</div>
    			</div>
  			</div>

  			<div class="col-sm-6 col-md-4">
    			<div class="thumbnail">

    			<H4 class="btn btn-default" disabled="disabled" style="margin-top: 0px"> <i class="glyphicon glyphicon-tag"> </i>  Rent </H4>

      				<img src="img/3.jpg" alt=" " style="margin-top: 10px">
      				<div class="caption">
        				<h4>NO 1B,Juwata Area C Dodoma</h4>

        				<p style="color: gray" >
        				    Cras justo odio, dapibus ac facilisis in, egestas eget quam.
        	 				Donec id elit non mi porta gravida at eget metus. 
        					<a href="./rent_prop_detail1" class="btn btn-xs btn-success pull-right" style="margin-top: 10px"> More Details </a>
        			    </p>

      				</div>
    			</div>
  			</div>

  			<div class="col-sm-6 col-md-4">
    			<div class="thumbnail">

    			<H4 class="btn btn-default" disabled="disabled" style="margin-top: 0px"> <i class="glyphicon glyphicon-tag"> </i>  Sale </H4>

      				<img src="img/4.jpg" alt=" " style="margin-top: 10px">
      				<div class="caption">
        				<h4>NO 2B,Juwata Area C Dodoma</h4>
        				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
        	 				Donec id elit non mi porta gravida at eget metus. 
        					<a href="./rent_prop_detail1" class="btn btn-xs btn-success pull-right" style="margin-top: 10px"> More Details </a> </p>
      				</div>
    			</div>
  			</div>

  			<div class="col-sm-6 col-md-4">
    			<div class="thumbnail">

    			<H4 class="btn btn-default" disabled="disabled" style="margin-top: 0px"> <i class="glyphicon glyphicon-tag"> </i>  Rent </H4>

      				<img src="img/5.jpg" alt=" " style="margin-top: 10px">
      				<div class="caption">
        				<h4>NO 3B,Juwata Area C Dodoma</h4>
        				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
        	 				Donec id elit non mi porta gravida at eget metus. 
        					<a href="{{ url('rental') }}" class="btn btn-xs btn-success pull-right" style="margin-top: 10px"> More Details </a>
        				</p>
      				</div>
    			</div>
  			</div>

  			<div class="col-sm-6 col-md-4">
    			<div class="thumbnail">

    			<H4 class="btn btn-default" disabled="disabled" style="margin-top: 0px"> <i class="glyphicon glyphicon-tag"> </i>  Sale </H4>

      				<img src="img/6.jpg" alt=" " style="margin-top: 10px">
      				<div class="caption">
        				<h4>NO 4B,Juwata Area C Dodoma</h4>
        				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
        	 				Donec id elit non mi porta gravida at eget metus.

        	 				<a href="./sale_prop_detail1" class="btn btn-xs btn-success pull-right" style="margin-top: 10px"> More Details </a>
        				</p>
      				</div>
    			</div>
  			</div>

		</div>

	<hr/>

	</section>

	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    {{ HTML::script('js/bootstrap.min.js') }}	

@stop
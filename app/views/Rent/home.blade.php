@extends('master.layout')

<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 12/26/14
 * Time: 6:31 PM
 */ ?>

@section('content')
<div class="container" style="margin-top: 0px">
	<div class="page-header">
  		<h3> Rental Villa, <small> Property ID: <?php echo $mobj->id; ?> </small> </h3>
	</div>
	<div class="row">
    <div class="col-md-8 well" style="background-color: #ffffff;" role="main">
      <div id="carousel1" class="carousel"  style=" align-content: center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel1"  class="active"></li>
        </ol>

        <!-- Wrapper for slides -->
          <div class="item active" style="background-repeat: none; background-size: cover">
            <img src='{{ asset("{$mobj->imagesUrl}") }}' alt=" ">
          </div>

        <!-- Controls -->
        {{--<a class="hidden left carousel-control" href="#carousel1" role="button" data-slide="prev">--}}
          {{--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
          {{--<span class="sr-only">Previous</span>--}}
        {{--</a>--}}

        {{--<a class=" hidden right carousel-control" href="#carousel1" role="button" data-slide="next">--}}
          {{--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
          {{--<span class="sr-only">Next</span>--}}
        {{--</a>--}}

      </div>
    </div>

    <div class="col-md-4 pull-right"><h3>Property Details</h3><hr/>
         <p class="hidden">
            Lorem ipsum dolor sit amet, consectetuer adipiscing
            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
            Duis autem vel eum iriure dolor
            in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
            et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi
            Nam liber tempor cum soluta nobis eleifend.
        </p>

        <div class="col-md-12 ">
        <p>Features</p>
          <ul class="list-unstyled col-md-offset-4">
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>2 stores</li>
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Fire Place</li>
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Lawn</li>
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>3 Bed Rooms</li>
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Lawn</li>
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Central Heating</li>
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Home Theater</li>
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Laundry Room</li>

          </ul>
        </div>
    </div>

     <div class="col-md-12 well" style="margin-top: 30px;">

         <div class="col-md-6">
              <h5> <b>Additional Details</b> </h5>
         </div>
         <br><br>
        <div class="col-lg-12">
          <div class="col-md-4">
            <p> <small>  <b>AC:</b>Ceiling Fan(s), Central  </small> </p>
          </div>
          <div class="col-md-4">
            <p> <small> <b>ACRES:</b> Ceiling Fan(s), Central </small></p>
          </div>
          <div class="col-md-4">
            <p> <small> <b>ACRES SOURCE:</b> Assessor </small></p>

          </div>
          <div class="col-md-4">
            <p> <small> <b>AP #:</b> 374-493-13 </small> </p>

          </div>
          <div class="col-md-4">
            <p> <small> <b>APPLIANCECS:</b>
            Dishwasher, Freestanding Gas Range, Garbage Disposal, Microwave </small> </p>
          </div>
          <div class="col-md-4">
            <p> <small> <b>BATHROOM DESCRIPTION:</b> Stall Shower </small> </p>
          </div>
          <div class="col-md-4">
            <p> <small> <b>BEDROOM FEATURES:</b> Main Floor Master Bedroom </small> </p>
          </div>
          <div class="col-md-4">
            <p> <small><b>CROSS STREETS:</b>  Lincoln and Anchor </small> </p>

          </div>
          <div class="col-md-4">
            <p> <small> <b>DINING AREA:</b> Family Kitchen </small> </p>

          </div>

          <div class="col-md-4">
            <p> <small> <b>ENCLOSED YARD:</b>  Wood </small> </p>

          </div>
          <div class="col-md-4">
            <p> <small> <b>ENTRY LOCATION:</b> Ground Level - no steps </small> </p>

          </div>
          <div class="col-md-4">
            <p> <small> <b>EXTERIOR CONSTRUCTION:</b>  Stucco </small> </p>

          </div>
          <div class="col-md-4">
            <p> <small> <b>FLOORS:</b>Ceramic Tile, Wall-to-Wall Carpet </small> </p>

          </div>
          <div class="col-md-4">
            <p> <small> <b>HEAT:</b> Forced Air </small> </p>

          </div>
          <div class="col-md-4">
            <p> <small> <b>LOT DESCRIPTION:</b> Curbs-Walks </small> </p>

          </div>
          <div class="col-md-4">
            <p> <small> <b>LOT DIMENSIONS:</b>  70x100 </small> </p>

          </div>
          <div class="col-md-4">
            <p> <small> <b>LOT SIZE SOURCE:</b>  Assessor </small>  </p>

          </div>
          <div class="col-md-4">
            <p> <small> <b>MELLO ROOS:</b> No </small> </p>

          </div>
          <div class="col-md-4">
            <p> <small> <b>MISC INTERIOR:</b>  Recessed Lighting </small> </p>

          </div>
          <div class="col-md-4">
            <p> <small> <b>PARKING TYPE:</b> Direct Garage Access, Driveway, Garage Door Opener </small> </p>
          </div>

          <div class="col-md-4">
          <p> <small> <b>DISABILITY ACCESS:</b> 36 inch or more wide halls, Doors - Swing in,
            Entry Slope less than 1 foot, Grab Bars in Bathroom(s),
            Wheelchair Accessible, Wheelchair Adaptable, Wheelchair Modifications </small> </p>

        </div>

          </div>
    </div>

  </div>
 <hr/>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    {{ HTML::script('js/bootstrap.min.js') }}
    
@stop
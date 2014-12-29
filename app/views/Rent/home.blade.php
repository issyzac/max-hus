@extends('master.layout')

<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 12/26/14
 * Time: 6:31 PM
 */ ?>

@section('content')
<img src="img/forent.jpg" class="img-responsive" alt=" ">
<div class="container">

	<div class="page-header">
  		<h1>Rental Villa, Property ID: RH1001</h1>
	</div>

	<div class="row">

    <div class="col-md-8" role="main">
      <div id="carousel1" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel1" data-slide-to="0" class="active"></li>
          <li data-target="#carousel1" data-slide-to="1"></li>
          <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/det1.jpg" alt=" ">
            <div class="carousel-caption">
              <p>Kitchen</p>
            </div>
          </div>
          <div class="item">
            <img src="img/det2.jpg" alt="">
            <div class="carousel-caption">
              <p>Reading Room</p>
            </div>
          </div>
          <div class="item">
            <img src="img/det3.jpg" alt="">
            <div class="carousel-caption">
              <p>Sitting Room</p>
            </div>
          </div> 
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

 <div class="col-lg-12">

      <div class="col-lg-12 pull-left">

         <h3>Property Details</h3>

        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing
            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
            Duis autem vel eum iriure dolor
            in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
            et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi
            Nam liber tempor cum soluta nobis eleifend.
        </p>
      </div>
      <br>
      <br>
     <div class="col-md-6">
          <h4>Additional Details</h4>
          <hr/>
     </div>
    <div class="col-lg-12">

      <div class="col-md-6">
        <p><b>AC:</b> Ceiling Fan(s), Central </p>
      </div>
      <div class="col-md-6">
        <p><b>ACRES:</b> Ceiling Fan(s), Central </p>
      </div> 
      <div class="col-md-6">
        <p><b>ACRES SOURCE:</b>Assessor</p>

      </div>
      <div class="col-md-6">
        <p><b>AP #:</b> 374-493-13 </p>

      </div>
      <div class="col-md-6">
        <p><b>APPLIANCECS:</b>
        Dishwasher, Freestanding Gas Range, Garbage Disposal, Microwave</p>
      </div>
      <div class="col-md-6">
        <p><b>BATHROOM DESCRIPTION:</b> Stall Shower </p>
      </div>
      <div class="col-md-6">
        <p><b>BEDROOM FEATURES:</b> Main Floor Master Bedroom </p>
      </div>
      <div class="col-md-6">
        <p><b>CROSS STREETS:</b>  Lincoln and Anchor</p>

      </div>
      <div class="col-md-6">
        <p><b>DINING AREA:</b> Family Kitchen </p>

      </div>
      <div class="col-md-6">
        <p><b>DISABILITY ACCESS:</b> 36 inch or more wide halls, Doors - Swing in, 
          Entry Slope less than 1 foot, Grab Bars in Bathroom(s), 
          Wheelchair Accessible, Wheelchair Adaptable, Wheelchair Modifications </p>

      </div>
      <div class="col-md-6">
        <p><b>ENCLOSED YARD:</b>  Wood </p>

      </div>
      <div class="col-md-6">
        <p><b>ENTRY LOCATION:</b> Ground Level - no steps</p>

      </div>
      <div class="col-md-6">
        <p><b>EXTERIOR CONSTRUCTION:</b>  Stucco</p>

      </div>
      <div class="col-md-6">
        <p><b>FLOORS:</b>Ceramic Tile, Wall-to-Wall Carpet</p>

      </div>
      <div class="col-md-6">
        <p><b>HEAT:</b> Forced Air </p>

      </div>
      <div class="col-md-6">
        <p><b>LOT DESCRIPTION:</b> Curbs-Walks</p>

      </div>
      <div class="col-md-6">
        <p><b>LOT DIMENSIONS:</b>  70x100 </p>

      </div>
      <div class="col-md-6">
        <p><b>LOT SIZE SOURCE:</b>  Assessor </p>

      </div>
      <div class="col-md-6">
        <p><b>MELLO ROOS:</b> No </p>

      </div>
      <div class="col-md-6">
        <p><b>MISC INTERIOR:</b>  Recessed Lighting </p>

      </div>
      <div class="col-md-6">
        <p><b>PARKING TYPE:</b> Direct Garage Access, Driveway, Garage Door Opener</p>

      </div>
      <div class="col-md-6">
        <p>Features</p>
          <ul class="list-inline">
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>2 stories</li>
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Fire Place</li>
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Lawn</li>
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Central Heating</li>
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Home Theater</li>
            <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Laundry Room</li>

          </ul>
        <hr/>
        </div>
      </div>
       </div>
    </div>
    <div class="col-md-4 pull-right"><h3>Featured Properties</h3><hr/>
      <div class="thumbnail">
              <img src="img/one.jpg" alt=" ">
              <div class="caption">
                <h3>NO 2A,Juwata Area C Dodoma</h3>
                <p>Cras justo odio, dapibus ac facilisis in,egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. 
                  <a href="#" > More Details >> </a> </p>
                <p><button type="button" class="btn btn-danger" disabled="disabled">For Rent</button></p>
              </div>
      </div>
      <div class="thumbnail">
              <img src="img/2.jpg" alt=" ">
              <div class="caption">
                <h3>NO 1A,Juwata Area C Dodoma</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. 
                  <a href="#" > More Details >> </a> </p>
                <p><p><button type="button" class="btn btn-danger" disabled="disabled">For Sale</button></p></p>
              </div>
          </div>
      <div class="thumbnail">
              <img src="img/3.jpg" alt=" ">
              <div class="caption">
                <h3>NO 1B,Juwata Area C Dodoma</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. 
                  <a href="#" > More Details >> </a> </p>
                <p><p><button type="button" class="btn btn-danger" disabled="disabled">For Rent</button></p></p>
              </div>
          </div>
    </div>
  </div>
</div>
<hr/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    {{ HTML::script('js/bootstrap.min.js') }}
    
@stop
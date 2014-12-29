@extends('master.layout')
@section('content')
<img src="img/forent.jpg" class="img-responsive" alt=" ">
<div class="container">
	<div class="page-header">
  		<h1>Houses available for rent. <small><i>live the dream</i></small></h1>
	</div>
	<div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
              <img src="img/one.jpg" alt=" ">
              <div class="caption">
                <h3>NO 2A,Juwata Area C Dodoma</h3>
                <p>Cras justo odio, dapibus ac facilisis in,egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. 
                  <a href="./rent_prop_detail1" > More Details >> </a> </p>
                <p><button type="button" class="btn btn-danger" disabled="disabled">For Rent</button></p>
              </div>
          </div>
        </div>
        
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
              <img src="img/2.jpg" alt=" ">
              <div class="caption">
                <h3>NO 1A,Juwata Area C Dodoma</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. 
                  <a href="./rent_prop_detail2" > More Details >> </a> </p>
                <p><p><button type="button" class="btn btn-danger" disabled="disabled">For Rent</button></p></p>
              </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
              <img src="img/3.jpg" alt=" ">
              <div class="caption">
                <h3>NO 1B,Juwata Area C Dodoma</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. 
                  <a href="./rent_prop_detail3" > More Details >> </a> </p>
                <p><p><button type="button" class="btn btn-danger" disabled="disabled">For Rent</button></p></p>
              </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
              <img src="img/4.jpg" alt=" ">
              <div class="caption">
                <h3>NO 2B,Juwata Area C Dodoma</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. 
                  <a href="./rent_prop_detail4" > More Details >> </a> </p>
                <p><p><button type="button" class="btn btn-danger" disabled="disabled">For Rent</button></p></p>
              </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
              <img src="img/5.jpg" alt=" ">
              <div class="caption">
                <h3>NO 3B,Juwata Area C Dodoma</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. 
                  <a href="./rent_prop_detail5" > More Details >> </a> </p>
                <p><p><button type="button" class="btn btn-danger" disabled="disabled">For Rent</button></p></p>
              </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
              <img src="img/6.jpg" alt=" ">
              <div class="caption">
                <h3>NO 4B,Juwata Area C Dodoma</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus.<a href="./rent_prop_detail6" > More Details >> </a> 
                </p>
                <p><p><button type="button" class="btn btn-danger" disabled="disabled">For Rent</button></p></a></p>
              </div>
          </div>
        </div>
    </div>

</div>
<hr/>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    {{ HTML::script('js/bootstrap.min.js') }}
@stop
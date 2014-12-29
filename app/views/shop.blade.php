
@extends('master.layout')
@section('content')
<img src="img/forent.jpg" class="img-responsive" alt=" ">
<div class="container">
  <div class="page-header">
      <h1>Shops</h1>
  </div>
	<div class="row">
    <div class="col-md-8" role="main">
      <div class="panel panel-default">
        <div class="panel-body">

            <div class="col-md-12">
                  <div class="thumbnail">
                      <img src="img/4.jpg" alt=" " class="pull-left">
                      <div class="caption">
                        <h3 class="text-center">NO 2A,Juwata Area C Dodoma</h3>
                        <p class="text-center">Cras justo odio, dapibus ac facilisis in,egestas eget quam.
                          Donec id elit non mi porta gravida at eget metus. 
                          <a href="./rent_prop_detail3" > More Details >> </a> </p>
                        <p class="text-center"><button type="button" class="btn btn-danger" disabled="disabled">For Sale</button></p>
                      </div>
                  </div>

                
               
                  <div class="thumbnail">
                      <img src="img/2.jpg" alt=" " class="pull-left">
                      <div class="caption">
                        <h3 class="text-center">NO 1A,Juwata Area C Dodoma</h3>
                        <p class="text-center">Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                          Donec id elit non mi porta gravida at eget metus. 
                          <a href="./rent_prop_detail4" > More Details >> </a> </p>
                        <p class="text-center"><button type="button" class="btn btn-danger" disabled="disabled">For Sale</button></p>
                      </div>
                  </div>
                
                
                  
            </div>
          </div>  
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-danger">
        <div class="panel-heading"><h3>Featured Properties<h3></div>
          <div class="panel-body">
            <div class="thumbnail">
              <img src="img/4.jpg" alt=" ">
              <div class="caption">
                <h3>NO 2A,Juwata Area C Dodoma</h3>
                <p>Cras justo odio, dapibus ac facilisis in,egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. 
                  <a href="./sale_prop_detail2" > More Details >> </a> </p>
                <p><button type="button" class="btn btn-danger" disabled="disabled">For Rent</button></p>
              </div>
      </div>
      <div class="thumbnail">
              <img src="img/5.jpg" alt=" ">
              <div class="caption">
                <h3>NO 1A,Juwata Area C Dodoma</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. 
                  <a href="./sale_prop_detail3" > More Details >> </a> </p>
                <p><p><button type="button" class="btn btn-danger" disabled="disabled">For Sale</button></p></p>
              </div>
          </div>
      </div>      

    </div>

	</div>
</div>
<hr/>
</div>
@stop
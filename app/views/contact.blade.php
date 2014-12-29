@extends('master.layout')
@section('content')
<img src="img/forent.jpg" class="img-responsive" alt=" ">
<hr/>
<div class="container">
	<div class="page-header">
  		<h1>Max-Hus Sverige</h1>
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-4">
			<address>
				
				<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>1005 Gravenstein HWY North,<br>
				  Sebastopol, CA 95472<br>
				
			</address>
		</div>
		<div class="col-sm-6 col-md-4">
			<address>
				<span class="glyphicon glyphicon-phone-alt" aria-hidden="true">  Phone: 1-800-555-1234</span><br>
				<span class="glyphicon glyphicon-phone " aria-hidden="true">  Mobile: 123-456-7890</span><br>
				<span class="glyphicon glyphicon-envelope " aria-hidden="true">  Email: <a href="mailto:#">flast@oreilly.com</a></span>
				
			</address>
		</div>
	</div>
	
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                            	<label for="fname"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Full Name</label>
                                <input id="fname" name="name" type="text" placeholder="John Doe" class="form-control">
                            </div>
                        </div>
                  

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                            	<label for="email"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Email Adress</label>
                                <input id="email" name="email" type="text" placeholder="johndoe@maxhus.com" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                            	<label for="phone"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>  Phone</label>
                                <input id="phone" name="phone" type="text" placeholder="07662225424" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                            	<label for="message"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Message</label>
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    
                        <div class="well">
                            <div class="Flexible-container">
                        	<iframe width="520" height="475" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.tz/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Oslo,+Norway&amp;aq=0&amp;oq=oslo&amp;sll=-6.769932,39.267888&amp;sspn=0.417296,0.630341&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Oslo,+Norway&amp;z=11&amp;ll=59.913869,10.752245&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.tz/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Oslo,+Norway&amp;aq=0&amp;oq=oslo&amp;sll=-6.769932,39.267888&amp;sspn=0.417296,0.630341&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Oslo,+Norway&amp;z=11&amp;ll=59.913869,10.752245" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                            <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


	
</div>
<hr/>


@stop
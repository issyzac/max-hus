<!doctype html>
<html lang="en">
<head>
	<title> Max-Hus </title>
	<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Referencing Bootstrap CSS that is hosted locally -->
    	{{ HTML::style('css/bootstrap.min.css') }}
    	
   
    	<link rel="stylesheet" href="" >
      
</head>
<header>

	<nav class="navbar navbar-inverse" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/" class="navbar-brand">MAX HUS SVERIGE</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<ul class="nav navbar-nav navbar-right">

			    <li class="active"><a href="{{ url('etherpad') }}">Etherpad</a></li>

				<li class="active"><a href="{{ url('home') }}">Home</a></li>

				<li><a href="{{ url('forent') }}">For Rent</a></li>

				<li><a href="{{ url('forsale') }}">For Sale</a></li>

				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Types<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="./single-family">Single Family</a></li>
                        <li><a href="./apartment-building">Apartment Building</a></li>
                        <li><a href="./apartment">Apartment</a></li>
                        <li><a href="./office">Office</a></li>
                        <li><a href="./shop">Shops</a></li>
                        <li><a href="./villa">Villa</a></li>
                      </ul>
                </li>

				<li><a href="./contactus">Contact</a></li>

				<li><a href="#" data-toggle="modal" data-target="#myModal">Log in</a></li>

				<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  					<div class="modal-dialog">
    					<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
        						<span class="sr-only">Close</span>
        					</button>
        						<h4 class="modal-title text-center" id="myModalLabel">Log In</h4>
      					</div>

      			    <div class="modal-body">
        					<form id="registrationForm" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="username" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email address</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="email" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" name="password" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                            <button type="button" class="btn btn-primary">Log In</button>
                        </div>
                    </div>
                    <p class="text-center">Dont you have an account? <a href=" "> Sign Up >> </a> </p>
                </form>	
      			    </div>
      	        <div class="modal-footer">
        			    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			    
      			    </div>
    			    </div>
  			    </div>
          </div>

  			               		
			</ul>
		</div>
	
	</nav>

</header>


@yield('content')


<div class="container-fluid" style="background: #1A1A1A"  >
<div class="container" style="margin-top: 50px">

    <div class="row">

    <div class="col-md-3">
                <div class="panel-heading">
                    <h4 style="color: #ffffff"><b>About Us</b></h4>
                </div>
                <div class="panel-body">
                    <p style="color: #ffffff">
                        we are the best in selling houses,we provide the best services....Look at our Latest
                        listed properties and check out the facilities on them, We have already sold more than
                        5,000 Homes and we are still going at very good pace. We would love you to look into
                    </p>
                </div>
            </div>

        <div class="col-md-3">
            <div class="panel-heading">
                <h4 style="color: #ffffff"><b>About Us</b></h4>
            </div>
            <div class="panel-body">
                <p style="color: #ffffff">
                    we are the best in selling houses,we provide the best services....Look at our Latest
                    listed properties and check out the facilities on them, We have already sold more than
                    5,000 Homes and we are still going at very good pace. We would love you to look into
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-heading">
                <h4 style="color: #ffffff"><b>Recent Posts</b></h4>
            </div>
            <div class="panel-body">
                <ul class="list-unstyled" style="color: #ffffff" >
                    <li><span class="glyphicon glyphicon-play" aria-hidden="true"></span>   House No.3B, Juwata Area C </li>
                    <li><span class="glyphicon glyphicon-play" aria-hidden="true"></span>   House No.2B, Juwata Area A </li>
                    <li><span class="glyphicon glyphicon-play" aria-hidden="true"></span>   House No.4B, Juwata Area B </li>
                    <li><span class="glyphicon glyphicon-play" aria-hidden="true"></span>   House No.13B, Juwata Area E </li>
                    <li><span class="glyphicon glyphicon-play" aria-hidden="true"></span>   House No.41B, Juwata Area D </li>

                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-heading">
                <h4 style="color: #ffffff"><b>Contact Us</b></h4>
            </div>
            <div class="panel-body">
                    <address style="color: #ffffff">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>1005 Gravenstein HWY North,<br>
                        Sebastopol, CA 95472<br>
                        <span class="glyphicon glyphicon-phone-alt" aria-hidden="true">  Phone: 1-800-555-1234</span><br>
                        <span class="glyphicon glyphicon-phone " aria-hidden="true">  Mobile: 123-456-7890</span><br>
                        <span class="glyphicon glyphicon-envelope " aria-hidden="true">  Email: <a href="mailto:#">flast@oreilly.com</a></span>

                    </address>
            </div>
        </div>
    </div>
    <hr/>        
        <p class="text-center" style="color: #ffffff">Copyright &copy; 2014 Max-Hus Sverige </p>
</div>
</div>
    
    <!-- Referencing Bootstrap JS that is hosted locally -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	
    {{ HTML::script('js/bootstrap.min.js') }}
    <script>
    $('.dropdown-toggle').dropdown()
    </script>

   
</body>
</html>

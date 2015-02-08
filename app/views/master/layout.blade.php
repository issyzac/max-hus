<!doctype html>
<html lang="en">
<head>
	<title> Max-Hus </title>
	<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Referencing Bootstrap CSS that is hosted locally -->

    	 <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    	 <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
         <link href="{{ asset('css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" />
         <link href="{{ asset('css/style.css') }}" media="all" rel="stylesheet" type="text/css" />


      
</head>
<header>

	<nav class="navbar navbar-inverse" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a href="/" class="navbar-brand">PICCOLOHUS</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<ul class="nav navbar-nav navbar-right">

			    {{--<li><a href="{{ url('etherpad') }}">--}}
			    {{--<i class="glyphicon glyphicon-edit"></i>--}}
			    {{--Etherpad</a></li>--}}

				<li class="active"><a href="{{ url('home') }}">
				<i class="glyphicon glyphicon-home"></i>
				Home</a></li>

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

				<li><a href="{{ url('contact') }}"><i class="glyphicon glyphicon-phone"></i>Contact</a></li>

                 @if((Auth::guest()))
                  <li><a href="#" data-toggle="modal" data-target="#myModal">
                  <i class="glyphicon glyphicon-log-in"></i>Login</a></li>
                 @else
                  <li><a  href="{{ url('logout') }}"> <i class="glyphicon glyphicon-log-out"></i>
                  Logout {{ Auth::user() -> username }}</a></li>
                 @endif


				<!-- Modal -->
				<div style="margin-top: 40px" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  					<div class="modal-dialog">
    					<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
        						<span class="sr-only">Close</span>
        					</button>
        						<h4 class="modal-title text-center form-header" id="myModalLabel">Login</h4>
      					</div>

      			    <div class="modal-body">

      			           {{--This is the Login form div--}}

                            <div class="Login modalForm">

                                <form action="{{URL::to('login')}}" id="loginForm" method="post" class="form-horizontal">

                                <div class="alert alert-danger avatar_alert" role="alert" style="display: none">
                                       <ul></ul>
                                </div>
                                <ul></ul>
                                  {{--{{ Hash::make('1234'); }}--}}
                                    <div class="form-group">
                                        <label for="avatar_src" class="col-sm-3 control-label">Username</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" required="required" name="username" id="username"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-5">
                                            <input type="password" class="form-control" required="required" name="password" id="password"/>
                                        </div>
                                    </div>

                                    <div class="form-group modal-footer">
                                         <div class="col-sm-9 col-sm-offset-3">
                                             <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                                             <p class="pull-left text-center">Already registered? <a href="#loginForm" onclick="switchForms('Register')"> Register >> </a> </p>
                                             <button type="submit" class=" btn btn-primary" id="loginbtn" >Log In</button>
                                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                         </div>
                                     </div>
                                </form>
                            </div>

                           {{--end of login form div --}}


                           {{--Registration form--}}
                            <div class="Register hidden modalForm">

                                   <form action="{{URL::to('register')}}" id="registrationForm" method="post" class="form-horizontal">

                                   <div class="alert alert-danger avatar_alert" role="alert" style="display: none">
                                          <ul></ul>
                                   </div>
                                   <ul></ul>
                                    <div class="alert alert-success avatar_success" role="alert" style="display: none">
                                           <ul></ul>
                                    </div>
                                    <ul></ul>
                                     {{--{{ Hash::make('1234'); }}--}}
                                       <div class="form-group">
                                           <label for="avatar_src" class="col-sm-3 control-label">First Name</label>
                                           <div class="col-sm-5">
                                               <input type="text" class="form-control" required="required" name="fname" id="fname"/>
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <label for="avatar_src" class="col-sm-3 control-label">Middle Name</label>
                                           <div class="col-sm-5">
                                               <input type="text" class="form-control" required="required" name="mname" id="mname"/>
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <label for="avatar_src" class="col-sm-3 control-label">Last Name</label>
                                           <div class="col-sm-5">
                                               <input type="text" class="form-control"  name="lname" id="lname"/>
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <label for="avatar_src" class="col-sm-3 control-label">Username</label>
                                           <div class="col-sm-5">
                                               <input type="text" class="form-control" required="required" name="uname" id="uname"/>
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <label class="col-sm-3 control-label">Password</label>
                                           <div class="col-sm-5">
                                               <input type="password" class="form-control" required="required" name="secretword" id="secretword"/>
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <label class="col-sm-3 control-label">email</label>
                                           <div class="col-sm-5">
                                               <input type="email" class="form-control"  name="email" id="email"/>
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <label class="col-sm-3 control-label">Phone Number</label>
                                           <div class="col-sm-5">
                                               <input type="number" class="form-control" required="required" name="pnumber" id="pnumber"/>
                                           </div>
                                       </div>

                                       <div class="form-group modal-footer">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                                                <p class="pull-left text-center">Already have an account? <a href="javascript:void(0);" onclick="switchForms('Login')"> login >> </a> </p>
                                                <button type="submit" class=" btn btn-primary" id="loginbtn" >OK</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                   </form>
                               </div>
                           {{--end of registration form--}}

                           {{--beggining of the success div--}}

                         <div class="success hidden modalForm">

                               <div class="alert alert-success">
                                      <H4 class="success text-center"> Successfully Registered </H4>
                               </div>

                                  <div class="form-group modal-footer">
                                       <div class="col-sm-9 col-sm-offset-3">
                                           <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                                           <button type="submit" class=" btn btn-success" id="loginbtn" onclick="switchForms('Login')">login</button>
                                           <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                       </div>
                                   </div>
                              </form>
                          </div>
                           {{--end of the success div--}}
      			    </div>

    			    </div>
  			    </div>
          </div>

  			               		
			</ul>
		</div>
	
	</nav>

	@if(!(Auth::guest()))

	@if(Auth::user() -> role == 1)

	<div class="container" style="height: 30px; background-color: white; margin-top: 0px; margin-bottom: 30px">

	    <ul class="nav navbar-nav navbar-right">

	        <a href="{{ url('edit_about') }}" class="btn btn-success"><i class="fa fa-hacker-news"> </i> About </a>

	        <a href="{{ url('edit_contact') }}" class="btn btn-success"><i class="fa fa-phone"> </i> Contact </a>

	        <a href="" class="btn btn-success"><i class="glyphicon glyphicon-user"> </i> users </a>

	        <a href="{{ url('list_objects') }}" class="btn btn-success"><i class="glyphicon glyphicon-list"> </i> list </a>

	        <a href="{{ url('addnew') }}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"> </i> New </a>

	    </ul>

	</div>
	@endif

    @endif

	<!-- <hr style="margin-left: 50px; margin-right: 50px "/> -->

</header>


@yield('content')


<div class="container-fluid" style="background: #1A1A1A"  >
<div class="container" style="margin-top: 50px">

    <div class="row">

    <div class="col-md-4">
                <div class="panel-heading">
                    <h4 style="color: gray"><b>About Us</b></h4>
                </div>
                <div class="panel-body">
                    <p style="color: gray">
                        we are the best in selling houses,we provide the best services....Look at our Latest
                        listed properties and check out the facilities on them, We have already sold more than
                        5,000 Homes and we are still going at very good pace. We would love you to look into
                    </p>
                </div>
            </div>

        <div class="col-md-4">
            <div class="panel-heading">
                <h4 style="color: gray"><b>Recent Posts</b></h4>
            </div>
            <div class="panel-body">
            <?php
             $objects = Object::all();
             $objects->toarray();
             $flag =  0;
             ?>
             <ul class="list-unstyled" style="color: gray" >
             <?php
             for($i = 0; $i<5; $i++){
              ?>
                <li><span class="glyphicon glyphicon-play" aria-hidden="true"></span> House No. {{ $objects[$i]->id }} , {{ $objects[$i] -> location }} </li>
              <?php
             }
             ?>
             </ul>

            </div>
        </div>
        <div class="col-md-4">
            <div class="panel-heading">
                <h4 style="color: gray"><b>Contact Us</b></h4>
            </div>
            <div class="panel-body">
                    <address style="color: gray">
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
        <p class="text-center" style="color: gray"> <?php $curYear = date('Y'); ?>Copyright &copy; {{ $curYear }} Piccolohus </p>
</div>
</div>


    <!-- Latest compiled and minified JavaScript -->
     <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
     <script src="{{ asset('js/loginout.js') }}" type="text/javascript"></script>
     {{--<script src="{{ asset('js/loginjsfile.js') }}" type="text/javascript"></script>--}}
     <script src="{{ asset('js/fileinput.js') }}" type="text/javascript"></script>
     <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
     <script>
     $('.dropdown-toggle').dropdown()
     </script>


</body>
</html>

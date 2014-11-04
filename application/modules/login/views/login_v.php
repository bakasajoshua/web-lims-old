<head>
	<link rel="stylesheet" href="<?php echo base_url('assets/sass_assets/stylesheets/style.css');?>">
	<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.js');?>"></script>
	<script src="<?php echo base_url('assets/bower_components/semantic-ui/build/packaged/javascript/semantic.js');?>"></script>
	<script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
</head>


<style>
	label{
		text-align: center;
	}
#login_widget	{
		-moz-box-shadow:    3px 3px 5px 6px #ccc;
	  	-webkit-box-shadow: 3px 3px 5px 6px #ccc;
	  	box-shadow:         3px 3px 5px 6px #ccc;
	}
#change_pass_widget	{
		-moz-box-shadow:    3px 3px 5px 6px #ccc;
	  	-webkit-box-shadow: 3px 3px 5px 6px #ccc;
	  	box-shadow:         3px 3px 5px 6px #ccc;
	}
#register_widget	{
		-moz-box-shadow:    3px 3px 5px 6px #ccc;
	  	-webkit-box-shadow: 3px 3px 5px 6px #ccc;
	  	box-shadow:         3px 3px 5px 6px #ccc;
	}	
#widget-footer{
	padding: 0px; 
	margin-top: 1%;
}	
#left-widget{
	width: 50%;
	float: left; 
	background-color:#CCCC99;
}
</style>


<body>
	<div class="col-md-6 head-title" style="margin-left: 10%; margin-top: 13%;">
		<h1 class="ui teal header"> WEB-LIMS</h1>
		<div class="row" style="width:100%">
			<div class="" style="width:20%;float:left;">
				<img width="" height="" style="height:100px;width:100px;" alt="" src="http://127.0.0.1/web-lims/assets/images/tz.png">
			</div>
			<div class="" style="width:60%;float:left;">
				<h5>The United Republic of Tanzania</h5>
			</div>
			<div class="" style="width:20%;float:left;">
				<img width="" height="" style="height:100px;width:105px;" alt="" src="http://127.0.0.1/web-lims/assets/images/nacp.png">
			</div>
		</div>
	</div>
	
<div class="ui two column grid">
<!--login form-->
  <div class="column" style="float: right; width: 30%; margin-top: 10%; margin-right: 8%;" id="login_widget">
    <div class="ui fluid form segment">
	<center><div id="alert-l"></div></center>
      <h3 class="ui header" value="login">Log-in</h3>
      	<form method="post" id="login_form">
      		<div class="field">
		        <label>Email</label>
		        <input placeholder="E-mail" name="email-l" id="email-l" type="text">
      		</div>
	      	<div class="field">
		        <label>Password</label>
		        <input type="password" name="pass" id="pass" placeholder="Password">
	      	</div>
      		<!-- <div class="ui blue submit button" style="padding: 2%;">Login</div> -->
      		<input type="submit" class="ui blue submit button" value="Login" style="padding: 2%;">
      	</form>
      	<center>
      		<div id="widget-footer">
      			<div id="left-widget">
		      		<p id="change_pass_l"  style="padding: 0%; margin: 0%; font-size: smaller; cursor: pointer; color: #FF0000;">Forgot Password</p>
		      	</div>
		      	<div id="left-widget">
		      		<p id="register_l" style="padding: 0%; margin: 0%;font-size: smaller; cursor: pointer; color: #FF0000">Register</p>
	      		</div>
      		</div>
      	</center>      
    </div>
  </div>
<!--login form-->
  
<!--forgot pass form-->  
<div class="column" style="float: right; width: 30%; margin-top: 13%; margin-right: 8%;" id="change_pass_widget">
    <div class="ui fluid form segment">
    	<center><div id="alert-f"></div></center>
    	<h3 class="ui header" value="login">Change Password</h3>
    	<form method="post" id="forgot_pass_form">
	      	<div class="field">
		        <label>Email Address</label>
		        <input placeholder="E-mail" type="text">
	      	</div>
	      	<input type="submit" class="ui blue submit button" style="padding: 2%;" value="Send"  />
      	</form>      	
      	<center>
      		<div  id="widget-footer">
      			<div id="left-widget">
      				<p id="register_cp" style="padding: 0%; margin: 0%;font-size: smaller; cursor: pointer; color: #FF0000">Register</p>	
      			</div>
      			<div id="left-widget">
      				<p id="login_cp" style="padding: 0%; margin: 0%; font-size: smaller; cursor: pointer; color: #FF0000">Login</p>
      			</div>
	      	</div>
      	</center>
    </div>
  </div>
  <!--forgot pass form-->
  <!--Register form-->
  <div class="column" id="register_widget" style="float:right; width: 30%;  margin-top: 10%; margin-right: 8%;">
    <div class="ui fluid form segment">
    	<center><div id="alert-r"></div></center>
    	<form method="post" id = "register_form">
    		<h3 class="ui header">Register</h3>
	        <div class="field">
	          <label>E-mail</label>
	          <input placeholder="E-mail" name="email" id="email" type="text">
	        </div>
	        <div class="field">
	          <label>Name</label>
	          <input placeholder="Username" name="username" id="username" type="text">
	        </div>
	      <div class="field">
	        <label>Password</label>
	        <input placeholder="Password" name="pass" id="pass" type="password">
	      </div>
	      <div class="field">
	        <label>Confirm-Password</label>
	        <input placeholder="Confirm-Password" name="c-pass" id="c-pass" type="password">
	      </div>
	      <div class="inline field">
	        <div class="ui checkbox">
	          <input id="conditions" type="checkbox">
	          <label for="conditions">I agree to the terms and conditions</label>
	        </div>
	      </div>
	      <input type="submit" class="ui blue submit button" value="Submit" id="submit_register" style="padding: 2%;"/>
      </form>
      	<center>
      		<div id="widget-footer">
      			<div id="left-widget">
		      		<p id="change_pass_r" style="padding: 0%; margin: 0%; font-size: smaller; cursor: pointer; color: #FF0000">Forgot Password</p>
		      	</div>
		      	<div id="left-widget">
		      		<p id="login_r" style="padding: 0%; margin: 0%;font-size: smaller; cursor: pointer; color: #FF0000">Login</p>
		      	</div>
	      	</div>
      	</center>      
      	
    </div>
  </div>
  
  <!--Register form-->
</div>


<div id="copyrights" style="position: absolute; left: 40%; right: 40%; bottom: 0%;">
	<?php echo $this->config->item("copyrights") ?>
</div>
</body>

<?php $this->load->view("login_footer_v.php"); ?>

@extends('index')
@section('title')HRIS | Application @endsection
@section('content')
<script type="text/javascript">
	function iitocd(){
		document.getElementById('initial_information').style.display="none";
		document.getElementById('contact_details').style.display="block";
		document.getElementById('ii').className='breadcrumb-item';
		document.getElementById('cd').className='breadcrumb-item active';
		document.getElementById('fi').className='breadcrumb-item';
		document.getElementById('a').className='breadcrumb-item';
	}
	function cdtoii(){
		document.getElementById('contact_details').style.display="none";
		document.getElementById('initial_information').style.display="block";
		document.getElementById('ii').className='breadcrumb-item active';
		document.getElementById('cd').className='breadcrumb-item';
		document.getElementById('fi').className='breadcrumb-item';
		document.getElementById('a').className='breadcrumb-item';
	}
	function cdtofi(){
		document.getElementById('contact_details').style.display="none";
		document.getElementById('further_information').style.display="block";
		document.getElementById('ii').className='breadcrumb-item';
		document.getElementById('cd').className='breadcrumb-item';
		document.getElementById('fi').className='breadcrumb-item active';
		document.getElementById('a').className='breadcrumb-item';
	}
	function fitocd(){
		document.getElementById('further_information').style.display="none";
		document.getElementById('contact_details').style.display="block";
		document.getElementById('ii').className='breadcrumb-item';
		document.getElementById('cd').className='breadcrumb-item active';
		document.getElementById('fi').className='breadcrumb-item';
		document.getElementById('a').className='breadcrumb-item';
	}
	function fitoa(){
		document.getElementById('further_information').style.display="none";
		document.getElementById('account').style.display="block";
		document.getElementById('ii').className='breadcrumb-item';
		document.getElementById('cd').className='breadcrumb-item';
		document.getElementById('fi').className='breadcrumb-item';
		document.getElementById('a').className='breadcrumb-item active';
	}
	function atofi(){
		document.getElementById('account').style.display="none";
		document.getElementById('further_information').style.display="block";
		document.getElementById('ii').className='breadcrumb-item';
		document.getElementById('cd').className='breadcrumb-item';
		document.getElementById('fi').className='breadcrumb-item active';
		document.getElementById('a').className='breadcrumb-item';
	}
	function pw(){
	    var pass1 = document.getElementById('pass1');
	    var pass2 = document.getElementById('pass2');
	    var message = document.getElementById('message');
	    var goodColor = "#66cc66";
	    var moderateColor = '#ffa500';
	    var badColor = "#ff6666";
	 	
	    if(pass1.value.length > 5){
	        message.style.color = moderateColor;
	        message.innerHTML = "Weak Password";
	        pass2.disabled = false;
	    }
	    else{
	        message.style.color = badColor;
	        message.innerHTML = "You have to enter 6 Characters";
	        pass2.disabled = true;
	    }

	   	if(pass1.value.length > 15){
	    	message.style.color = goodColor;
	    	message.innerHTML = "Strong Password";
	    	pass2.disabled = false;
	    }
	}  
	function pw1(){
	    var pass1 = document.getElementById('pass1');
	    var pass2 = document.getElementById('pass2');
	    var message = document.getElementById('message1');
	    var goodColor = "#66cc66";
	    var moderateColor = '#ffa500';
	    var badColor = "#ff6666";
	 	
	    if(pass1.value == pass2.value)
	    {
	        pass1.style.backgroundColor = goodColor;
	        pass2.style.backgroundColor = goodColor;
	        message.style.color = goodColor;
	        message.innerHTML = "Match";
	    }
		else
	    {
	        pass1.style.backgroundColor = badColor;
	        pass2.style.backgroundColor = badColor;
	        message.style.color = badColor;
	        message.innerHTML = "Passwords Don't Match!"
	    }

	    if(pass1.value == 0 && pass2.value == 0){
	    	message.innerHTML = "";
	    	pass1.style.backgroundColor = "";
	    	pass2.style.backgroundColor = "";
	    }
	}
	function disable(){
		document.getElementById('pass2').disabled = true;
	}  
</script>
<body  onload="disable()">
<ol class="breadcrumb">
    <li class="breadcrumb-item">
    	<a href="#">Application</a>
	</li>
    <li class="breadcrumb-item active" id="ii">Initial Information</li>
    <li class="breadcrumb-item" id="cd">Contact Details</li>
    <li class="breadcrumb-item" id="fi">Further Information</li>
    <li class="breadcrumb-item" id="a">Account</li>
</ol>
<form>
<div class="card mb-3" id="initial_information">
    <div class="card-header">
    	<i class="fa fa-user"></i> Initial Information
    </div>
    <div class="card-body">
    	<div class="row mb-2">
    		<div class="col-md-1 mt-2">
    			<label>Name:</label>
    		</div>
    		<div class="col">
    			<input type="text" class="form-control" placeholder="Last Name">
    		</div>
    		<div class="col">
    			<input type="text" class="form-control" placeholder="First Name">
    		</div>
    		<div class="col">
    			<input type="text" class="form-control" placeholder="Middle Name">
    		</div>
    	</div>
    	<div class="row mb-2">
    		<div class="col-md-1 mt-2">
    			<label>Address:</label>
    		</div>
    		<div class="col">
    			<input type="text" class="form-control" placeholder="Address">
    		</div>
    	</div>
    	<div class="row mb-2">
    		<div class="col-md-2 mt-2">
    			<label>Birth Date:</label>
    		</div>
    		<div class="col">
    			<input type="date" class="form-control">
    		</div>
    		<div class="col-md-2 mt-2">
    			<label>Birth Place:</label>
    		</div>
    		<div class="col">
    			<input type="text" class="form-control" placeholder="Birth Place">
    		</div>
    	</div>
    	<div class="row mb-2">
    		<div class="col-md-1 mt-2">
    			<label>Age:</label>
    		</div>
    		<div class="col">
    			<input type="number" class="form-control" placeholder="Age">
    		</div>
    		<div class="col-md-1 mt-2">
    			<label>Citizenship:</label>
    		</div>
    		<div class="col">
    			<select class="form-control">
    				<option>Filipino</option>
    				<option>Chinese</option>
    				<option>American</option>
    			</select>
    		</div>
    		<div class="col-md-2 mt-2">
    			<label>Civil Status:</label>
    		</div>
    		<div class="col">
    			<select class="form-control">
    				<option>Single</option>
    				<option>Married</option>
    				<option>Divorced</option>
    			</select>
    		</div>
    	</div>
    	<div class="row mb-2">
    		<div class="col-md-1 mt-2">
    			<label>Religion:</label>
    		</div>
    		<div class="col">
    			<input type="text" class="form-control" placeholder="Religion">
    		</div>
    		<div class="col-md-1 mt-2">
    			<label>Language:</label>
    		</div>
    		<div class="col">
    			<input type="text" class="form-control" placeholder="Language">
    		</div>
    	</div>
    </div>
   	<div class="card-footer small text-muted" align="right">
	    <button type="button" class="btn btn-info mr-1" disabled><i class="fa fa-chevron-left"></i></button>
	    <button type="button" class="btn btn-info" onclick="iitocd()"><i class="fa fa-chevron-right"></i></button>
   	</div>
</div>
<div class="card mb-3" id="contact_details" style="display:none;">
    <div class="card-header">
    	<i class="fa fa-phone"></i> Contact Details
    </div>
    <div class="card-body">
    	<div class="row">
    		<div class="col-md-2 mt-2">
    			<label>E-Mail Address:</label>
    		</div>
    		<div class="col">
    			<input type="email" class="form-control" placeholder="E-Mail Address">
    		</div>
    		<div class="col-md-2 mt-2">
    			<label>Contact Number:</label>
    		</div>
    		<div class="col">
    			<input type="number" class="form-control" placeholder="Contact Number">
    		</div>
    	</div>
    </div>
   	<div class="card-footer small text-muted" align="right">
   		<button type="button" class="btn btn-info mr-1" onclick="cdtoii()"><i class="fa fa-chevron-left"></i></button>
		<button type="button" class="btn btn-info" onclick="cdtofi()"><i class="fa fa-chevron-right"></i></button>
   	</div>
</div>
<div class="card mb-3" id="further_information" style="display:none;">
    <div class="card-header">
    	<i class="fa fa-info-circle"></i> Further Information
    </div>
    <div class="card-body">
	    <div class="row mb-2">
	    	<div class="col-md-3 mt-2">
	    		<label>Transcript of Records:</label>
	    	</div>
	    	<div class="col">
	    		<input type="file" class="form-control">
	    	</div>
	    </div>
	    <div class="row mb-2">
	    	<div class="col-md-3 mt-2">
	    		<label>Training Certificate:</label>
	    	</div>
	    	<div class="col">
	    		<input type="file" class="form-control">
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="col-md-3 mt-2">
	    		<label>Birth Certificate:</label>
	    	</div>
	    	<div class="col">
	    		<input type="file" class="form-control">
	    	</div>
	    </div>
    </div>
   	<div class="card-footer small text-muted" align="right">
   		<button type="button" class="btn btn-info mr-1" onclick="fitocd()"><i class="fa fa-chevron-left"></i></button>
	    <button type="button" class="btn btn-info" onclick="fitoa()"><i class="fa fa-chevron-right"></i></button>
	</div>
</div>
<div class="card mb-3" id="account" style="display:none;">
    <div class="card-header">
    	<i class="fa fa-user-circle-o"></i> Account
    </div>
    <div class="card-body">
    	<div class="row mb-2">
    		<div class="col-md-2 mt-2">
    			<label>Username:</label>
    		</div>
    		<div class="col">
    			<input type="text" class="form-control" placeholder="Username">
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-2 mt-2">
    			<label>Password:</label>
    		</div>
    		<div class="col">
				<input type="password" class="form-control" placeholder="Password" minlength="6"  id="pass1" onkeyup="pw(); return false;" />
				<div id="message"></div>
			</div>
			<div class="col">
				<input type="password" class="form-control" placeholder="Confirm Password" minlength="6" id="pass2" onkeyup="pw1(); return false;" />
				<div id="message1"></div>
			</div>
		</div>
    </div>
   	<div class="card-footer small text-muted" align="right">
   		<button type="button" class="btn btn-info mr-1" onclick="atofi()"><i class="fa fa-chevron-left"></i></button>
	    <button type="button" class="btn btn-info" disabled><i class="fa fa-chevron-right"></i></button>
   	</div>
</div>
</form>
</body>
@endsection
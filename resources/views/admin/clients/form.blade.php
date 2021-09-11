<div class="row">
	<div class="form-group col-md-6">
		<label class="form-label" for="fname">Full Name :</label>
		<input type="text" class="form-control" id="fname" placeholder="First Name" value="{{$clientArr->name??''}}">
	</div>
	<div class="form-group col-md-6">
		<label class="form-label" for="fname">Email Address :</label>
		<input type="text" class="form-control" id="fname" placeholder="Email Address" value="{{$clientArr->name??''}}" {{$readonly??''}}>
	</div>
	<div class="form-group col-md-6">
		<label class="form-label" for="fname">Modile No :</label>
		<input type="text" class="form-control" id="fname" placeholder="First Name" value="{{$clientArr->fn_user_meta->mobile_no??''}}">
	</div>
	<div class="form-group col-md-6">
		<label class="form-label" for="fname">Alt Contact No :</label>
		<input type="text" class="form-control" id="fname" placeholder="First Name" value="{{$clientArr->fn_user_meta->alt_contact_no??''}}">
	</div>
	<div class="form-group col-md-6">
		<label class="form-label" for="lname">Company Name :</label>
		<input type="text" class="form-control" id="lname" placeholder="Last Name" value="{{$clientArr->fn_user_meta->company_name??''}}">
	</div>
	<div class="form-group col-md-6">
		<label class="form-label" for="lname">Position :</label>
		<input type="text" class="form-control" id="lname" placeholder="Last Name" value="{{$clientArr->fn_user_meta->position??''}}">
	</div>
	<div class="form-group col-md-6">
		<label class="form-label" for="add1"></label>
		<input type="text" class="form-control" id="add1" placeholder="Street Address 1">
	</div>
	<div class="form-group col-md-6">
		<label class="form-label" for="add2">Street Address 2:</label>
		<input type="text" class="form-control" id="add2" placeholder="Street Address 2">
	</div>
	<div class="form-group col-md-12">
		<label class="form-label" for="cname">Company Name:</label>
		<input type="text" class="form-control" id="cname" placeholder="Company Name">
	</div>
	<div class="form-group col-sm-12">
		<label class="form-label">Country:</label>
		<select name="type" class="selectpicker form-control" data-style="py-0">
			<option>Select Country</option>
			<option>Caneda</option>
			<option>Noida</option>
			<option>USA</option>
			<option>India</option>
			<option>Africa</option>
		</select>
	</div>
	<div class="form-group col-md-6">
		<label class="form-label" for="mobno">Mobile Number:</label>
		<input type="text" class="form-control" id="mobno" placeholder="Mobile Number">
	</div>
	<div class="form-group col-md-6">
		<label class="form-label" for="altconno">Alternate Contact:</label>
		<input type="text" class="form-control" id="altconno" placeholder="Alternate Contact">
	</div>
	<div class="form-group col-md-6">
		<label class="form-label" for="email">Email:</label>
		<input type="email" class="form-control" id="email" placeholder="Email">
	</div>
	<div class="form-group col-md-6">
		<label class="form-label" for="pno">Pin Code:</label>
		<input type="text" class="form-control" id="pno" placeholder="Pin Code">
	</div>
	<div class="form-group col-md-12">
		<label class="form-label" for="city">Town/City:</label>
		<input type="text" class="form-control" id="city" placeholder="Town/City">
	</div>
</div>
<hr>
<h5 class="mb-3">Security</h5>
<div class="row">
	<div class="form-group col-md-12">
		<label class="form-label" for="uname">User Name:</label>
		<input type="text" class="form-control" id="uname" placeholder="User Name">
	</div>
	<div class="form-group col-md-6">
		<label class="form-label" for="pass">Password:</label>
		<input type="password" class="form-control" id="pass" placeholder="Password">
	</div>
	<div class="form-group col-md-6">
		<label class="form-label" for="rpass">Repeat Password:</label>
		<input type="password" class="form-control" id="rpass" placeholder="Repeat Password ">
	</div>
</div>
<div class="checkbox">
	<label class="form-label"><input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked">Enable Two-Factor-Authentication</label>
</div>
<button type="submit" class="btn btn-primary">Save</button>
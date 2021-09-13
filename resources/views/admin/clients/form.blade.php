<div class="bd-example">
            <ul class="nav nav-pills bg-light" data-toggle="slider-tab" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="personal-tab" data-bs-toggle="tab" data-bs-target="#pills-personal" type="button" role="tab" aria-controls="personal" aria-selected="true">
                    	Personal Details 
                     </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="org-tab" data-bs-toggle="tab" data-bs-target="#pills-org" type="button" role="tab" aria-controls="org" aria-selected="false">Orgnization Details</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#pills-address" type="button" role="tab" aria-controls="address" aria-selected="false">Orgnization Address</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="document-tab" data-bs-toggle="tab" data-bs-target="#pills-document" type="button" role="tab" aria-controls="document" aria-selected="false">Documents</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="submit-tab" data-bs-toggle="tab" data-bs-target="#pills-submit" type="submit" role="tab" aria-controls="submit" aria-selected="false">Submit</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-personal" role="tabpanel"
                    aria-labelledby="pills-personal-tab1">
                    <p>
                       	<div class="row">
                   			<h5 class="mb-3">Personal Details</h5>
                   			<div class="form-group col-md-6" >
							   <div class="profile-img-edit position-relative">
							      <img class="profile-pic rounded avatar-100 border" src="{{$clientArr->fn_profile->file_name? asset('storage/uploads/profile/'.$clientArr->fn_profile->file_name):url('assets/images/avatars/01.png')}}" alt="profile-pic">
							      <div class="upload-icone bg-primary">
							         <svg class="upload-button" width="14" height="14" viewBox="0 0 24 24">
							            <path fill="#ffffff" d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z"></path>
							         </svg>
							         <input class="file-upload" name="profile_image" type="file" accept="image/*">
							      </div>
							   </div>
							<!--    <div class="img-extension mt-3">
							      <div class="d-inline-block align-items-center">
							         <span>Only</span>
							         <a href="javascript:void();">.jpg</a>
							         <a href="javascript:void();">.png</a>
							         <a href="javascript:void();">.jpeg</a>
							         <span>allowed</span>
							      </div>
							   </div> -->
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="fname">Reg. Unique Id :</label>
								<input type="text" name="" class="form-control" id="fname" value="{{$clientArr->fn_user_meta->company_uid??''}}" readonly disabled>
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="fname">Full Name :</label>
								<input type="text" name="name" class="form-control" id="fname" placeholder="First Name" value="{{$clientArr->name??''}}">
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="fname">Position/Employer:</label>
								<input type="text" name="position" class="form-control" id="fname" placeholder="Ex. Founder/CEO/Co-founder" value="{{$clientArr->fn_user_meta->position??''}}">
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="email">Email Address :</label>
								<input type="text" name="" class="form-control" id="email" placeholder="Email Address" value="{{$clientArr->email??''}}" {{$readonly??''}}>
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="mobile_no">Modile No :</label>
								<input type="text" name="mobile_no" class="form-control" id="mobile_no" placeholder="Mobile Number" value="{{$clientArr->fn_user_meta->mobile_no??''}}">
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="alt_contact_no">Alt Contact No :</label>
								<input type="text" name="alt_contact_no" class="form-control" id="alt_contact_no" placeholder="Alternate Contact Number" value="{{$clientArr->fn_user_meta->alt_contact_no??''}}">
							</div>
							<div class="form-group col-md-6" >
							   <label class="form-label">Service Type :</label>
							    @php($arr_user_type = Config::get('constants.arr_user_type'))
        						{!! Form::select('user_type', $arr_user_type, $clientArr->fn_user_meta->user_type??null, ('' == 'required') ? ['class' => 'selectpicker form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
							</div>
							<!-- <div class="form-group col-md-4" >
							   <label class="form-label" for="furl">Facebook Url:</label>
							   <input type="text" name="" class="form-control" id="furl" placeholder="Facebook Url">
							</div> -->
					<!-- 		<div class="form-group col-md-4" >
							   <label class="form-label" for="turl">Twitter Url:</label>
							   <input type="text" name="" class="form-control" id="turl" placeholder="Twitter Url">
							</div>
							<div class="form-group col-md-4" >
							   <label class="form-label" for="instaurl">Instagram Url:</label>
							   <input type="text" name="" class="form-control" id="instaurl" placeholder="Instagram Url">
							</div> -->
							<!-- <div class="form-group col-md-4">
							   <label class="form-label" for="lurl">Linkedin Url:</label>
							   <input type="text" name="" class="form-control" id="lurl" placeholder="Linkedin Url">
							</div> -->
                       	</div>
                    </p>
                </div>
                <div class="tab-pane fade" id="pills-org" role="tabpanel"
                    aria-labelledby="pills-org-tab1">
                    <p>
                    	<div class="row">
                    		<h5 class="mb-3">Organization Details</h5>
							<div class="form-group col-md-6">
								<label class="form-label" for="Organization">Organization Name :</label>
								<input type="text" name="company_name" class="form-control" id="Organization" placeholder="Organization Name" value="{{$clientArr->fn_user_meta->company_name??''}}">
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="add2">Location/City/Area : </label>
								<input type="text" name="location" class="form-control" id="add2" placeholder=" " value="{{$clientArr->fn_user_meta->location??''}}">
							</div>							
							<div class="form-group col-md-6">
								<label class="form-label" for="Position">NetWorth (in Digit):</label>
								<input type="text" name="networth" class="form-control" id="Position" placeholder="Yearly earning" value="{{$clientArr->fn_user_meta->networth??''}}">
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="Position">Service's :</label>
								<input type="text" name="company_services" class="form-control" id="Position" placeholder="Services" value="{{$clientArr->fn_user_meta->company_services??''}}">
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="add1">Work Grade : </label>
								<input type="text" name="work_grade" class="form-control" id="add1" placeholder="Street Address 1"  value="{{$clientArr->fn_user_meta->work_grade??''}}">
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="add2">Working Area:</label>
								<input type="text" name="working_area" class="form-control" id="add2" placeholder="Ex. construction & consultancy" value="{{$clientArr->fn_user_meta->working_area??''}}">
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="cname">About Us</label>
								<textarea type="text" name="desc" class="form-control" id="cname" placeholder="About Your company & services" value="{{$clientArr->fn_user_meta->desc??''}}">{{$clientArr->fn_user_meta->desc??''}}</textarea>
							</div>
						</div>
                    </p>
                </div>
                <div class="tab-pane fade" id="pills-address" role="tabpanel"
                    aria-labelledby="pills-address-tab1">
                    <p>
                        <div class="row">
                        	<h5 class="mb-3">Organization Address</h5>
                        	<div class="form-group col-md-6">
								<label class="form-label" for="add2">Address</label>
								<input type="text" name="street_address" class="form-control" id="add2" placeholder=" " value="{{$clientArr->fn_user_meta->street_address??''}}">
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="add2">City:</label>
								<input type="text" name="city" class="form-control" id="add2" placeholder=" " value="{{$clientArr->fn_user_meta->city??''}}">
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="add2">State:</label>
								<input type="text" name="state" class="form-control" id="add2" placeholder=" " value="{{$clientArr->fn_user_meta->state??''}}">
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="add2">country :</label>
								<input type="text" name="country" class="form-control" id="add2" placeholder=" " value="{{$clientArr->fn_user_meta->country??''}}">
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="add2">Postal Code:</label>
								<input type="text" name="zip_code" class="form-control" id="add2" placeholder=" " value="{{$clientArr->fn_user_meta->zip_code??''}}">
							</div>
                        </div>                         
                    </p>
                </div>
                <div class="tab-pane fade" id="pills-document" role="tabpanel"
                    aria-labelledby="pills-document-tab1">
                    <p>
                    	<h5 class="mb-3">Documents</h5>
                    <div class="row p-3 border-bottom">
                    	<div class="form-group col-md-3" >
						   	<label class="form-label">Document Type :</label>
						    @php($arr_user_type = Config::get('constants.arr_docs_type'))
    						{!! Form::select("document['type'][]", $arr_user_type,1, ('' == 'required') ? ['class' => 'selectpicker form-control', 'required' => 'required','disabled' => true,] : ['class' => 'form-control','disabled' => true,]) !!}
						</div>
                		<div class="form-group col-md-4">
							<label class="form-label" for="Position">Document No :</label>
							<input type="text" name="" class="form-control" name="number" id="Position" placeholder="Pan Number" value="{{$clientArr->fn_user_meta->pan_no??''}}">
						</div>
						<div class="form-group col-md-3">
							<label class="form-label" for="Position">Upload Pan Card :</label>
							<input type="file" accept="image/*"  class="form-control form-control-sm" onchange="loadFile(event,1)">
						</div>
						<div class="form-group col-md-2">
							<label class="form-label" for="Position">Preview</label>
							<img id="output_1" class="border" />
						</div>
					</div>
					<div class="row p-3 border-bottom">
						<div class="form-group col-md-3" >
							   <label class="form-label">Document Type :</label>
							    @php($arr_user_type = Config::get('constants.arr_docs_type'))
        						{!! Form::select("document['type'][]", $arr_user_type, 2, ('' == 'required') ? ['class' => 'selectpicker form-control', 'required' => 'required','disabled' => true,] : ['class' => 'form-control','disabled' => true,]) !!}
							</div>
                		<div class="form-group col-md-4">
							<label class="form-label" for="Position">Document No :</label>
							<input type="text" name="" class="form-control"  name="document['number'][]" id="Position" placeholder="GST Number" value="{{$clientArr->fn_user_meta->gst_no??''}}">
						</div>
						<div class="form-group col-md-3">
							<label class="form-label" for="Position">Upload GST Certificate :
							<input type="file" name="document['file'][]" accept="image/*"  class="form-control form-control-sm" onchange="loadFile(event,2)"> 
						</div>
						<div class="form-group col-md-2">
							<label class="form-label" for="Position">Preview</label>
								<img id="output_2" class="border" />
						</div>
					</div>
					<div class="row p-3 border-bottom">
						<div class="form-group col-md-3" >
							   <label class="form-label">Document Type :</label>
							    @php($arr_user_type = Config::get('constants.arr_docs_type'))
        						{!! Form::select("document['type'][]", $arr_user_type, 5, ('' == 'required') ? ['class' => 'selectpicker form-control', 'required' => 'required','disabled' => true,] : ['class' => 'form-control','disabled' => true,]) !!}
							</div>
                		<div class="form-group col-md-4">
							<label class="form-label" for="Position">Document No :</label>
							<input type="text" name="" class="form-control" name="document['number'][]" id="Position" placeholder="Document Number" value="{{$clientArr->fn_user_meta->fn_docs->docs_no??''}}">
						</div>
						<div class="form-group col-md-3">
							<label class="form-label" for="Position">Upload GST Certificate :
							<input type="file" name="document['file'][]" accept="image/*"  class="form-control form-control-sm" onchange="loadFile(event,2)"> 
						</div>
						<div class="form-group col-md-2">
							<label class="form-label" for="Position">Preview</label>
								<img id="output_2" class="border" />
						</div>
					</div>
                    </p>
                </div>

            </div>
        </div>
</div>
	<script>
	  var loadFile = function(event,id_no) {
	    var output = document.getElementById('output_'+id_no);
	    output.src = URL.createObjectURL(event.target.files[0]);
	    output.onload = function() {
	      URL.revokeObjectURL(output.src) // free memory
	    }
	  };
	</script>


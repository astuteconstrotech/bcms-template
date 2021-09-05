@extends('layouts.app')
@section('content')
<div class="col-md-12 iq-navbar-header" style="height: 100px;">
    <nav aria-label="col-md-12 breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home </a></a></li>
             <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>            
</div> 
   <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Create New Package</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="new-user-info">
                        <form>
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="fname">First Name:</label>
                                 <input type="text" class="form-control" id="fname" placeholder="First Name">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Last Name:</label>
                                 <input type="text" class="form-control" id="lname" placeholder="Last Name">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="add1">Street Address 1:</label>
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
                           
                           <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
  </div>
@endsection
@extends('layouts.app')
@section('content')
<div class="col-md-12 iq-navbar-header" style="height: 100px;">
    <nav aria-label="col-md-12 breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home </a></a></li>
             <li class="breadcrumb-item active" aria-current="page">Create Profile</li>
        </ol>
    </nav>            
</div> 
   <div class="conatiner-fluid content-inner mt-n5 py-0">
      {!! Form::open(['url' => 'company-profile/', 'class' => '', 'files' => true]) !!}
        <div class="row">
            <div class="col-xl-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Register New Organization</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="new-user-info">
                        <form>
                           @include('admin.clients.form')
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      {!! Form::close() !!}
  </div>
@endsection
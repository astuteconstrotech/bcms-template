@extends('layouts.app')
@section('header')
@endsection
@php $readonly="readonly" @endphp
@section('content')
<div class="col-md-12 iq-navbar-header" style="height: 100px;">
    <nav aria-label="col-md-12 breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home </a></a></li>
             <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
        </ol>
    </nav>            
</div> 
   <div class="conatiner-fluid content-inner mt-n5 py-0">
      {!! Form::model($clientArr, [
                            'method' => 'PATCH',
                            'url' => ['company-profile', $clientArr->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}
        <div class="row">
            <div class="col-xl-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Edit Organization Details</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="new-user-info">
                           @include('admin.clients.form')
                     </div>
                  </div>
               </div>
            </div>
         </div>
      {!! Form::close() !!}
  </div>
@endsection
@section('footer')
<script type="text/javascript">
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][name]" placeholder="Enter your Name" class="form-control" /></td><td><input type="text" name="addmore['+i+'][qty]" placeholder="Enter your Qty" class="form-control" /></td><td><input type="text" name="addmore['+i+'][price]" placeholder="Enter your Price" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
   
</script>
@endsection
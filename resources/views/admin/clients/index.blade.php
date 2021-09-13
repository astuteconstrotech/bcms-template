@extends('layouts.app')
@section('content')
<div class="col-md-12 iq-navbar-header" style="height: 100px;">
    <nav aria-label="col-md-12 breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home </a></a></li>
             <li class="breadcrumb-item active" aria-current="page">Clients</li>
        </ol>
    </nav>            
</div> 
   <div class="conatiner-fluid content-inner mt-n5 py-0">
       <div class="row">
      <div class="col-sm-12 mb-5">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Clients</h4>
               </div>
               <div class="card-action">
                    <a href="{{url('company-profile/create')}}" class="btn btn-primary btn-sm" role="button">Add Client</a>
                </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="datatable" class="table table-hover table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Name</th>
                           <th>Office</th>
                           <th>Reg. Date</th>
                           <th>Vrification</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($ClientsArr as $key => $clients)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{ $clients->name??''}} <small>({{ $clients->fn_user_meta->position??'-'}})</small></td>
                                <td>{{ $clients->fn_user_meta->company_name??'-'}}</td>
                                <td>{{ $clients->fn_user_meta->created_at??'-'}}</td>
                                <td>{{ $clients->fn_user_meta->is_verified??'-'}}</td>
                                <td><span class="badge badge-lg {{ $clients->fn_user_meta->status_class??''}}">{{ $clients->fn_user_meta->status??'-'}}</span></td>
                                <td>
                                    {!! $clients->fn_user_meta->action??'-' !!}
                                </td>
                            </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
  </div>
@endsection
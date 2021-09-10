@extends('layouts.app')

@section('content')
<div class="col-md-12 iq-navbar-header" style="height: 40px;">
    <nav aria-label="col-md-12 breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item text-dark">Projects</li>
        </ol>
    </nav>            
</div> 
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Projects</h4>
               </div>
               <div class="card-action">
                    <a href="{{url('project/create')}}" class="btn btn-primary btn-sm" role="button"> Add Project </a>
                </div>
            </div>
                <div class="card-body">
                    <div class="row">
                        @for($i=0; $i<=4; $i++)
                        <div class="col-md-4 col-xs-12 col-sm-12 border-1">
                            <div class="card border-4 border-0 border-primary border-bottom ">
                               <div class="bg-example">
                                <div class="list-group">
                                    <button href="#" class="list-group-item list-group-item-action btn-primary active" aria-current="true">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-4 col-sm-4 ">
                                                <img src="../assets/images/avatars/building.png" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded">
                                            </div>
                                            <div class="col-md-9 col-xs-8 col-sm-8">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h6 class="text-white">Project Title </h6>
                                                        <small class="text-light">Report/tagline/address</small>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>                               
                                    </button >
                                    <small>
                                        <a href="#" class="list-group-item list-group-item-action disabled">
                                        Project Manager : John Jay </a>
                                        <a href="#" class="list-group-item list-group-item-action disabled">Project Start : 3rd August 2021</a>
                                        <a href="#" class="list-group-item list-group-item-action disabled">Project End : 3rd August 2022</a>
                                        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true"> Project Area  : 32,0000 sq.ft</a>
                                        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true"> Status  : <span class="badge rounded-pill bg-success">Success</span>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true"> Progress :   80% <div class="progress bg-soft-success shadow-none w-100" style="height: 10px">
                                            <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; transition: width 2s ease 0s;"></div>
                                        </div> </a>
                                         <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true"> Status  : <span class="badge rounded-pill bg-success">Success</span>
                                        </a>
                                        <a href="#" class="list-group-item-action disabled">
                                            <div class="col-xs-12 text-center bg-light">
                                                <a href="{url('project/construction')}}">
                                                    <i class="fa fa-md fa-eye border-white p-2 text-dark"></i>
                                                </a>
                                                <a href="">
                                                    <i class="fa fa-bell border-white p-2 text-dark"></i>
                                                </a>
                                                <a href="{url('project/23/edit')}}">
                                                    <i class="fa fa-edit border-white p-2 text-dark"></i>
                                                </a>
                                            </div>
                                        </a>
                                </small>
                            </div>
                        </div>
                      
                        <small class="col-md=12 text-center p-1 m-1" > Subscription : <span class="badge rounded-pill bg-sm bg-light text-dark">365 Days left 
                        </span></small>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection

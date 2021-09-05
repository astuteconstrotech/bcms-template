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
                    <a href="{{url('admin/clients/create')}}" class="btn btn-primary btn-sm" role="button">Add Client</a>
                </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="datatable" class="table table-hover table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Reg. Date</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>
                              <a href=""><i class="fa fa-edit  text-primary  fa-fw fa-md" aria-hidden="true"></i></a>
                              <a href=""><i class="fa fa-eye text-primary fa-fw fa-md" aria-hidden="true"></i></a>
                              <a href=""><i class="fa fa-trash text-danger fa-fw fa-md" aria-hidden="true"></i></a>
                           </td>
                        </tr>
                        <tr>
                           <td>Garrett Winters</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>63</td>
                           <td>2011/07/25</td>
                           <td>
                              <a href=""><i class="fa fa-edit  text-primary  fa-fw fa-md" aria-hidden="true"></i></a>
                              <a href=""><i class="fa fa-eye text-primary fa-fw fa-md" aria-hidden="true"></i></a>
                              <a href=""><i class="fa fa-trash text-danger fa-fw fa-md" aria-hidden="true"></i></a>
                           </td>
                        </tr>
                        <tr>
                           <td>Garrett Winters</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>63</td>
                           <td>2011/07/25</td>
                           <td>
                              <a href=""><i class="fa fa-edit  text-primary  fa-fw fa-md" aria-hidden="true"></i></a>
                              <a href=""><i class="fa fa-eye text-primary fa-fw fa-md" aria-hidden="true"></i></a>
                              <a href=""><i class="fa fa-trash text-danger fa-fw fa-md" aria-hidden="true"></i></a>
                           </td>
                        </tr>
                        <tr>
                           <td>Garrett Winters</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>63</td>
                           <td>2011/07/25</td>
                           <td>
                              <a href=""><i class="fa fa-edit  text-primary  fa-fw fa-md" aria-hidden="true"></i></a>
                              <a href=""><i class="fa fa-eye text-primary fa-fw fa-md" aria-hidden="true"></i></a>
                              <a href=""><i class="fa fa-trash text-danger fa-fw fa-md" aria-hidden="true"></i></a>
                           </td>
                        </tr>
                        <tr>
                           <td>Garrett Winters</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>63</td>
                           <td>2011/07/25</td>
                           <td>
                              <a href=""><i class="fa fa-edit  text-primary  fa-fw fa-md" aria-hidden="true"></i></a>
                              <a href=""><i class="fa fa-eye text-primary fa-fw fa-md" aria-hidden="true"></i></a>
                              <a href=""><i class="fa fa-trash text-danger fa-fw fa-md" aria-hidden="true"></i></a>
                           </td>
                        </tr>
                        <tr>
                           <td>Garrett Winters</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>63</td>
                           <td>2011/07/25</td>
                           <td>
                              <a href=""><i class="fa fa-edit  text-primary  fa-fw fa-md" aria-hidden="true"></i></a>
                              <a href=""><i class="fa fa-eye text-primary fa-fw fa-md" aria-hidden="true"></i></a>
                              <a href=""><i class="fa fa-trash text-danger fa-fw fa-md" aria-hidden="true"></i></a>
                           </td>
                        </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Reg. Date</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
  </div>
@endsection
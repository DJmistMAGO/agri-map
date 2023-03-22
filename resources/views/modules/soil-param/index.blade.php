@extends('layouts.app-content')

@section('title')
    Dashboard
@endsection

@section('body')
    <div class="row">
        <div class="card card-custom">
            <div class="card-header">
             <div class="card-title">
                       <span class="card-icon">
                           <i class="flaticon2-chat-1 text-primary"></i>
                       </span>
              <h3 class="card-label">
               Card Footer
               <small>sub title</small>
              </h3>
             </div>
                   <div class="card-toolbar">
                       <a href="#" class="btn btn-sm btn-success font-weight-bold">
                           <i class="flaticon2-cube"></i> Reports
                       </a>
                   </div>
            </div>
            <div class="card-body">
             ...
            </div>
               <div class="card-footer d-flex justify-content-between">
                   <a href="#" class="btn btn-light-primary font-weight-bold">Manage</a>
                   <a href="#" class="btn btn-outline-secondary font-weight-bold">Learn more</a>
            </div>
           </div>
    </div>
@endsection

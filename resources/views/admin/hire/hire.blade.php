@extends('admin.master')

@section('body')
	<!-- Page Header-->
	<div class="page-header no-margin-bottom">
	  <div class="container-fluid">
	    <h2 class="h5 no-margin-bottom">All</h2>
	  </div>
	</div>
	<!-- Breadcrumb-->
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Hires</a></li>
        <li class="breadcrumb-item active">List</li>
      </ul>
    </div>
    <section class="no-padding-top">
    	<div class="container-fluid">
            <div class="row">
            	<div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  
                  <div class="table-responsive"> 
                    <table id="example" class="table table-striped">
                      <thead>
                        <tr>
                          <th class="text-center">#</th>
                          <th class="text-center">Worker</th>
                          <th class="text-center">Rate</th>
                          <th class="text-center">Worker Mobile</th>
                          <th class="text-center">Customer</th>
                          <th class="text-center">Customer Phone</th>
                          <th class="text-center">Seen</th>
                          <th class="text-center">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@php($i=1)
                      	@foreach($hires as $hire)
                        <tr>
                          <th scope="row" class="text-center">{{$i++}}</th>
                          <td class="text-center">{{$hire->mech_name}}</td>
                          <td class="text-center">{{$hire->rate}}</td>
                          <td class="text-center">{{$hire->phone}}</td>
                          <td class="text-center">{{$hire->cust_name}}</td>
                          <td class="text-center">{{$hire->cust_phone}}</td>
                          <td class="text-center">
                            @if($hire->seen==0)
                          	<a href="{{route('seen',['id'=>$hire->id])}}" class="btn btn-sm btn-danger">Seen</a>
                            @else
                            <a href="{{route('unseen',['id'=>$hire->id])}}" class="btn btn-sm btn-success">Unseen</a>
                            @endif
                          </td>
                          <td class="text-center">
                            @if($hire->status==0)
                          	<a href="{{route('finishwork',['id'=>$hire->mech_id])}}" class="btn btn-sm btn-warning">Working</a>
                            @else
                            <p class="text-success">Done</p>
                            @endif

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
    </section>

@endsection
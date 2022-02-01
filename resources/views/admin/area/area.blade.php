@extends('admin.master')

@section('body')
	<!-- Page Header-->
	<div class="page-header no-margin-bottom">
	  <div class="container-fluid">
	    <h2 class="h5 no-margin-bottom">Area</h2>
	  </div>
	</div>
	<!-- Breadcrumb-->
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Area</a></li>
        <li class="breadcrumb-item active">List </li>
        <span class="text-danger">{{$errors->has('area_name') ? $errors->first('area_name') : ' '}}</span>
        <span class="text-danger">{{$errors->has('description') ? $errors->first('description') : ' '}}</span>
      </ul>
    </div>
    

    <section class="no-padding-top">
    	<div class="container-fluid">
            <div class="row">
            	<div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#areaModal">NEW</button></strong></div>
                  <div class="table-responsive"> 
                    <table id="example" class="table table-striped">
                      <thead>
                        <tr>
                          <th class="text-center">#</th>
                          <th class="text-center">Area</th>
                          <th class="text-center">Description</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@php($i=1)
                      	@foreach($areas as $area)
                        <tr>
                          <th scope="row" class="text-center">{{$i++}}</th>
                          <td class="text-center">{{$area->area_name}}</td>
                          <td class="text-center">{{Str::words($area->description,5)}}</td>
                          <td class="text-center">
                          		<!-- @if($area->status == 1)
                          		<a href="javascript:void(0)" data-id="{{$area->id}}" id="active" class="active_a btn btn-sm btn-success">Active</a>
                          		@else
                          		<a href="#" class="btn btn-sm btn-primary">Inactive</a>
                          		@endif -->

														<label class="switch">
														  <input class="toggle-class" data-toggle="toggle" type="checkbox" data-id="{{$area->id}}" {{ $area->status == true ? 'checked' : ''}}>
														  <span class="slider round"></span>
														</label>
                          </td>
                          <td class="text-center">
                          
                          	<a href="" class="edit" data-toggle="modal" data-target="#areaUpdateModal" data-id="{{$area->id}}" id="areaId"><i class="fa fa-edit fa-2x"></i></a>
                          	<a href="{{route('delete',['id'=>$area->id])}}" class="delete-confirm"><i class="fa fa-trash fa-2x"></i></a>

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

	<!-- Modal area -->
	<div class="modal fade" id="areaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">New Location</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="{{route('area_new')}}" method="POST" >
	      	@csrf
		      <div class="modal-body">
	              <div class="form-group">
	                <label>Name</label>
	                <input type="text" id="area_name" name="area_name" placeholder="Enter location name..." class="form-control">
	                
	              </div>
	              <div class="form-group">       
	                <label>Description</label>
	                <input type="text" name="description" placeholder="Description..." class="form-control">
	                
	              </div>
	              <div class="form-group">
              		  <div class="i-checks">
                        <input id="radioCustom1" type="radio" value="1" name="status" class="radio-template">
                        <label for="radioCustom1">Active</label>
                      </div>
                      <div class="i-checks">
                        <input id="radioCustom2" type="radio" checked="" value="0" name="status" class="radio-template">
                        <label for="radioCustom2">Inactive</label>
                      </div>
                  </div>
	          </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>

	<!-- Modal area update -->
	<div class="modal fade" id="areaUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Update Location</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="{{route('update_area')}}" method="POST" >
	      	@csrf
		      <div class="modal-body">
	              <div class="form-group">
	              	<input type="hidden" id="area_id" name="areaId" >
	                <label>Name</label>
	                <input type="text" id="area" name="area_name" placeholder="Enter location name..." class="form-control">
	                <span class="text-danger">{{$errors->has('area_name') ? $errors->first('area_name') : ' '}}</span>
	              </div>
	              <div class="form-group">       
	                <label>Description</label>
	                <input id="description" type="text" name="description" placeholder="Description..." class="form-control">
	                <span class="text-danger">{{$errors->has('description') ? $errors->first('description') : ' '}}</span>
	              </div>
	              <div class="form-group">
              		  <div class="i-checks">
                        <input id="radio1" type="radio" value="1" name="status" class="radio-template">
                        <label for="radioCustom1">Active</label>
                      </div>
                      <div class="i-checks">
                        <input id="radio2" type="radio" checked="" value="0" name="status" class="radio-template">
                        <label for="radioCustom2">Inactive</label>
                      </div>
                  </div>
	          </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-sm btn-primary">Update Changes</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>






@endsection
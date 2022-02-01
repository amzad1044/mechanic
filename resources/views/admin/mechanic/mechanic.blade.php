@extends('admin.master')

@section('body')
	<!-- Page Header-->
	<div class="page-header no-margin-bottom">
	  <div class="container-fluid">
	    <h2 class="h5 no-margin-bottom">Mechanics</h2>
	  </div>
	</div>
	<!-- Breadcrumb-->
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Mechanic</a></li>
        <li class="breadcrumb-item active">List</li>
        <span class="text-danger">{{$errors->has('mech_name') ? $errors->first('mech_name') : ' '}}</span>
        <span class="text-danger">{{$errors->has('nid') ? $errors->first('nid') : ' '}}</span>
        <span class="text-danger">{{$errors->has('phone') ? $errors->first('phone') : ' '}}</span>
        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ' '}}</span>
        <span class="text-danger">{{$errors->has('cat_id') ? $errors->first('cat_id') : ' '}}</span>
        <span class="text-danger">{{$errors->has('area_id') ? $errors->first('area_id') : ' '}}</span>
        <span class="text-danger">{{$errors->has('rate') ? $errors->first('rate') : ' '}}</span>
        <span class="text-danger">{{$errors->has('img') ? $errors->first('img') : ' '}}</span>
      </ul>

    </div>

      <section class="no-padding-top">
    	<div class="container-fluid">
            <div class="row">
            	<div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#mechModal">NEW</button></strong></div>
                  <div class="table-responsive"> 
                    <table id="example" class="table table-striped">
                      <thead>
                        <tr>
                          <th class="text-center">#</th>
                          <th class="text-center">Name</th>
                          <th class="text-center">NID</th>
                          <th class="text-center">Phone</th>
                          <th class="text-center">Category</th>
                          <th class="text-center">Area</th>
                          <th class="text-center">Rate</th>
                          <th class="text-center">Total Work</th>
                          <th class="text-center">Image</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@php($i=1)
                      	@foreach($mechs as $mech)
                        <tr>
                          <th scope="row" class="text-center">{{$i++}}</th>
                          <td class="text-center">{{$mech->mech_name}}</td>
                          <td class="text-center">{{$mech->nid}}</td>
                          <td class="text-center">{{$mech->phone}}</td>
                          <td class="text-center">{{$mech->name}}</td>
                          <td class="text-center">{{$mech->area_name}}</td>
                          <td class="text-center">{{$mech->rate}}</td>
                          <td class="text-center">{{$mech->total_work}}</td>
                          <td class="text-center">
                          	<img src="{{asset($mech->img)}}" height="80" width="80">
                          </td>

                          <td class="text-center">
                          	<label class="switch">
														  <input class="toggle-class-mech" data-toggle="toggle" type="checkbox" data-id="{{$mech->id}}" {{ $mech->status == true ? 'checked' : ''}}>
														  <span class="slider round"></span>
														</label>
                          	<a href="{{route('mechEdit',['id'=>$mech->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                          	<a href="{{route('deletemech',['id'=>$mech->id])}}" class="delete-confirm"><i class="fa fa-trash fa-2x"></i></a>
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

<!-- Mechanic save modal -->
    <div class="modal fade" id="mechModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Create New</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="{{route('saveMech')}}" enctype="multipart/form-data" method="POST" >
	      	@csrf
		      <div class="modal-body">
		      	<div class="row">
	              <div class="col-md-6 form-group">
	                <label>Name</label>
	                <input type="text" id="name" name="mech_name" placeholder="Enter name..." class="form-control"> 
	              </div>
	              <div class="col-md-6 form-group">       
	                <label>Rate</label>
	                <input type="number" name="rate" placeholder="Rate..." class="form-control">
	              </div>
	          	</div>

		      	<div class="row">
	              <div class="col-md-6 form-group">
	                <label>Phone</label>
	                <input type="text" id="phone" name="phone" placeholder="Enter phone number..." class="form-control"> 
	              </div>
	              <div class="col-md-6 form-group">
	                <label>Email</label>
	                <input type="text" id="email" name="email" placeholder="Enter email..." class="form-control"> 
	              </div>
	          	</div>
		      	<div class="row">
	              <div class="col-md-6 form-group">
	                <label>Category</label>
	                <select class="form-control" name="cat_id">
	                	<option>--Select Category--</option>
	                	@foreach($cats as $cat)
	                	<option value="{{$cat->id}}">{{$cat->name}}</option>
	                	@endforeach
	                </select>
	              </div>
	              <div class="col-md-6 form-group">
	                <label>Area</label>
	                <select class="form-control" name="area_id">
	                	<option>--Select Area--</option>
	                	@foreach($areas as $area)
	                	<option value="{{$area->id}}">{{$area->area_name}}</option>
	                	@endforeach
	                </select>
	              </div>
	          	</div>

	              <div class="form-group">
	                <label>Nid</label>
	                <input type="text" id="nid" name="nid" placeholder="Enter Nid here..." class="form-control"> 
	              </div>

	              <div class="form-group">       
	                <label>Image</label>
	                <input type="file" name="img" >
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
@endsection
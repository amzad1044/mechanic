@extends('admin.master')

@section('body')
	<!-- Page Header-->
	<div class="page-header no-margin-bottom">
	  <div class="container-fluid">
	    <h2 class="h5 no-margin-bottom">Category</h2>
	  </div>
	</div>
	<!-- Breadcrumb-->
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Category</a></li>
        <li class="breadcrumb-item active">List</li>
        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ' '}}</span>
        <span class="text-danger">{{$errors->has('description') ? $errors->first('description') : ' '}}</span>
        <span class="text-danger">{{$errors->has('img') ? $errors->first('img') : ' '}}</span>
      </ul>
    </div>

     <section class="no-padding-top">
    	<div class="container-fluid">
            <div class="row">
            	<div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#catModal">NEW</button></strong></div>
                  <div class="table-responsive"> 
                    <table id="example" class="table table-striped">
                      <thead>
                        <tr>
                          <th class="text-center">#</th>
                          <th class="text-center">Name</th>
                          <th class="text-center">Description</th>
                          <th class="text-center">Image</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@php($i=1)
                      	@foreach($cats as $cat)
                        <tr>
                          <th scope="row" class="text-center">{{$i++}}</th>
                          <td class="text-center">{{$cat->name}}</td>
                          <td class="text-center">{{Str::words($cat->description,4)}}</td>
                          <td class="text-center">
                          	<img src="{{asset($cat->img)}}" height="80" width="80">
                          </td>
                          <td class="text-center">
														<label class="switch">
														  <input class="toggle-class-cat" data-toggle="toggle" type="checkbox" data-id="{{$cat->id}}" {{ $cat->status == true ? 'checked' : ''}}>
														  <span class="slider round"></span>
														</label>
                          </td>
                          <td class="text-center">
                          	<a href="" class="editcat" data-toggle="modal" data-target="#catUpdateModal" data-id="{{$cat->id}}"><i class="fa fa-edit fa-2x"></i></a>
                          	<a href="{{route('deletecat',['id'=>$cat->id])}}" class="delete-confirm"><i class="fa fa-trash fa-2x"></i></a>
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


<!-- Category save modal -->
    <div class="modal fade" id="catModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">New Category</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="{{route('newcat')}}" enctype="multipart/form-data" method="POST" >
	      	@csrf
		      <div class="modal-body">
		      	
	              <div class="form-group">
	                <label>Name</label>
	                <input type="text" id="name" name="name" placeholder="Enter category name..." class="form-control">
	                
	              </div>
	              <div class="form-group">       
	                <label>Description</label>
	                <input type="text" name="description" placeholder="Description..." class="form-control">
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


		<!-- Modal Category update -->
	<div class="modal fade" id="catUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Update Category</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="{{route('update_cat')}}" method="POST"  enctype="multipart/form-data">
	      	@csrf
		      <div class="modal-body">
	              <div class="form-group">
	              	<input type="hidden" id="catId" name="catId" >
	                <label>Name</label>
	                <input type="text" id="cat_name" name="cat_name" class="form-control">
	                
	              </div>
	              <div class="form-group">       
	                <label>Description</label>
	                <input id="description" type="text" name="description" class="form-control">
	               
	              </div>
	              <div class="form-group">       
	                <label>Image</label>
	                <input type="file" name="img" >
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
		        <button type="submit" class="btn btn-sm btn-primary">Update</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>

@endsection
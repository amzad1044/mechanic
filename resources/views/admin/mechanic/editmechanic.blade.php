@extends('admin.master')

@section('body')
	<!-- Page Header-->
	<div class="page-header no-margin-bottom">
	  <div class="container-fluid">
	    <h2 class="h5 no-margin-bottom">Edit Mechanic</h2>
	  </div>
	</div>
	<!-- Breadcrumb-->
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Edit</a></li>
        <li class="breadcrumb-item active">Modify</li>
      </ul>
    </div>

<section class="no-padding-top">
	<div class="container-fluid">
		<div class="row">
      <div class="col-lg-12">
      	<div class="block margin-bottom-sm">

				  <div class="container">
						<div id="accordion">
						    <div class="row">
						        <div class="col-lg-12">
						            <div class="text-center">
						                <h3>Update mechanics here</h3>
						            </div>
						        </div>
						    </div>

						    <div class="card card-default">
						        <div id="collapse1" class="collapse show">
						        	<form action="{{route('updatemechanic')}}" method="POST" enctype="multipart/form-data">
						  							@csrf

						            <div class="card-body">
						                <div class="row">
						                    <div class="col-md-3 col-lg-4">
						                        <div class="form-group">
						                            <label class="control-label">Name</label>
						                            <input type="text" name="mech_name" value="{{$mechs->mech_name}}" class="form-control" />
						                            <input type="hidden" value="{{$mechs->id}}" name="id">
						                        </div>
						                    </div>
						                    <div class="col-md-1 col-lg-4">
						                        <div class="form-group">
						                            <label class="control-label">Email</label>
						                            <input type="text" name="email" value="{{$mechs->email}}" class="form-control" />
						                        </div>
						                    </div>
						                    <div class="col-md-1 col-lg-1">
						                        <div class="form-group">
						                            <label class="control-label">Update</label>

						                            <input type="file" name="updatemechimg" id="img" style="display:none;" onchange="previewFile(this);"/>
																				<label for="img"><P class="btn btn-sm btn-info">Change</P></label>

						                        </div>
						                    </div>

						                    <div class="col-md-2 col-lg-3">
						                        <div class="form-group">
						                            <img id="previewImg"  class="float-right" src="{{asset($mechs->img)}}" height="150" width="150"  />
						                            </div>
						                        </div>
						                </div>

						                <div class="row">
						                    <div class="col-md-4 col-lg-4">
						                        <div class="form-group">
						                            <label class="control-label">Phone</label>
						                            <input type="text" name="phone" value="{{$mechs->phone}}" class="form-control" />
						                        </div>
						                    </div>
						                    <div class="col-md-2 col-lg-3">
						                        <div class="form-group">
						                        	<label class="control-label">Location</label>
						                            <select class="form-control" name="area_id">
												                	<option>--Select Area--</option>
												                	@foreach($areas as $area)
												                	<option value="{{$area->id}}" {{ $area->id == $mechs->area_id ? 'selected' : '' }}>{{$area->area_name}}</option>
												                	@endforeach
	                											</select>
						                        </div>
						                    </div>

						                    <div class="col-md-3 col-lg-3">
						                        <div class="form-group">
						                        	<label class="control-label">Category</label>
						                            <select class="form-control" name="cat_id">
												                	<option>--Select Category--</option>
												                	@foreach($cats as $cat)
												                	<option value="{{$cat->id}}" {{ $cat->id == $mechs->cat_id ? 'selected' : '' }}>{{$cat->name}}</option>
												                	@endforeach
	                											</select>
						                        </div>
						                    </div>

						                    <div class="col-md-3 col-lg-2">
						                        <div class="form-group">
						                            <label class="control-label">Rate</label>
						                            <input type="text" name="rate" value="{{$mechs->rate}}" class="form-control" />
						                        </div>
						                    </div>
						                </div>



						                <div class="row">
						                    <div class="col-md-3 col-lg-8">
						                        <div class="form-group">
						                            <label class="control-label">NID</label>
						                            <input type="text" name="nid" value="{{$mechs->nid}}" class="form-control" />
						                        </div>
						                    </div>
						                    <div class="col-md-3 col-lg-4">
						                        <div class="form-group">
						                            <label class="control-label">Total work</label>
						                            <input type="number" name="total_work" value="{{$mechs->total_work}}" class="form-control" />
						                        </div>
						                    </div>
						                </div>
							                <div class="pull-right margin-bottom-sm">
											            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Submit</button>
											        </div>
											        
						                </div>
						                </form>
						            </div>
						        </div>
						    </div>
    
    						<br />
						</div>
						<!-- End container -->

					</div>
				</div>
			</div>

	</div>
</section>

@endsection
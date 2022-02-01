@extends('admin.master')
@section('body')
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong>New Clients</strong>
                    </div>
                    <div class="number dashtext-1">{{$customers->count()}}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-contract"></i></div><strong>Users</strong>
                    </div>
                    <div class="number dashtext-2">{{$users->count()}}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Mechanics</strong>
                    </div>
                    <div class="number dashtext-3">{{$mechs->count()}}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Total Hire</strong>
                    </div>
                    <div class="number dashtext-4">{{$hirecount->count()}}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              @php($i=1)
              @foreach (array_slice($mechs->toArray(), 0, 3) as $mech)
              <div class="col-lg-4">
                <div class="user-block block text-center">
                  <div class="avatar"><img src="{{asset($mech['img'])}}" alt="..." class="img-fluid">
                    <div class="dashbg-1 order">{{$i++}}sL</div>
                  </div><a href="#" class="user-title">
                    <h3 class="h5">{{$mech['mech_name']}}</h3><span>{{$mech['email']}}</span></a>
                  <div class="contributions">{{$mech['total_work']}} Contributions</div>
                </div>
              </div>
              @endforeach
            </div>
            
           
          </div>
        </section>

        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="block">
                  <div class="title"><strong>Mechanic</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-sm">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>phone</th>
                          <th>Work</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php($i=1)
                        @foreach (array_slice($mechs->toArray(), 0, 10) as $mech)
                        <tr>
                          <th scope="row">{{$i++}}</th>
                          <td>{{$mech['mech_name']}}</td>
                          <td>{{$mech['phone']}}</td>
                          <td>{{$mech['total_work']}}</td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">                                           
                <div class="messages-block block">
                  <div class="title"><strong>New Hire</strong></div>
                  <div class="messages">
                    @foreach($hires as $hire)
                      <a href="#" class="message d-flex align-items-center">
                        <div class="profile">
                            <img src="{{asset('admin/img/download.png')}}" alt="..." class="img-fluid">
                            <div class="status busy"></div>
                        </div>
                        <div class="content">   <strong class="d-block">{{$hire->cust_name}}</strong><small class="date d-block">{{ $hire->created_at->format('d-m-Y H:i') }}</small>
                        </div>
                      </a>
                      
                      @endforeach
                    
                      
                  </div>
              </div>
            </div>

          </div>
        </section>
@endsection

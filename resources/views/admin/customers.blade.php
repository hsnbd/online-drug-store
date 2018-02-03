@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>


    <div class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Customers Table</h3>

                    <div class="box-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-striped table-hover">
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Join</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                              <td>{{$user->id}}</td>
                              <td>
                                  @if ($user->provider)
                                      <i title="This user registered using {{$user->provider}}" class="fa fa-{{$user->provider}}"></i> &nbsp; &nbsp;
                                  @endif
                                  {{$user->name}}
                              </td>
                              <td>{{$user->created_at->toFormattedDateString()}}</td>
                              <td>
                                  {{-- <span class="label {{$user->status ? 'label-success': 'label-danger'}}">
                                      <a title="{{$user->status ? 'Click to Inactive Custommer': 'Click to Active Custommer'}}" style="color:white" href="{{route('customers.status', $user->id)}}">
                                          {{$user->status ? 'Active': 'Inactive'}}
                                      </a>
                                  </span> --}}
                                  @if ($user->status)
                                      <span class="label label-success">
                                          <a title="Click to Inactive Custommer" style="color:white" href="{{route('customers.status', $user->id)}}">
                                              Active
                                          </a>
                                      </span>
                                  @else
                                      <span class="label label-danger">
                                          <a title="Click to Active Custommer" style="color:white" href="{{route('customers.status', $user->id)}}">
                                              Inactive
                                          </a>
                                      </span>
                                  @endif
                              </td>
                              <td>
                                  <a href="{{route('customers.show', $user->id)}}"><i class="fa fa-eye text-primary"></i></a>
                                  &nbsp;
                                  <a href="{{route('customers.edit', $user->id)}}"><i class="fa fa-edit text-info"></i></a>
                                  &nbsp;
                                 <a href="{{route('customers.destroy', $user->id)}}"><i class="fa fa-trash text-danger"></i></a>
                             </td>
                            </tr>
                        @endforeach
                    </table>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer clearfix">
                    {{ $users->links() }}
                  </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
@endsection

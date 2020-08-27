@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">manage Customer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Customer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <section class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3>Customer List
                  <a class="btn btn-success float-right btn-sm" href="{{route('customers.add')}}"><i class="fa fa-plus-circle"></i>
                    Add Customer
                  </a>
                </h3>
              </div>
              
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>SL.</th>
                      <th>Name</th>
                      <th>Mobile No</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($allData as $key => $customer)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$customer->name}}</td>
                      <td>{{$customer->mobile_no}}</td>
                      <td>{{$customer->email}}</td>
                      <td>{{$customer->address}}</td>
                      <td>
                        <a title="Edit" class="btn btn-sm btn-primary" href="{{route('customers.edit',$customer->id)}}"><i class="fa fa-edit"></i></a>
                        <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{route('customers.delete',$customer->id)}}"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  @endsection

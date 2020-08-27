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
                <h3>Add Customer
                  <a class="btn btn-success float-right btn-sm" href="{{route('customers.view')}}"><i class="fa fa-list"></i>
                    Customer List
                  </a>
                </h3>
              </div>

              <div class="card-body">
                <form method="post" action="{{route('customers.store')}}" id="myForm" enctype="multipart/form-data">
                  @csrf
                  <div class="form-row">

                    <div class="form-group col-md-6">
                      <label for="name">Customer Name</label>
                      <input type="text" name="name" class="form-control">
                      <font style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="mobile_no">Mobile No</label>
                      <input type="text" name="mobile_no" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control">
                      <font style="color: red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="address">Address</label>
                      <input type="text" name="address" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                      <input type="submit" value="submit" class="btn btn-primary">
                    </div>

                  </div>
                </form>
              </div><!-- /.card-body -->
            </div>
          </section>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript">
  $(function () {
    $('#myForm').validate({
      rules: {
        name: {
          required: true,
        },
        mobile_no: {
          required: true,
        },
        address: {
          required: true,
        },
      },
      messages: {
        
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>
  @endsection

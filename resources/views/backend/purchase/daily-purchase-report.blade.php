@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">manage Purchase Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Purchase</li>
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
                <h3>Select Criteria
                  <!-- <a class="btn btn-success float-right btn-sm" href=""><i class="fa fa-list"></i>
                    Invoice List
                  </a> -->
                </h3>
              </div>

              <div class="card-body">
                  <form method="GET" action="{{route('purchase.report.pdf')}}" target="_blank" id="myForm">
                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <label>Start Date</label>
                      <input type="text" name="start_date" placeholder="YYYY-MM-DD" readonly id="start_date" class="form-control datepicker form-control-sm">
                    </div>

                    <div class="form-group col-md-4">
                      <label>End Date</label>
                      <input type="text" name="end_date" placeholder="YYYY-MM-DD" readonly id="end_date" class="form-control datepicker1 form-control-sm">
                    </div>

                    <div class="form-group col-md-1" style="padding-top: 30px;">
                      <button type="submit" class="btn btn-primary btn-sm">Search</button>
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

  <!-- <script src="{{asset('public/backend/dist/js')}}/handlebars.min.js"></script> -->

<!-- <script src="{{asset('public/backend')}}/plugins/jquery/jquery1.js"></script>

<script src="{{asset('public/backend')}}/plugins/moment/moment.min.js"></script>

<script src="{{asset('public/backend')}}/plugins/daterangepicker/daterangepicker.js"></script> -->

<script>
  $('.datepicker').datepicker({
    uiLibrary: 'bootstrap4',
    format : 'yyyy-mm-dd'
  });
  $('.datepicker1').datepicker({
    uiLibrary: 'bootstrap4',
    format : 'yyyy-mm-dd'
  });
</script>
<script type="text/javascript">
  $(function () {
    $('#myForm').validate({
      rules: {
        start_date: {
          required: true,
        },
        end_date: {
          required: true,
        }
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

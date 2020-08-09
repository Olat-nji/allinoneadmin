
@extends('admin.layouts.main')

@section('content') <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ $page['title'] }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ $page['title'] }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Generate a New Table</h3>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ url('admin/tables/create/2') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="name" class="form-control" name="name" placeholder="Enter Table Name" required>
                  </div>


                    <!-- select -->
                    <div class="form-group">
                      <label>Automatic Generate</label>
                      <select class="custom-select" name="auto-generate" required>
                        <option value="none">None</option>
                        <option value="blog">Blog</option>
                        <option value="newsletter">Newsletter</option>
                        <option value="sms">SMS Notification</option>
                        <option value="contact">Contact Form</option>

                      </select>
                    </div>



                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Continue</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->



          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>  @endsection

@section('scripts')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).on('click', '.btn-add', function(e) {
                e.preventDefault();

                var tableFields = $('.table-fields'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(tableFields);

                newEntry.find('input').val('');
                tableFields.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span class="fa fa-minus"></span>');
            }).on('click', '.btn-remove', function(e) {
                $(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
            });

        });
    </script>
@endsection

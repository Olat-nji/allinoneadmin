
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
            <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Fields</h3>
                </div>
                <div class="card-body ">
                 <div class="table-fields row">
                     @isset($fields)
                       @else
                       <div class="entry col-md-6 mb-60">
                        <div class="form-group">

                       <label>Name</label>
                           <input class="form-control" name="fields[]" type="text" placeholder="Field Name" required="true">
                       </div>



                           <div class="form-group">
                               <label>Type</label>
                           <select name="fields_type[]" class="custom-select">
                               <option value="text">Text</option>
                               <option value="mediumtext">Mediumtext</option>
                               <option value="longtext">Longtext</option>
                               <option value="image">Image</option>
                               <option value="file">Other file Types (PDF,DOCX)</option>
                               <option value="string">String</option>
                               <option value="char">Char</option>
                               <option value="varchar">Varchar</option>
                               <option value="password">Password</option>
                               <option value="email">Email</option>
                               <option value="date">Date</option>
                               <option value="datetime">Datetime</option>
                               <option value="time">Time</option>
                               <option value="timestamp">Timestamp</option>
                               <option value="binary">Binary</option>
                               <option value="number">Number</option>
                               <option value="integer">Integer</option>
                               <option value="bigint">Bigint</option>
                               <option value="mediumint">Mediumint</option>
                               <option value="tinyint">Tinyint</option>
                               <option value="smallint">Smallint</option>
                               <option value="boolean">Boolean</option>
                               <option value="decimal">Decimal</option>
                               <option value="double">Double</option>
                               <option value="float">Float</option>
                               <option value="json">Json</option>
                               <option value="jsonb">Jsonb</option>
                           </select>
                           </div>
                           <div class="form-group">
                           <label>Required</label>
                           <select name="fields_required[]" class="form-control">
                               <option value="0">No</option>
                               <option value="1">Yes</option>
                           </select>
                       </div>

                           <button class="btn btn-success btn-add inline btn-sm" type="button">
                               <span class="fa fa-plus"></span>
                           </button>

                   </div>
                     @endisset($fields)
                 <div class="entry col-md-6 mb-60">
                       <div class="form-group">

                      <label>Name</label>
                          <input class="form-control" name="fields[]" type="text" placeholder="Field Name" required="true">
                      </div>



                          <div class="form-group">
                              <label>Type</label>
                          <select name="fields_type[]" class="custom-select">
                              <option value="text">Text</option>
                              <option value="mediumtext">Mediumtext</option>
                              <option value="longtext">Longtext</option>
                              <option value="image">Image</option>
                              <option value="file">Other file Types (PDF,DOCX)</option>
                              <option value="string">String</option>
                              <option value="char">Char</option>
                              <option value="varchar">Varchar</option>
                              <option value="password">Password</option>
                              <option value="email">Email</option>
                              <option value="date">Date</option>
                              <option value="datetime">Datetime</option>
                              <option value="time">Time</option>
                              <option value="timestamp">Timestamp</option>
                              <option value="binary">Binary</option>
                              <option value="number">Number</option>
                              <option value="integer">Integer</option>
                              <option value="bigint">Bigint</option>
                              <option value="mediumint">Mediumint</option>
                              <option value="tinyint">Tinyint</option>
                              <option value="smallint">Smallint</option>
                              <option value="boolean">Boolean</option>
                              <option value="decimal">Decimal</option>
                              <option value="double">Double</option>
                              <option value="float">Float</option>
                              <option value="json">Json</option>
                              <option value="jsonb">Jsonb</option>
                          </select>
                          </div>
                          <div class="form-group">
                          <label>Required</label>
                          <select name="fields_required[]" class="form-control">
                              <option value="0">No</option>
                              <option value="1">Yes</option>
                          </select>
                      </div>

                          <button class="btn btn-success btn-add inline btn-sm" type="button">
                              <span class="fa fa-plus"></span>
                          </button>

                  </div>
                </div>
              </div>
              </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Generate</button>
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

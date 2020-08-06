<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('admin.includes.head')
<body>
<body class="hold-transition register-page">
<div class="register-box" id="app">
  <div class="register-logo">
    <a href="#"><b>All-In-One</b> Admin</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Create a New Organization</p>

      <form action="{{ url('admin/company') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name of Organization" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Organization Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="input-group mb-3">
          <input type="tel" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('phone')
          <span class="invalid-feedback" role="alert" style="display: block;">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control  @error('address') is-invalid @enderror" placeholder="Address" name="address" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('address')
          <span class="invalid-feedback" role="alert" style="display: block;">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" name="logo" class="custom-file-input  @error('logo') is-invalid @enderror" id="customFile" required>
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
           <br>

            @error('logo')
            <span class="invalid-feedback" role="alert" style="display: block;">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
          </div>

        <div class="row">

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Create</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->

</body>
</html>
@include('admin.includes.foot')
<script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
    </script>


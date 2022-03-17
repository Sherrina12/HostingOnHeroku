<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-PORTFOLIO</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../backend/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../backend/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="backend/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>






 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Update Education</h1>
          </div>
          <div class="col-sm-8">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/adminedu">Home</a></li>
              <li class="breadcrumb-item active">Update Form</li>
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
          <div class="col-md-12" style="padding-right: 250px">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">My Education</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form action="/editedu" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="id"> ID </label>
                    <input type="hideen"  class="form-control" name="id" value="{{ $edu['id'] }}">                  </div>
                  <div class="form-group">
                    <label for="edutitle">School Title</label>
                    <input type="text" class="form-control" name="edutitle" value={{ $edu['edutitle']}}>
                </div>
                <div class="form-group">
                    <label for="edudesc">School Description</label>
                    <input type="text" class="form-control" name="edudesc" value={{ $edu['edudesc']}}>
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- bs-custom-file-input -->
<script src="../../backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- Page specific script -->
<script>
    $(function () {
      bsCustomFileInput.init();
    });
    </script>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../../backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../backend/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../../backend/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../../backend/plugins/raphael/raphael.min.js"></script>
<script src="../../backend/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../backend/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../../backend/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../../backend/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../backend/dist/js/pages/dashboard2.js"></script>
</body>
</html>






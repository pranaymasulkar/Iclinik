<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">




    <!-- Content Header (Page header) -->
    <div class="content-header fixed">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content vh-100">
        <div class="d-flex justify-content-center align-items-stretch">
            <div class="col-12 col-md-5">
                <img src="dist/img/loginbanner.png" class="img-fluid w-100" alt="">
            </div>
            <div class="col-12 col-md-7 d-flex justify-content-center align-items-start p-5">
                <div class="card w-100 m-5">
                    <div class="card-header text-center">
                        <p>Welcome to <a href="#">iClinik</a></p>
                        <h1>Sign Up</h1>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm">
                        <div class="card-body">
                            <div class="form-group">
                                <label >Full Name</label>
                                <input type="text" name="text" class="form-control" placeholder="Enter your profile name">
                            </div>
                            <div class="form-group">
                                <label >Email</label>
                                <input type="text" name="text" class="form-control" placeholder="Enter your email address">
                            </div>
                            <div class="form-group">
                                <label >Address</label>
                                <input type="text" name="text" class="form-control" placeholder="Enter your full address">
                            </div>
                            <div class="form-group">
                                <label>Qualification</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Select your higher qualification</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Qualification</label>
                                <input type="text" name="text" class="form-control" placeholder="Select your higher qualification">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.content -->



</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

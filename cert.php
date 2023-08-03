<?php
include 'inc/header.php';
session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['name'])) {
  header('Location:login.php');
}

?>


<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php
    include 'inc/navbar.php';
    include 'inc/sidebar.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Registration</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Register child</h3>
            </div>
          <form action="reg.php" class="form" method="POST">
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Where Born</label>
              <input type="text" name="place" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Name if Any</label>
              <input type="text" name="another_name" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Date of Birth</label>
              <input type="date" name="date" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Date of register</label>
              <input type="date" name="register_date" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Name and Surname of Father</label>
              <input type="text" name="surname" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Father Occupation and Residence</label>
              <input type="text" name="father_occupation" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Father Nationality</label>
              <input type="text" name="father_nationality" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Mother and Maiden of Mother</label>
              <input type="text" name="mother_maiden" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Mother's Nationality</label>
              <input type="text" name="mother_nationality" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Signature of Registrig Officer</label>
              <input type="text" name="signature" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Gender</label>
              <input type="text" name="sex" class="form-control" id="validationDefault01"><br>
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">code</label>
              <input type="text" name="code" class="form-control" id="validationDefault01"><br>
            </div>

            <div class="col-12">
              <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
            </div>
          </form>
        </div>
        </div>
      </div>
      </section>



      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- /.row (main row) -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include 'inc/footer.php';
  ?>

  <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <?php
  include 'inc/script.php';
  ?>
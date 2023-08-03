<?php
session_start();

include 'inc/header.php';
include_once 'conf/db.php';



if (!isset($_SESSION['email']) && !isset($_SESSION['name'])) {
  header('Location:login.php');
}


$sql = "SELECT * FROM certficate";
$result = $conn->query($sql);

?>


<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php
    include 'inc/navbar.php';
    include 'inc/sidebar.php';
    ?>
    <script src="modal.js"></script>
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
        <!-- Small boxes (Stat box) -->

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">List of Children</h3>


              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Place</th>
                    <th>Date of Birth</th>
                    <th>Surname of Father</th>
                    <th>Mother's Nationality</th>
                    <th>Father's Nationality</th>
                    <th>Gender</th>
                    <th>Action</th>
                  </tr>

                  <?php
                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                  ?>

                      <tr>
                        <td><?= $row["id"] ?>
                        <td><?= $row["name"] ?></td>
                        <td><?= $row["place"] ?></td>
                        <td><?= $row["date"] ?></td>
                        <td><?= $row["father_occupation"] ?></td>
                        <td><?= $row["mother_nationality"] ?></td>
                        <td><?= $row["father_nationality"] ?></td>
                        <td><?= $row["gander"] ?></td>
                        <td>

                         <button data-toggle="modal" data-target="#modal-default" name="edit" type="button" class="btn btn-success"><ion-icon name="create-outline"></ion-icon></button>
                         <button type="button" class="btn btn-info"><ion-icon name="eye-outline"></ion-icon></button>
                          <button type="button" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>


                        </td>
                      </tr>




                  <?php

                    }
                  } else {
                    echo 'No data';
                  }

                  ?>



                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include 'inc/footer.php';
    ?>

    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./modal -->

  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Register Form</h4>
        </div>
        <div class="modal-body">
          <form action="edit.php" class="row">
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="validationDefault01">
              
            </div>
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Where Born</label>
              <input type="text" name="place" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Date of Birth</label>
              <input type="date" name="date" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Name and Surname of Father</label>
              <input type="text" name="surname" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Mother's Nationality</label>
              <input type="text" name="mother_nationality" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Father Nationality</label>
              <input type="text" name="father_nationality" class="form-control" id="validationDefault01">
            </div>

            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Gender</label>
              <input type="text" name="sex" class="form-control" id="validationDefault01"><br>
            </div>
          </form>
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" name="sv">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /.modal-content -->
  </div>
  </div>
  <!-- /.modal-dialog -->
  </div>
  <?php
  include 'inc/script.php';
  ?>
</body>
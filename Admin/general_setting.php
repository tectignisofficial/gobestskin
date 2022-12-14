<?php
 include("include/config.php");

 if(isset($_POST['update'])){
    $mobile_no=$_POST['mobile'];
    $email=$_POST['email'];
    $branch_address_1=$_POST['address1'];
    $branch_address_2=$_POST['address2'];
    $branch_address_3=$_POST['address3'];
    $branch_address_4=$_POST['address4'];
    $branch_address_5=$_POST['address5'];
    $sql=mysqli_query($conn,"UPDATE `general_setting` SET `mobile_no`='$mobile_no',`email`='$email',`branch_address_1`='$branch_address_1',`branch_address_2`='$branch_address_2',`branch_address_3`='$branch_address_3',`branch_address_4`='$branch_address_4',`branch_address_5`='$branch_address_5'");

    if($sql){
        echo "<script>alert('Successfully Submitted')</script>";
    }
    else{
        echo "<script>alert('error')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | About Us</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->
        <?php
  include("include/header.php");
  ?>
        <!-- Main Sidebar Container -->

        <?php
  include("include/sidebar.php");
  ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">General Setting</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">General Setting</li>
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
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Setting Update</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <?php   
                                $sql=mysqli_query($conn,"select * from  `general_setting` ");
                        $count=1;
                        while($row=mysqli_fetch_array($sql)) {
                         ?>
                                <form method="post">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputText">Mobile No.</label>
                                            <input type="tel" class="form-control" id="mobile" name="mobile" value="<?php echo $row['mobile_no']; ?>" placeholder="Mobile No.">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Enter Email">
                                        </div>   
                                        <div class="form-group">
                                            <label for="exampleInputText">Branch Address 1</label>
                                            <textarea class="form-control" rows="3" id="address1" name="address1" value="<?php echo $row['branch_address_1']; ?>" placeholder="Enter ..."><?php echo $row['branch_address_1']; ?></textarea>
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputText">Branch Address 2</label>
                                            <textarea class="form-control" rows="3" id="address2" name="address2" value="<?php echo $row['branch_address_2']; ?>" placeholder="Enter ..."><?php echo $row['branch_address_2']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText">Branch Address 3</label>
                                            <textarea class="form-control" rows="3" id="address3" name="address3" value="<?php echo $row['branch_address_3']; ?>" placeholder="Enter ..."><?php echo $row['branch_address_3']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText">Branch Address 4</label>
                                            <textarea class="form-control" rows="3" id="address4" name="address4" value="<?php echo $row['branch_address_4']; ?>" placeholder="Enter ..."><?php echo $row['branch_address_4']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText">Branch Address 5</label>
                                            <textarea class="form-control" rows="3" id="address5" name="address5" value="<?php echo $row['branch_address_5']; ?>" placeholder="Enter ..."><?php echo $row['branch_address_5']; ?></textarea>
                                        </div>                                    
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" name="update" id="update" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                                <?php $count++; } ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
  include("include/footer.php");
  ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <!-- <script>
        $(document).ready(function () {
            $('.delbtn').click(function (e) {
                e.preventDefault();
                let delid = $(this).data('id');
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            swal("Poof! Your imaginary file has been deleted!", {
                                icon: "success",
                            });
                            window.location.href = "newsletter.php?delid" + delid;
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });
            })
        });
    </script> -->
</body>

</html>
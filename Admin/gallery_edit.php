<?php include("include/config.php");
$id=$_GET['id'];

if (isset($_POST['update'])){
    $name=$_POST['client_name'];
    $gallery_service=$_POST['gallery_service'];
    $image1=$_POST['image_1'];
    $image2=$_POST['image_2'];

    $sql=mysqli_query($conn,"UPDATE `gallery` SET `client_name`='$client_name',`gallery_service`='$gallery_service',`image_1`='$image_1',`image_2`='$image_2'");

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
                            <h1 class="m-0">Gallery</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Gallery
                                </li>
                                <li class="breadcrumb-item active">Edit Details</li>
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
                                    <h3 class="card-title">Edit Details</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <?php   
                                $sql=mysqli_query($conn,"select * from  `gallery` where id='$id'");
                        $count=1;
                        $row=mysqli_fetch_array($sql);
                         ?>
                                <form>            
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputText">Client Name</label>
                                            <input type="text" class="form-control" id="" name="" value="<?php echo $row['client_name']; ?>"
                                                placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Service</label>
                                            <select class="form-control"  name="" id="">
                                                <option value="">Select Service</option>
                                                <?php 
                                                  $query=mysqli_query($conn,"select * from service");
                                                  while($sql=mysqli_fetch_array($query))
                                                  {
                                                ?>
                                                <option value="<?php echo $sql['id']; ?>" <?php if($sql['service_name']==$row['service']){ echo 'selected'; } ?>>
                                                    <?php echo $sql['service_name']; ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image 1</label>
                                            <div class="" style="margin-bottom: 10px;">
                                                <img src="dist/img/gallery/<?php echo $row['image_1']; ?>" width="80" height="80">
                                            </div>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="" name="">
                                                    <label class="custom-file-label" for="exampleInputFile"><?php echo $row['image_1']; ?></label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image 2</label>
                                            <div class="" style="margin-bottom: 10px;">
                                                <img src="dist/img/gallery/<?php echo $row['image_2']; ?>" width="80" height="80">
                                            </div>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="" name="">
                                                    <label class="custom-file-label" for="exampleInputFile"><?php echo $row['image_2']; ?>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                            <label for="inputPass"><?php echo $row['image_2']; ?></label>
                                            <input type="file" name="image1" class="form-control" id="inputimg"
                                                placeholder="image 1">
                                        
                                            </div>
                                        </div>                                                                      
                                        <!-- <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div> -->
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" name="update" id="update" class="btn btn-primary">Update</button>
                                    </div>                                   
                                </form>
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
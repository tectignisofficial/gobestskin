<?php
 include("include/config.php");
?>
<?php
if(isset($_POST['callback'])){
    date_default_timezone_set('Asia/Kolkata');
    $date=date('d/m/y h:i');
    $name=$_POST['name'];
    $no=$_POST['no'];
    $select_city=$_POST['select_city'];
    $select_service=$_POST['select_service'];
    $sql=mysqli_query($conn,"INSERT INTO `call_back`(`name`, `number`, `city`, `service`, `date`) VALUES ('$name','$no','$select_city','$select_service','$date')");
    if($sql==1){
        header('location:index.php');
    }
}

if(isset($_POST['subscribe_send'])){
    date_default_timezone_set('Asia/Kolkata');
    $date=date('d/m/y h:i');
    $email=$_POST['your-email'];
    $url=$_POST['url'];
    $sql=mysqli_query($conn,"INSERT INTO `subscribe`(`email`, `date`) VALUES ('$email','$date')");
    if($sql==1){
        header("location:".$url);
    }
}
?>
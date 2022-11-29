
<style>

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    .sidebar-contact {
        position: fixed;
        top: 50%;
        left: -350px;
        transform: translateY(-50%);
        width: 350px;
        height: auto;
        padding: 40px;
        background: #fff;
        box-shadow: 0 20px 50px rgba(0, 0, 0, .5);
        box-sizing: border-box;
        transition: 0.5s;
    }

    .sidebar-contact.active {
        left: 0;
    }

    .sidebar-contact input,
    .sidebar-contact select,
    .sidebar-contact textarea {
        width: 100%;
        height: 36px;
        padding: 5px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid rgba(0, 0, 0, .5);
        outline: none;
    }

    .sidebar-contact h2 {
        margin: 0 0 20px;
        padding: 0;
    }

    .sidebar-contact textarea {
        height: 60px;
        resize: none;
    }

    .sidebar-contact input[type="submit"] {
        background: #3fbbc0;
        color: white !important;
        cursor: pointer;
        border: none;
        font-size: 18px;
    }

    .toggle.active:before {
        content: '\f00d';
        font-family: fontAwesome;
        font-size: 18px;
        color: #fff;
        position: absolute;
        height: 48px;
        width: 48px;
        text-align: center;
        cursor: pointer;
        background: #f00;
        top: 0;
        right: -48px;
        line-height: 48px;
    }

    @media(max-width:1024px) {
        .toggle.active:before {
            top: -40px;
        }

        .sidebar-contact {
            width: 100%;
            left: -100%;
        }

        .sidebar-contact .toggle {
            top: 50%;
            transform: translateY(-50%);
            transition: 0.5s;
        }

        .sidebar-contact.active {
            top: 300px;
        }

        .sidebar-contact.active .toggle {
            top: 0;
            right: 0;
            transform: translateY(0);
        }

        .scroll {
            width: 100%;
            height: 100%;
            overflow-y: auto;
        }

        .content {
            padding: 50px 50px;
        }

        .hidepop {
            display: none;
        }
        .sidebar-contact input,select{
        border-left: none !important;
    border-color: #3fbbc0 !important;
    color:slategrey !important;
    }
    .sidebar-contact h2{
        font-size: 20px;
    padding: 0px 10% 20px;
    text-align: center;
    }
    }
    input,select {
        color:slategrey !important; 
    }

</style>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
if(isset($_POST['submit'])){
  
      $name= $_POST['name'];
$PhoneNumber = $_POST['PhoneNumber'];
$branch = $_POST['branch'];
$comments= $_POST['comments'];
$date= $_POST['date'];
$time= $_POST['time'];   

// configure
$from = 'Enquiry <info@sachinenterprise.in';
$sendTo = 'Enquiry <maheshniwate10@gmail.com>';
$subject = 'Book an Appointment Form';
$fields = array('name' => 'name', 'PhoneNumber' => 'PhoneNumber', 'branch' => 'branch', 'comments' => 'comments', 'date' => 'date', 'time' => 'time'); // array variable name => Text to appear in email
$okMessage = 'Thank You';
$errorMessage = 'There was an error while submitting the form. Please try again later';

// let's do the sending

try
{
    $emailText = "You have new message from contact form\n=============================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    mail($sendTo, $subject, $emailText, "From: " . $from);
    echo "<script>window.location.href='thankyou.php';</script>";
        //$responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    
    echo "<script>alert('$errorMessage');</script>";
    //$responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
else {
    echo $responseArray['message'];
}
   } 

?>
</head>


<body>
    <div class="sidebar-contact" style="z-index:9999999999999999;">
        <div class="toggle" onclick="div_hide()"></div>
        <h2>
            Our specialists will revert to answer all your queries.</h2>
        <div class="scroll">
            <form method="post" action="api.php">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input type="tel" class="form-control" name="no" id="email" placeholder="Your Mobile Number"
                                required>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
                    </div>
                    <select name="select_city" class="form-control" required="">
                                <option value="" disabled selected>Select City</option>
                                <?php 
                                $branchsql=mysqli_query($conn,"select * from branch");
                                 while($brancharr=mysqli_fetch_array($branchsql)){
                                ?>
                                <option value="<?= $brancharr['branch_name']; ?>"><?= $brancharr['branch_name']; ?></option>
                                <?php } ?>
                            </select>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
                    </div>
                    <select name="select_service" class="form-control" required="">
                                <option value="">Select Service</option>
                                <optgroup label="Unwanted Hair">
                                    <option value="Unwanted Hair">Permanent Laser Hair Removal</option>
                                </optgroup>
                                <optgroup label="Skin">
                                    <option value="Pimple Treatment">Pimple Treatment</option>
                                    <option value="Acne Scar Treatment">Acne Scar Treatment</option>
                                    <option value="Skin Whitening">Skin Whitening</option>
                                    <option value="Stretch marks treatment">Stretch marks treatment</option>
                                    <option value="Tattoo">Tattoo Removal Treatment</option>
                                    <option value="Pigmentation">Pigmentation Treatment</option>
                                    <option value="Dull Skin">Dull Skin Treatment</option>
                                    <option value="AntiAgeing">Anti Aging</option>
                                    <option value="Botox">Botox Treatment</option>
                                    <option value="Fillers">Fillers Treatment</option>
                                    <option value="Moles">Moles Removal</option>
                                    <option value="Warts">Warts Removal</option>
                                </optgroup>
                                <optgroup label="Hair">
                                    <option value="Hair Loss Treatment">Hair Loss Treatment</option>
                                    <option value="Hair Transplantation">Hair Transplantation</option>
                                </optgroup>
                                <optgroup label="Weight Loss">
                                    <option value="Inch Loss Treatment">Fat Loss/Inch Loss</option>
                                    <option value="Body Contouring">Body Contouring</option>
                                    <option value="Weight Loss">Weight Loss Treatment</option>
                                    <option value="Weight Management">Weight Management Program</option>
                                </optgroup>
                                <option value="Other">Others</option>
                            </select>
                </div>
             
                <input type="submit" name="callback" value="Request A Call Back" required>
            </form>
        </div>
    </div>




    <style>
        .element.style {
            padding-left: 82px;
        }

        .form-control {
            display: block;
            width: 100%;
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.5;
            color: rgb(33, 37, 41);
            background-color: rgb(255, 255, 255);
            background-clip: padding-box;
            appearance: none;
            padding: 0.375rem 0.75rem;
            border-width: 1px;
            border-style: solid;
            border-color: rgb(206, 212, 218);
            border-image: initial;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
        }
    </style>



    <script>
        $(document).ready(function () {
            $('.toggle1').click(function () {
                $('.sidebar-contact').toggleClass('active');
                $('.sidebar-contact').css('display', 'block');
                $('.toggle').toggleClass('active');
                $('.orange').css('display', 'none');
            });
            $('.toggle').click(function () {
                $('.sidebar-contact').fadeOut();
                $('.orange').css('display', 'block');
            })
        })
    </script>

    <script>
        $(document).ready(function () {
            date_default_timezone_set('Asia/Calcutta');
            $("#bookForm1").hide();
            $("#message").keyup(function () {
                time_val();
            });

            function time_val() {
                let time = $("#Visitortime2").val();
                if (time > 10 || time <= 20) {
                    $("#bookForm1").show().html("Please choose Appointment timing between 10:00 Am to 08:00pm")
                        .css("color", "red").focus();
                    return false;
                } else {
                    $("#bookForm1").hide();
                }
            }
        });
    </script>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/crm/forget_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Sep 2019 13:43:01 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Forget Password</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../assets/dist/img/ico/favicon.png" type="image/x-icon">

        <!-- Bootstrap -->
        <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="../assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- pe-icon-7-stroke -->
        <link href="../assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link href="../assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="../assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="container-center">
                        <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-refresh-2"></i>
                            </div>
                            <div class="header-title">
                                <h3>Password Reset</h3>
                                <small><strong>Please enter the otp which you received in your registered email address</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="username">OTP</label>
                                <input type="text" title="Please enter OTP" required="true" value="" name="votp" id="votp" class="form-control"><br>
                                <input type="submit" name="reset" id="reset" value="Reset" class="btn btn-add btn-block"><br>
                                <a href="sendotp.php" style="text-align: center;">Resend OTP?</a>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="../assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
    <?php
        if(isset($_POST['reset']))
        {
            session_start();
            $check = $_POST["votp"];
            if($check == $_SESSION["otp"])
                header('Location: newPassword.php');
            else
                echo "Invalid OTP";
        }
    ?>
<!-- Mirrored from thememinister.com/crm/forget_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Sep 2019 13:43:01 GMT -->
</html>
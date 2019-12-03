<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Login</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../assets/dist/img/ico/favicon.png" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Pe-icon-7-stroke -->
        <link href="../assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="../assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
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
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h2>Login</h2>
                                <span><br></span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="varification.php" id="loginForm" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="username">Usertype</label><br>
                                <select name="usertype" id="usertype">
                                    <option value="1">Principal</option>
                                    <option value="2">Admission Coordinator</option>
                                    <option value="3">Head of the department</option>
                                    <option value="4">Faculty</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                            </div>
                            <div>
                                <input type="SUBMIT" value="Login" class="form-control" >
                            </div> 
                            <br>
                            <a href="../ForgetPassword/forget_password.php" style="text-align: center;">Forget Password?</a>
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
</html>
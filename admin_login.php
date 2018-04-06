<?php
    session_start();

?>

<?php include("inc/head.php");?>

<body style="background: url('2.jpg');background-size:cover;background-position:bottom;">
    <!-- Content Wrapper -->

    <div class="login-wrapper">
        <div class="container-center">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                            <h3> Login </h3>
                            <small><strong>Please enter your credentials to login.</strong></small>
                        </div>
                    </div>
                </div>
                <div class="panel-body">

                    <div id="loginForm">
                        <form method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="please enter username" required value="" name="username" id="user_name" class="form-control">
                                <span class="help-block small">Your unique username to software</span>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" placeholder="******" required value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Your Password</span>
                            </div>

                            <div>
                                <input class="btn btn-primary" type="submit" id="login" value="Login" name="login" />
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php 

    include("inc/db.php");
    if(isset($_POST['login'])){                                 
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $pass = mysqli_real_escape_string($con, $_POST['password']);                                    
        $select = "SELECT * FROM tbl_login WHERE username = '$username' AND password = '$pass'";
        $run = mysqli_query($con, $select);
        
        if(mysqli_num_rows($run) > 0)
        {
            $_SESSION['user_session'] = $username;
            echo "
            <script>
                window.location.href='index.php';
            </script>
            ";

        } 
        else {
            echo "<script> alert('username or password incorrect, try again with correct credentials?'); </script>";
        }
    }
?>

    <!-- /.content-wrapper -->
    <!-- jQuery -->
    <script src="../../public/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="../../public/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>
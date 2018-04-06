<?php session_start(); 

    if(!isset($_SESSION['user_session'])) {
        header("location: admin_login.php");
    } else {

?>
<?php include("inc/head.php");?>

    <body class="hold-transition sidebar-mini">        
        <!-- Site wrapper -->
        <div class="wrapper">
           
            <?php include("inc/top_nav.php");?>

                            <!-- =============================================== -->
                            <!-- Left side column. contains the sidebar -->
            <?php include("inc/left.php");?>

                <!-- =============================================== -->
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-user"></i>
                        </div>
                        <div class="header-title">
                            
                            <h1 style="margin-top:10px;">Add Hotel Here</h1>
                            <p></p>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <!-- Form controls -->
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="btn-group"> 
                                            <a class="btn btn-primary" href="view_hotel.php"> <i class="fa fa-home"></i>  View Hotel </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form class="col-sm-12" method="post" enctype="multipart/form-data">
                                            
                                

                                            <div class="col-sm-4 form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label>IP Address</label>
                                                <input type="text" name="ipaddress" class="form-control"  placeholder="Enter IP address"  required>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label>Runame</label>
                                                <input type="text" name="Runame" placeholder="Enter Runame" class="form-control" required>
                                            </div>
                                             <div class="col-sm-4 form-group">
                                                <label>Rpassword</label>
                                                <input type="password" name="Rpassword" placeholder="Enter Rpassword" class="form-control" required>
                                            </div>
                                              <div class="col-sm-4 form-group">
                                                <label>sql_server</label>
                                                <input type="text" name="sql_server" placeholder="Enter sql_server" class="form-control" required>
                                            </div>
                                              <div class="col-sm-4 form-group">
                                                <label>sa_password</label>
                                                <input type="password" name="sa_password" placeholder="Enter sa_password" class="form-control" required>
                                            </div>
                                              <div class="col-sm-4 form-group">
                                                <label>table_name</label>
                                                <input type="text" name="table_name" placeholder="Enter table_name" class="form-control" required>
                                            </div>
                                               <div class="col-sm-4 form-group">
                                                <label>field_name</label>
                                                <input type="text" name="field_name" placeholder="Enter field_name" class="form-control" required>
                                            </div>
                                              <div class="col-sm-12 reset-button">
                                                 
                                                 <button class="btn btn-success"  name="customer_submit">Save</button>
                                                 <button class="btn btn-warning" type="submit" name="seller_cancel">Cancel</button>
                                             </div>
                                         </form>

<?php
        include("inc/db.php");
    if(isset($_POST['customer_submit']))
    {
                                            
                                            $name = $_POST['name'];
                                            $ipaddress = $_POST['ipaddress'];
                                            $Runame= $_POST['Runame'];
                                            $Rpassword = $_POST['Rpassword'];
                                            $sql_server = $_POST['sql_server'];
                                             $sa_password = $_POST['sa_password'];
                                            $table_name = $_POST['table_name'];
                                            $field_name = $_POST['field_name'];
               
                                           
$insert_customer = "insert into tbl_customer (name, ipaddress,Runame,Rpassword,sql_server,sa_password,table_name,field_name) values('$name','$ipaddress','$Runame','$Rpassword','$sql_server','$sa_password','$table_name','$field_name') ";
        $run_customer = mysqli_query($con,$insert_customer);
        if($run_customer)
        {
            
            echo "
                <script>
                        swal({
                        title:'Hotel Added Successfully',
                        text:'By Admin',
                        icon:'success',
                        button:'OK',
                    }).then(()=>{window.location.href='add_hotel.php';});

                </script>
            ";

        }
        else
        {
            mysqli_error($con);
        }
                                               
 } 
                    
                
                
            ?>


                                     </div>
                                 </div>
                             </div>
                         </div>
                         
                     </section> <!-- /.content -->
                 </div> <!-- /.content-wrapper -->
                 

                 <?php include("inc/footer.php");
             }
             ?>
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
                                                <label>Sql Server</label>
                                                <input type="text" name="sql_server" placeholder="Enter sql server" class="form-control" required>
                                            </div>
                                              <div class="col-sm-4 form-group">
                                                <label>SA Password</label>
                                                <input type="text" name="sa_password" placeholder="Enter sa password" class="form-control" required>
                                            </div>
                                              <div class="col-sm-4 form-group">
                                                <label>Table Name</label>
                                                <input type="text" name="table_name" placeholder="Enter table name for Guest name" class="form-control" required>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label>Field Name</label>
                                                <input type="text" name="field_name" placeholder="Enter field name for Guest name" class="form-control" required>
                                            </div>


                                            <div class="col-sm-4 form-group">
                                                <label>Table Room no.</label>
                                                <input type="text" name="table_room_no" placeholder="Enter Table Name for Room no" class="form-control" required>
                                            </div>


                                            <div class="col-sm-4 form-group">
                                                <label>Field Room no.</label>
                                                <input type="text" name="field_room_no" placeholder="Enter Field Name for Room no" class="form-control" required>
                                            </div>

                                            <div class="col-sm-4 form-group">
                                                <label>Table Checkin</label>
                                                <input type="text" name="table_checkin" placeholder="Enter table name for checkin" class="form-control" required>
                                            </div>

                                            <div class="col-sm-4 form-group">
                                                <label>Field Checkin</label>
                                                <input type="text" name="field_checkin" placeholder="Enter field name for checkin" class="form-control" required>
                                            </div>


                                            <div class="col-sm-4 form-group">
                                                <label>Table Checkout</label>
                                                <input type="text" name="table_checkout" placeholder="Enter table name for Checkout" class="form-control" required>
                                            </div>


                                            <div class="col-sm-4 form-group">
                                                <label>Field Checkout</label>
                                                <input type="text" name="field_checkout" placeholder="Enter field name for Checkout" class="form-control" required>
                                            </div>

                                            <div class="col-sm-4 form-group">
                                                <label>Customer Type</label>
                                                <input type="text" name="customer_type" placeholder="Enter customer type" class="form-control" required>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label>Heritic Username</label>
                                                <input type="text" name="heritic_username" placeholder="Enter customer panel username" class="form-control" required>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label>Heritic Password</label>
                                                <input type="text" name="heritic_password" placeholder="Enter customer panel password" class="form-control" required>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label>Database Name</label>
                                                <input type="text" name="db_name" placeholder="Enter Database name" class="form-control" required>
                                            </div>



                                              <div class="col-sm-12 reset-button">
                                                 <center>
                                                 <button class="btn btn-primary" style="width:100px;"  name="customer_submit">Save</button>
                                                 <button class="btn btn-danger" style="width:100px;" type="submit" name="seller_cancel">Cancel</button>
                                                 </center>
                                             </div>

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
                                            $heritic_username = $_POST['heritic_username'];
                                            $heritic_password = $_POST['heritic_password'];
                                            $customer_type = $_POST['customer_type'];
                                            
                                            $table_room_no = $_POST['table_room_no'];
                                            $field_room_no = $_POST['field_room_no'];
                                            $table_checkin = $_POST['table_checkin'];
                                            $field_checkin = $_POST['field_checkin'];
                                            $table_checkout = $_POST['table_checkout'];
                                            $field_checkout = $_POST['field_checkout'];
                                            $db_name = $_POST['db_name'];

               
                                           
$insert_customer = "insert into tbl_customer (name, ipaddress,Runame,Rpassword,sql_server,sa_password,table_name,field_name, table_room_no,field_room_no,table_checkin,field_checkin,table_checkout,field_checkout,heritic_username,heritic_password,customer_type,db_name) values('$name','$ipaddress','$Runame','$Rpassword','$sql_server','$sa_password','$table_name','$field_name','$table_room_no','$field_room_no','$table_checkin','$field_checkin','$table_checkout', '$field_checkout','$heritic_username','$heritic_password','$customer_type','$db_name') ";
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
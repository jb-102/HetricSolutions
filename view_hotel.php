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
                              
                            <h1 style="margin-top:10px;">View all Hotels</h1>
                            <small></small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="btn-group"> 
                                            <a class="btn btn-success" href="add_hotel.php"> <i class="fa fa-plus"></i> Add Hotel
                                            </a>  
                                        </div>      
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="panel-header">

                                              </div>

                                          </div>
                                          <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>Name</th>
                                                        <th style="width:100px;">IP Address</th>
                                                        <th>Runame</th>
                                                        <th style="width:75px">Rpassword</th>
                                                        <th style="width:100px">Sql Server</th>
                                                        <th style="width:110px">Sa password</th>
                                                        <th style="width:110px">table Name</th>
                                                        <th style="width:110px">Field Name</th>
                                                        <th> Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
    <?php
        include("inc/db.php");
        $sno = 0 ;
        $select_customer = "select * from tbl_customer order by customer_id desc";
        $run_customer = mysqli_query($con , $select_customer);
        while ($row_customer = mysqli_fetch_array($run_customer)) 
        {
            $customer_id = $row_customer['customer_id'];
            $name = $row_customer['name'];
            $ipaddress = $row_customer['ipaddress'];
            $Runame= $row_customer['Runame'];
            $Rpassword = $row_customer['Rpassword'];
            $sql_server = $row_customer['sql_server'];
             $sa_password = $row_customer['sa_password'];
            $table_name = $row_customer['table_name'];
            $field_name = $row_customer['field_name'];
            $sno++ ;

    ?>
    <tr>  
        

         <td> <?php echo $sno;  ?></td>
         <td> <?php echo $row_customer['name']  ?></td>
         <td> <?php echo $row_customer['ipaddress']  ?></td>
         <td>  <?php echo $row_customer['Runame']  ?></td>
         <td>  <?php echo $row_customer['Rpassword']  ?></td>
         <td>   <?php echo $row_customer['sql_server']  ?></td>
         <td>   <?php echo $row_customer['sa_password']  ?></td>
         <td> <?php echo $row_customer['table_name']  ?></td>
         <td> <?php echo $row_customer['field_name']  ?></td>
         <td>
            
            <a href="edit_hotel.php?customer_id=<?=$customer_id?>" style="color:white"> 
                <button type="submit" name="edit" style="width:60px;" class="btn btn-info btn-xs">
                <i class="fa fa-pencil"></i> Edit
            </button>
            </a>
             <a href="?cust_id=<?=$customer_id?>" style="color:white"> 
                <button type="submit" name="delete" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ordine">
                <i class="fa fa-trash-o"></i> Delete
            </button>
            </a>

        </td>
    </tr>
    <?php
        }
    ?>                                                

                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </div>
</section> <!-- /.content -->


</div> <!-- /.content-wrapper -->


            <?php include("inc/footer.php"); } ?>



<?php
    if(isset($_GET['cust_id']))
    {
        $get_id = $_GET['cust_id'];
        $delete = "delete from tbl_customer where customer_id='$get_id' ";
        $run = mysqli_query($con , $delete);
        if ($run) {
            
            echo "
                <script>
                        swal({
                        title:'Hotel Deleted Successfully',
                        text:'By Admin',
                        icon:'success',
                        button:'OK',
                    }).then(()=>{window.location.href='view_hotel.php';});

                </script>
            ";
        }
        else
        {
            echo mysqli_error($con);
        }
    }

?>
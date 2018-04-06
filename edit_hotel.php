<?php session_start(); 

    if(!isset($_SESSION['user_session'])) {
        header("location: admin_login.php");
    } 
    else 
    {
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
                        <div class="header-birthday">
                            
                            <h1 style="margin-top:10px;">Edit Hotel Here</h1>
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
        <?php
    	if (isset($_GET['customer_id']))
    	 {
    		$customer_id=$_GET['customer_id'];
          
    		 include("inc/db.php");
            
    		 $qry= "SELECT * FROM tbl_customer WHERE customer_id=".$customer_id; 
    		   // Execute the query
    		  $edit_customer = mysqli_query($con , $qry);
            
            while ($row = mysqli_fetch_array($edit_customer)){
        ?>
             <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <!-- Form controls -->
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="btn-group"> 
                                            <a class="btn btn-primary" href="view_hotel.php"> <i class="fa fa-user"></i>  View  Hotel </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        
         	 <form  action="update_hotel.php" method="POST" class="col-sm-12" enctype="multipart/form-data" >
      
         <div >
        <input  type="hidden" name="customer_id" id="customer_id"  value="<?php echo $row['customer_id']; ?>" readonly="" >
        </div>
         <div class="col-sm-4 form-group">
        name<span>*</span>
        <input  type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" required=""  >
       </div>
        <div class="col-sm-4 form-group">
          ipaddress<span>*</span>
        <input  type="text" name="ipaddress" value="<?php echo $row['ipaddress']; ?>" class="form-control"  required="">
       </div>
        <div class="col-sm-4 form-group">
       Runame<span>*</span>
        <input  type="text" name="Runame" value="<?php echo $row['Runame']; ?>"  class="form-control" required="">
    </div>
     <div class="col-sm-4 form-group">
        Rpassword<span>*</span>
        <input  type="text" name="Rpassword" value="<?php echo $row['Rpassword']; ?>"  class="form-control" required="">
    </div>
     <div class="col-sm-4 form-group">
        sql_server<span>*</span>
        <input  type="text" name="sql_server" value="<?php echo $row['sql_server']; ?>"  class="form-control" required="">
    </div>
     <div class="col-sm-4 form-group">
        sa_password<span>*</span>
        <input  type="text" name="sa_password" value="<?php echo $row['sa_password']; ?>" class="form-control" required="">
    </div>
     <div class="col-sm-4 form-group">
        table_name<span>*</span>
        <input  type="text" name="table_name" value="<?php echo $row['table_name']; ?>"  class="form-control" required="">
    </div>
     <div class="col-sm-4 form-group">
         field_name<span>*</span>
        <input  type="text" name="field_name" value="<?php echo $row['field_name']; ?>" class="form-control" required="">
    </div>
    <br/> <br/> <br/> <br/>
          <div class="col-sm-12 reset-button">
        <a href="update_hotel.php?customer_id=<?php echo $row['customer_id']?>"><button  type="submit" name="update" class="btn btn-info">update</button></a>
       </div>
       </form>
<?php
        
	        }
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
             
             ?>
<?php session_start(); 

    if(!isset($_SESSION['user_session'])) {
        header("location: admin_login.php");
    } else {

?>

<?php include("inc/head.php");?>


<?php
    include("inc/db.php");

// $photo = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tbl_photo`");
// $row_photo = mysqli_fetch_array($photo);
// $photo_count = $row_photo['count'];

// $buyer_count = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tbl_video`");
// $row_buyer_count = mysqli_fetch_array($buyer_count);
// $buyer_count_value = $row_buyer_count['count'];

// $buyer_count1 = mysqli_query($con, "SELECT COUNT(*) AS `count` FROM `tbl_package`");
// $row_buyer_count1 = mysqli_fetch_array($buyer_count1);
// $buyer_count_value1 = $row_buyer_count1['count'];


?>

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
              <br>
            <!-- Main content -->
                <section class="content">
                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2 style="width:100%;text-align: right;">
                                            <span class="count-number"><?//=$photo_count?></span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-address-card-o"></i>
                                        <h4> Total Photos </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2 style="width:100%;text-align: right;">
                                            <span class="count-number"><?//=$buyer_count_value?></span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-address-card-o"></i>
                                        <h4>Total Video</h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2 style="width:100%;text-align: right;">
                                            <span class="count-number"><?//=$buyer_count_value1?></span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-inr"></i>
                                        <h4> Total Packages</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2 style="width:100%;text-align: right;">
                                            <span class="count-number">2</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                        <i class="fa fa-inr"></i>
                                        <h4>Total Profit</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <div class="row">
                        <!-- datamap -->
                        <!-- Bar Chart -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Travel Booking Details</h4>
                                    </div>
                                </div>
<style type="text/css">
    #mycanvas ,#mycanvasprofit
    {
        height:280px !important;
    }
</style>
                                <div id="chart-container">
                                    <table class="table table-responsive table-bordered" style="overflow:scroll;">
                                        <thead style="background: darkslategray;color:white;">
                                            <tr>
                                                <th>SNo.</th>
                                                <th> Name</th>
                                                <th>Customer Type</th>
                                                <th>IP Address</th>
                                                <th>Runame</th>
                                                <th>Rpassword</th>
                                                <th>Sql_server </th>
                                                <th>sa password</th>
                                                <th>table name</th>
                                                <th>field name</th>
                                                <th>Heritic Username</th>
                                                <th>Heritic Username</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center"><a href="booking.php"> view all</a></td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        
                                            <?php 
                                            
                                                include("inc/db.php");
                                                $sno = 0;
                                                $select = "SELECT * FROM `tbl_customer` order by customer_id desc LIMIT 6";
                                                $run = mysqli_query($con, $select);
                                                
                                                while($row = mysqli_fetch_array($run)){
                                                    
                                                    $id = $row['customer_id'];
                                                    $name = $row['name'];
                                                    $customer_type = $row['customer_type'];
                                                    $ipaddress = $row['ipaddress'];
                                                    $Runame = $row['Runame'];
                                                    $Rpassword = $row['Rpassword'];
                                                    $sql_server = $row['sql_server'];
                                                    $sa_password = $row['sa_password'];
                                                    $table_name = $row['table_name'];
                                                    $field_name = $row['field_name'];
                                                    $heritic_username = $row['heritic_username'];
                                                    $heritic_password = $row['heritic_password'];

                                                    $sno++;
                                                    
                                            ?>  
                                        
                                            <tr>
                                                <td><?php echo $sno; ?></td>
                                                
                                                <td>  <?php echo $name; ?>  </td>

                                                <td>  <?php echo $customer_type; ?>  </td>
                                                
                                                <td>  <?php echo $ipaddress; ?>  </td>

                                                <td>  <?php echo $Runame; ?>  </td>
                                                
                                                <td>  <?php echo $Rpassword; ?>  </td>
                                                
                                                <td>  <?php echo $sql_server; ?>  </td>
                                                
                                                <td>  <?php echo $sa_password; ?>  </td>
                                                
                                                <td>  <?php echo $table_name; ?>  </td>
                                                <td>  <?php echo $field_name; ?>  </td>
                                                <td>  <?php echo $heritic_username; ?>  </td>
                                                <td>  <?php echo $heritic_password; ?>  </td>
                                                
                                            </tr>
                                            
                                                <?php } ?>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                         <!-- Radar Chart -->

                         <!-- Radar Chart -->
                          <!-- calender -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12 hidden-lg hidden-md hidden-xs hidden-sm">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Calender</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <!-- monthly calender -->
                                    <div class="monthly_calender">
                                        <div class="monthly" id="m_calendar"></div>
                                    </div>
                                </div>
                                 <div id="map1" class=""></div>
                            </div>
                        </div>

                    </div> <!-- /.row -->
                </section> <!-- /.content -->

            </div> 
            <!-- /.content-wrapper -->
            <?php include("inc/footer.php");?>
<?php } ?>

<script type="text/javascript">
    setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 2000
                    };
                    toastr.success('Admin Panel', 'Welcome Herictic Solutions' );

                }, 1300);

</script>            
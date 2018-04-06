<?php include("inc/head.php");

$con = mysqli_connect("localhost", "root", "", "db_manzoor");


?>



    <body class="hold-transition sidebar-mini">        
        <!-- Site wrapper -->
        <div class="wrapper">
           
           

                <!-- =============================================== -->
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-user"></i>
                        </div>
                        <div class="header-birthday  row" >
                            
                            <h1 style="margin-top:10px; font-size: 20px">Customer Registration</h1>
                            <p></p>
                            
                        </div>
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <!-- Form controls -->
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                       
                                    </div>
                                    <div class="panel-body">
                                        <form class="col-sm-12" method="post" enctype="multipart/form-data">
                                            
                                <div class="col-sm-12 form-group">
                                    
                                    
                                </div>

                                           
                                            <div class="col-sm-6 form-group">
                                                <label>Room No.</label>
                                                <input type="text" name="room_no" class="form-control" placeholder="Enter Room No." required>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>User Name</label>
                                                <input type="text" name="user_name" placeholder="Enter User Name" class="form-control" required>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Birthday</label>
                                                <input type="date" name="birthday" class="form-control" placeholder="Birthday" required>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Mobile No.</label>
                                                <input type="text" name="mobile_no" class="form-control" placeholder="Enter Mobile No." required>
                                            </div>


                                              <div class="col-sm-12 reset-button">
                                                 
                                                 <button class="btn btn-success" type="submit" name="hotel_submit">Save</button>
                                                 <button class="btn btn-warning" type="submit" name="seller_cancel">Cancel</button>
                                             </div>
                                         </form>

<?php
        include("inc/db.php");
    if(isset($_POST['hotel_submit']))
    {                                         
                                            $category = $_POST['hotel_id'];
                                            $room_no = $_POST['room_no'];
                                            $user_name = $_POST['user_name'];
                                            $birthday = $_POST['birthday'];
                                            $mobile_no = $_POST['mobile_no'];

$insert_user = "insert into tbl_user (hotel_id, room_no,user_name,birthday,mobile_no) values('$category','$room_no','$user_name','$birthday','$mobile_no') ";
        $run_user = mysqli_query($con,$insert_user);
        if($run_user)
        {
            
            echo "
                <script>
                        swal({
                        birthday:'Hotel Added Successfully',
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
                 

             
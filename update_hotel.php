      <html>
<head>
	<title>
		
	</title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
      
</html>

<?php 


 include("inc/db.php");

if (isset($_POST['update'])) {
	 	

	       $customer_id = $_POST['customer_id'];
            $name = $_POST['name'];
            $ipaddress = $_POST['ipaddress'];
            $Runame= $_POST['Runame'];
            $Rpassword = $_POST['Rpassword'];
            $sql_server = $_POST['sql_server'];
            $sa_password = $_POST['sa_password'];
            $table_name = $_POST['table_name'];
            $field_name = $_POST['field_name'];

			$query = "UPDATE tbl_customer SET  name='$name' ,ipaddress='$ipaddress',Runame='$Runame',Rpassword='$Rpassword',sql_server='$sql_server',sa_password='$sa_password',table_name='$table_name',field_name='$field_name' WHERE customer_id=".$customer_id;

			$res=mysqli_query($con, $query);
			if ($res) {
				// header("Location:view_hotel.php");

				 echo "
                <script>
                        swal({
                        title:'Hotel Updated Successfully',
                        text:'By Admin',
                        icon:'success',
                        button:'OK',
                    }).then(()=>{window.location.href='view_hotel.php';});

                </script>
            ";

				
			
			}
			else {
				echo "there is a problem";
			}

	 	
	 }

 ?>
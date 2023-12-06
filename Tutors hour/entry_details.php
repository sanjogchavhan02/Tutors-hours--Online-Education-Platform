<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $gender = $_POST['gender'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $pass = $_POST['password'];

	 $sql_query = "INSERT INTO entry_details (first_name,last_name,gender,email,mobile,password)
	 VALUES ('$first_name','$last_name','$gender','$email','$phone','$pass')";

	 if (mysqli_query($conn, $sql_query)) 
	 {?>
		<script>
			alert("Registered Successfully");
		</script>
		<?php
		            header("location:index.php");

	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
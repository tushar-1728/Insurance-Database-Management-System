<?php
	
	session_start();
	

	$host = "localhost";
	$dbusername ="root";
	$dbpassword="";
	$dbname ="insurance";

	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

	

	$Ssn = $_GET['Ssn'];
	$Password = $_GET['Password'];
	
	
	// $presql1 = "SELECT Ssn FROM customer WHERE Ssn=$Ssn";
	// $preresult1 =mysqli_query($conn,$presql);
	// $row1 = $preresult->fetch_assoc();

	$presql = "SELECT Password FROM cust_password WHERE Ssn=$Ssn";
	$preresult =mysqli_query($conn,$presql);
	$row = $preresult->fetch_assoc();
	//$count=mysqli_num_rows($preresult);
	//echo $row['COUNTNO'];
	
	//echo $row[$Ssn];

					$sql2 = "SELECT * FROM payment" ;
					$pre2 =mysqli_query($conn,$sql2);
					$row2 = $pre2->fetch_assoc();
					$count=mysqli_num_rows($pre2)+1;



	if(!is_null($Ssn) && !is_null($Password))

	{
		if($row['Password']==$Password)
			{
				$sql = "SELECT Fname,Lname,DOB FROM customer WHERE Ssn=$Ssn" ;
				$pre =mysqli_query($conn,$sql);
				$row1 = $pre->fetch_assoc();
				// if($conn->query($sql)===TRUE){
				// 	echo "New record created successfully";
				// }
				// else{
				// 	echo "Error: " . $sql ."<br>" .$conn->error;
				// }
				echo "<h1 style='text-align:center;font-weight:20px;'>"."HELLO ".$row1['Fname']." ".$row1['Lname']."</h1>";
				$name = $row1['Fname'];
				$DOB = $row1['DOB'];

				$sql2 = "SELECT Ssn FROM payment WHERE Ssn=$Ssn" ;
				$pre2 =mysqli_query($conn,$sql2);
				$row2 = $pre2->fetch_assoc();

				echo "<br/><br/><br/>";

				if(!is_null($row2['Ssn'])){
					echo "<h1><br>PAYMENT ALREADY DONE<br></h1>";
				}
				else{
					echo "<h3><br><br>Doing payment...</h3>";


					
					$count +=1 ;

					$sql3 = "INSERT INTO payment VALUES('$count','$Ssn','$DOB','50000','11')";
					$conn->query($sql3);
					if($conn->query($sql3) ===TRUE){
						echo "<h3><i>Payment done successfully</i><h3>";
					}
					else{
						echo "<h3><br><br><br>couldn't do payment<h3>";
					}
				}
			}
		else
			{
				echo "Wrong password";
			}
	}
	else{
		echo "enter password or username";
	}
	// $sql = "SELECT SSN,DL_number FROM customer WHERE Ssn = $loginid ";

	// $result = mysqli_query($conn,$sql);

	// $row = $result->fetch_assoc();

	// // echo $row['SSN'] . " " . $row['DL_number'];

	// // echo "<br />".$logindl ." ". $loginid ;

	// $count = mysqli_num_rows($result);


	// if($count == 1){
	// 	// session_register($loginid);
	// 	$_SESSION['login_user'] = $loginid ;

	// 	//echo $row['Name'];
	// 	$sql1 = "SELECT * FROM customer" ;
	// 	$result1 = mysqli_query($conn,$sql1);

	// 	$row1 = $result1->fetch_assoc();

	// 	echo "<div id='name_of_user'>" ;
	// 		echo "HELLO USER :-               " . $row1['Name'] ."<br /> <br />"  ;
	// 	echo "</div>";

	// 	echo "<div id='details'>" ;
	// 		echo "YOUR SALARY IS :-           " . $row1['Salary'] ."<br /> <br />" ;
	// 	echo "</div>";

		
	// }
	// else
	// {
	// 	echo "entry not found in the database" ;
	// }


	$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="UI1style.css">
	<style type="text/css">
		
	</style>
</head>
<body>

</body>
</html>
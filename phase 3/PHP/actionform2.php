<style type="text/css">
	#name_of_user{
		font-family: sans-serif;
		font-style: italic;
		text-align: center;
		color: #8D7C7C;
		font-size: 40px;
		font-weight: 5px;
	}
	#details{
		text-align: 120px;
		text-shadow: 2px ;
		font-weight: 3px;
	}
</style>
<?php
	
	session_start();
	

	$host = "localhost";
	$dbusername ="root";
	$dbpassword="";
	$dbname ="insurance";

	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

	

	$Ssn = $_GET['Ssn'];
	$name = $_GET['Name'];
	$Salary = $_GET['Salary'];
	$commission = $_GET['Commission'];
	$password = $_GET['password'];
	
	$presql = "SELECT COUNT(*) AS COUNTNO FROM agent WHERE Ssn=$Ssn";
	$preresult =mysqli_query($conn,$presql);
	$row = $preresult->fetch_assoc();
	//$count=mysqli_num_rows($preresult);
	//echo $row['COUNTNO'];
	
	//echo $row[$Ssn];



	if(!is_null($Ssn) && !is_null($name) && !is_null($Salary) && !is_null($commission) )

	{
		if($row['COUNTNO']==0)
			{
				$sql = "INSERT INTO agent VALUES('$name','$Ssn','$Salary','$commission','0')" ;
				$sql1 = "INSERT INTO agnt_password VALUES('$Ssn','$password')" ;

				if($conn->query($sql)===TRUE && $conn->query($sql1)===TRUE){
					echo "New record created successfully";
				}
				else{
					echo "Error: " . $sql ."<br>" .$conn->error;
				}
			}
		else
			{
				echo "Agent Exists";
			}
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
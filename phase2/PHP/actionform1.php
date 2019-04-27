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
	$password = $_GET['password'];
	$Fname = $_GET['Fname'];
	$Minit = $_GET['Minit'];
	$Lname = $_GET['Lname'];
	$DOB = $_GET['DOB'];
	$income = $_GET['income'];
	$Policy_num = $_GET['Policy_num'];
	$phone = $_GET['Phone'];
	$Agent_id = $_GET['Agent_id'];
	$Purchase_date = $_GET['Purchase_date'];
	$Claim_num = $_GET['Claim_num'];

	$presql = "SELECT Ssn,Num_of_policy_done FROM agent WHERE Ssn = $Agent_id ";
	$preresult =mysqli_query($conn,$presql);
	$row = $preresult->fetch_assoc();
	$count=mysqli_num_rows($preresult);
	//echo $row[$Ssn];



	if(!is_null($Ssn) && !is_null($Fname) && !is_null($Lname) && !is_null($Minit) && !is_null($DOB) && !is_null($income) && !is_null($Policy_num) && !is_null($Agent_id) && !is_null($Purchase_date)
&& !is_null($phone))

	{
		if($count== 1)
			{
				$sql = "INSERT INTO customer VALUES('$Ssn','$Fname','$Minit','$Lname','$DOB','$income','$Policy_num','1234','$Agent_id','$Purchase_date','$Claim_num')" ;

				//---------------------------

				$sql1 = "INSERT INTO cust_password VALUES('$Ssn','$password')" ;

				$nn = 'Num_of_policy_done';
				
				$newval = $row[$nn] + 1;


				$updatesql = "UPDATE agent SET Num_of_policy_done = $newval WHERE Ssn = $Agent_id ";

				if($conn->query($sql) ===TRUE && $conn->query($sql1)===TRUE && $conn->query($updatesql) ===TRUE){
					echo "<h1 style='text-align:center'>";
					echo "New record created successfully";
					echo "</h1>";
				}
				else{
					echo "<h1 style='text-align:center'>";
					echo "Error: " . $sql ."<br>" .$conn->error;
					echo "</h1>";
				}
			}
		else
			{
				echo "Agent not found";
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
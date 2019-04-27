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

	$presql = "SELECT Password FROM agnt_password WHERE Ssn=$Ssn";
	$preresult =mysqli_query($conn,$presql);
	$row = $preresult->fetch_assoc();
	//$count=mysqli_num_rows($preresult);
	//echo $row['COUNTNO'];
	
	//echo $row[$Ssn];



	if(!is_null($Ssn) && !is_null($Password))

	{
		if($row['Password']==$Password)
			{
				$sql = "SELECT Name FROM agent WHERE Ssn=$Ssn" ;
				$pre =mysqli_query($conn,$sql);
				$row1 = $pre->fetch_assoc();
				// if($conn->query($sql)===TRUE){
				// 	echo "New record created successfully";
				// }
				// else{
				// 	echo "Error: " . $sql ."<br>" .$conn->error;
				// }
				echo "HELLO ".$row1['Name'];
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
	<style>
        #box {
            width: 625px;
            padding: 100px;
            position:relative;
            left:30%;
             }
        #inner{
            padding:50px;
            background-color:antiquewhite;
        }
        #sub {
            background-color: #f94f59;
            width: 200px;
            padding-left: 30px;
            padding-right: 30px;
            padding-top:12px;
            padding-bottom:12px;
        }
        #unoimg{
            height:850px;
            width:425px;
            position:relative;
            top:-950px;
            left:5%;
        }
        #duosimg {
            height: 850px;
            width: 425px;
            position: relative;
            top: -950px;
            left:40%;
        }
        #logo{
            position:relative;
            left:27%;
        }
    </style>
</head>
<body>
	<div id="box">
		<div style="background-color:#f94f59;color:aliceblue;font-size:25px;text-align:center">
            <br />
            <i></i>
            <br />
            <br />
            </div>
        <div id="inner">
	<form action="cusag.php">
		<input type="submit" name="submit" value="click to check which customer is handled by which agent">
	</form>
	 </div>
	 <br/><br/><br/><br/><br/>
	 <div style="background-color:#f94f59;color:aliceblue;font-size:25px;text-align:center">
            <br />
            <i>Best Employee </i>
            <br />
            <br />
            </div>
        <div id="inner">
	<form action="BestE.php">
		<input type="submit" name="submit" value="click to see our Employee results">
	</form>
	 </div>
    </div>
</body>
</html>
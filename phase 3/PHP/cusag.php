<?php
	session_start();
	

	$host = "localhost";
	$dbusername ="root";
	$dbpassword="";
	$dbname ="insurance";

	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

	

	
	//$count=mysqli_num_rows($preresult);
	//echo $row['COUNTNO'];
	
	//echo $row[$Ssn];



	if($conn)

	{
		
				$sql = "SELECT a.ssn AS SSN ,c.fname AS FNC ,c.lname AS LNC FROM (customer AS c JOIN (agent AS a))WHERE c.agent_id = a.ssn;

";

				$pre =mysqli_query($conn,$sql);
				$row1 = $pre->fetch_assoc();
				// if($conn->query($sql)===TRUE){
				// 	echo "New record created successfully";
				// }
				// else{
				// 	echo "Error: " . $sql ."<br>" .$conn->error;
				// }
				echo "<h3>AGENTS HANDLING CUSTOMERS:-</h3><br><br>";

					$Ssn = $row1["SSN"];
			        $fname = $row1["FNC"];
			        $lname = $row1["LNC"];
			        
			 		echo "<h4>";
			        echo "AGENT SSN:-  "." ".$Ssn." Handles "."Name :-  ".$fname." ".$lname;
			        echo "</h4><br>";

				while ($row1 = $pre->fetch_assoc()) {
						
				        $Ssn = $row1["SSN"];
				        $fname = $row1["FNC"];
				        $lname = $row1["LNC"];
				        
				 		echo "<h4>";
				        echo "AGENT SSN:-  "." ".$Ssn." Handles "."Name :-  ".$fname." ".$lname;
				        echo "</h4><br>";
    			}
				
		
	}
	else{
		echo "no connection";
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

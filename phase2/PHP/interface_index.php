<!DOCTYPE html>
<html>
<head>
	<title>
		INTERFACE
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<style type="text/css">
		#optionselected{
			width: 100px;
			margin: 20px auto;
    		border-radius: 6px;
    		box-shadow: 0px 1px 6px rgba(0,0,0,0.2);
		}
		#displayafter{
			width: 100px;
			margin: 20px auto;
    		border-radius: 6px;
    		box-shadow: 0px 1px 6px rgba(0,0,0,0.2);
		}
	</style>

</head>

<body>
	<div class="container">
		<h1 style="text-align: center;">
			INSURANCE POLICY
		</h1>

		<h3 style="color: #8D7C7C ">LOGIN :-</h3><br />
		<select id="optionselected" onchange="handleChange(event)">
			<option value="AGENT" id="agentoptionlogin">Agent</option>
			<option value="CUSTOMER" id="customeroptionlogin">Customer</option>
		</select>

		<hr />
		<br/>
		<br/>
		<div id="displayafter">
			<form id="agentLOGIN" method="GET" action="actionform2.php">
				SSN:
				<input type="textarea" name="agentID">
				Password:
				<input type="password" name="agentPASS"/>
				<br />
			</form>

		
			<form id="customerLOGIN" method="GET" action="actionform1.php">
				SSN<input type="textarea" name="SSN">
				DL Number<input type="text" name="DLnumber"/>
			</form>

			<br/>
			<br/>

			<button value="Submit" onclick="submitforms()">Submit</button>
		</div>
	</div>
	<script type="text/javascript" src="insurance.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>JOIN OUR TEAM</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="UI1style.css">
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
	<div class="container-fluid" align="center">
        <div class="topnav">
            <div id="ele1" style="padding-left: 220px; " align="center">
                <a href="UI_page1.html">Home</a>
                <a href="Products.html">Products</a>
                <a href="Group_Schemes.html">Group Schemes</a>
                <a href="Customer_Services.html">Customer Services</a>
                <a href="Premium_payment.html">Premium payment</a>
                <a href="Plan_nav.html">Plan Nav</a>
                <a href="Login.php">Login</a>
            </div>
        </div>
    </div>

	
	<div id="box">
		<div style="background-color:#f94f59;color:aliceblue;font-size:25px;text-align:center">
            <br />
            <i>JOIN OUR TEAM</i>
            <br />
            <br />
            </div>
        <div id="inner">
           <b><i> Enter The Following details:</i></b> <br /><br />
		<form class="container-fluid" method="GET" action="actionform2.php">
			<input placeholder="Ssn" type="text" name="Ssn"><br/><br/> 
			<input placeholder="password" type="text" name="password"><br/><br/> 
			<input placeholder="Name" type="text" name="Name"><br/><br/>
			<input placeholder="Salary" type="number" 
			name="Salary"><br/><br/>
			
			<input placeholder="Commission" type="number" name="Commission"><br/><br/>
			<input type="submit" name="submit" value="submit"><br/><br/>
		</form>
	</div>
</body>
</html>
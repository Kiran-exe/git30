<html>
<head><title>Donation</title></head>
<style type="text/css">
	body{
		background-image: url(purple.png);
		background-size: cover;
		background-repeat: no-repeat;
        background-position: right;
	}
	table tr th,
table tr td {
  border-right: 1px solid #bbb;
  border-bottom: 1px solid #bbb;
  padding: 5px;
}
.roundtable{
	background: #f8f8ff;
	border: 3px solid #000000;
	-webkit-border-radius: 15px; 
	border-radius: 15px;
}
</style>
<body>
	<div style="height: 80px; width= 100%">
		<legend><center><font size="30" color="black"><B>Receipt</B></font></center></legend></div>
<?php
if(isset($_GET['SUBMIT']))
{
	$amt = $_GET['amount'];
	$des = $_GET['description'];

    $servername="localhost";
	$username="Saurav04";
	$password="dbms2020";
	$database="temple";
	$conn=mysqli_connect($servername,$username,$password,$database);
	if(!$conn)
	{
		echo"An Error Occured <br>";
		exit;
	}

    $n = $_COOKIE["uid"];
    $s = $_COOKIE["uno"];
	$details = mysqli_query($conn,"SELECT max(did) as 'maximum' from donation");
	$row = mysqli_fetch_assoc($details);
	$max =$row['maximum'];
	$maxs = $max + 1;
	/*$amt = 500;
	$des ="Salary";*/

	$r = mysqli_query($conn,"insert into donation(did,cname,amount,description) values('$maxs','$s','$amt','$des')");
	if($r)
	{
		echo"<center><font size=20 color = #fff><B>Donated Succesfully!!!</B></center>";
		echo"<center><table cellspacing='4' class='roundtable'>
        <tr><td>Customer ID</td><td>$n</td></tr>
        <tr><td>Customer Name</td><td>$s</td></tr>
		<tr><td>Amount</td><td>$amt</td></tr>
		<tr><td>Description</td><td>$des</td></tr>
		</table></center>";
	}
}
?>
<center><button onclick="myfunc()">PRINT</button></center>
<script>
	function myfunc()
	{
		alert("Receipt is printed");
	}
</script>
</body>
</html>
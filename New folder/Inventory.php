<html>
<head><title>Inventory</title></head>
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
<div style="height:80px;width=100%">
<legend> <center><font size="30" color="black"> <B>Receipt</B></font></center></legend></div>

<?php

if(isset($_GET['SUBMIT']))
{
	$de = $_GET['Dealer'];
	$p = $_GET['Product'];
	$q = $_GET['Quantity'];
	$a = $_GET['Amount'];
	$d = $_GET['Date'];

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

	$number = mysqli_query($conn,"select max(e_id) as 'maximum' from expense");
	$row1 = mysqli_fetch_assoc($number);
	$max = $row1['maximum'];
	$maxs = $max + 1;

	$r = mysqli_query($conn,"insert into expense(e_id,dname,product,quantity,amount,date) values('$maxs','$de','$p','$q','$a','$d')");
	if($r)
	{
		echo"<center> <table cellspacing='4' class='roundtable'>
                <tr><td>Bill ID</td><td>$maxs  </td></tr>
                <tr><td>Dealer Name</td><td>$de  </td></tr>
                <tr><td>Product Name</td><td>$p</td></tr>
                <tr><td>Quantity</td><td>$q</td></tr>
                <tr><td>Amount</td><td>$a</td></tr>
                <tr><td>Date</td><td>$d</td></tr>
                </table></center>";
	}
	else
	{
		echo "Not Updated";
	}
}
?>
<center><button onclick="myfunc()">PRINT</button></center>
<script>
function myfunc()
{
alert("Receipt is Printed");
}
</script>
</body>
</html>
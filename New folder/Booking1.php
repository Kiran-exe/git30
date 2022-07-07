<html>
<head><title>Booking</title></head>
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
<div style="height: 80px; width=100%">
<legend> <center><font size="30" color="black"> <B>Receipt</B></font></center></legend></div>

<?php

if(isset($_GET['SUBMIT']))
{
	$btype = $_GET['btype'];
	$bd = $_GET['bdate'];
	$bt = $_GET['btime'];
	$i='';

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

    if($btype == "Hall Booking")
    {
    	$details = mysqli_query($conn,"select * from booking where b_type = '$btype' and bdate = '$bd' and btime = '$bt' ");
    	while ($row = mysqli_fetch_assoc($details))
    	{
    		static $i=0;
    		$bid[$i]=$row[0];
    		$cname[$i]=$row[1];
    		$b_type[$i]=$row[2];
    		$bdate[$i]=$row[3];
    		$btime[$i]=$row[4];
    		$amount[$i]=$row[5];
    		$i++;
    	}
    	if($i>0)
    	{
    		echo"<font size =20 color=red><center>Booking Full!!!<br>
    		      <a href='booking1.html'>Back to Profile</a></center></font>";
    	}
    	else
    	{
    	    $n = $_COOKIE["uid"];
    	    $s = $_COOKIE["uno"];
	        $number= mysqli_query($conn,"SELECT max(bid) as 'maximum' from booking");
			$row1=mysqli_fetch_assoc($number);
			$max = $row1['maximum'];
			$maxs =$max + 1;
			$a = 28000;
			$r = mysqli_query($conn,"insert into booking(bid,cname,b_type,bdate,btime,amount) values('$maxs','$s','$btype', '$bd', '$bt', '$a')");
			if($r)
			{
				echo "<center><font size=20,color=#fff ><B>Booked successfully!!!</B></font></center>";
                echo"<center><table cellspacing='4' class='roundtable'>
                <tr><td>Customer ID</td><td>$n</td></tr>
                <tr><td>Customer Name</td><td>$s</td></tr>
                <tr><td>Booking ID</td><td>$maxs  </td></tr>
                <tr><td>Booking for</td><td>$btype</td></tr>
                <tr><td>Date</td><td>$bd</td></tr>
                <tr><td>Time</td><td>$bt</td></tr>
                <tr><td>Amount</td><td>$a</td></tr>
                </table></center>";
			}
		}
	}
     if($btype == "VIP Darshan")
    {
    	$details = mysqli_query($conn,"select * from booking where b_type = '$btype' and bdate = '$bd' and btime = '$bt' ");
    	while ($row = mysqli_fetch_assoc($details))
    	{
    		static $i=0;
    		$bid[$i]=$row[0];
    		$cname[$i]=$row[1];
    		$b_type[$i]=$row[2];
    		$bdate[$i]=$row[3];
    		$btime[$i]=$row[4];
    		$amount[$i]=$row[5];
    		$i++;
    	}
    	if($i>0)
    	{
    		echo"<font size =20 color=red><center>Booking Full!!!<br>
    		      <a href='booking1.html'>Back to Profile</a></center></font>";
    	}
    	else
    	{
    	    $n = $_COOKIE["uid"];
    	    $s = $_COOKIE["uno"];
	        $number= mysqli_query($conn,"SELECT max(bid) as 'maximum' from booking");
			$row1=mysqli_fetch_assoc($number);
			$max = $row1['maximum'];
			$maxs =$max + 1;
			$a = 600;
			$r = mysqli_query($conn,"insert into booking(bid,cname,b_type,bdate,btime,amount) values('$maxs','$s','$btype', '$bd', '$bt', '$a')");
			if($r)
			{
				echo "<center><font size=20,color=#fff ><B>Booked successfully!!!</B></font></center>";
                echo"<center><table cellspacing='4' class='roundtable'>
                <tr><td>Booking ID</td><td>$maxs  </td></tr>
                <tr><td>Customer ID</td><td>$n</td></tr>
                <tr><td>Customer Name</td><td>$s</td></tr>
                <tr><td>Booking for</td><td>$btype</td></tr>
                <tr><td>Date</td><td>$bd</td></tr>
                <tr><td>Time</td><td>$bt</td></tr>
                <tr><td>Amount</td><td>$a</td></tr>
                </table></center>";
			}
		}
	}

	if($btype == "Abhishek")
    {
    	$details = mysqli_query($conn,"select * from booking where b_type = '$btype' and bdate = '$bd' and btime = '$bt' ");
    	while ($row = mysqli_fetch_assoc($details))
    	{
    		static $i=0;
    		$bid[$i]=$row[0];
    		$cname[$i]=$row[1];
    		$b_type[$i]=$row[2];
    		$bdate[$i]=$row[3];
    		$btime[$i]=$row[4];
    		$amount[$i]=$row[5];
    		$i++;
    	}
    	if($i>0)
    	{
    		echo"<font size =20 color=red><center>Booking Full!!!<br>
    		      <a href='booking1.html'>Back to Profile</a></center></font>";
    	}
    	else
    	{
    	    $n = $_COOKIE["uid"];
    	    $s = $_COOKIE["uno"];
	        $number= mysqli_query($conn,"SELECT max(bid) as 'maximum' from booking");
			$row1=mysqli_fetch_assoc($number);
			$max = $row1['maximum'];
			$maxs =$max + 1;
			$a = 3000;
			$r = mysqli_query($conn,"insert into booking(bid,cname,b_type,bdate,btime,amount) values('$maxs','$s','$btype', '$bd', '$bt', '$a')");
			if($r)
			{
				echo "<center><font size=20,color=#fff ><B>Booked successfully!!!</B></font></center>";
                echo"<center><table cellspacing='4' class='roundtable'>
                <tr><td>Booking ID</td><td>$maxs  </td></tr>
                <tr><td>Customer Name</td><td>$s</td></tr>
                <tr><td>Customer ID</td><td>$n</td></tr>
                <tr><td>Booking for</td><td>$btype</td></tr>
                <tr><td>Date</td><td>$bd</td></tr>
                <tr><td>Time</td><td>$bt</td></tr>
                <tr><td>Amount</td><td>$a</td></tr>
                </table></center>";
			}
		}
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

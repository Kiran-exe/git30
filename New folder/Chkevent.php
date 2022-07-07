<html>
<head><title>Events</title></head>
<style type="text/css">
	body{
		background-image: url(blue.jpg);
		background-size: cover;
		background-repeat: no-repeat;
        
	}
	table tr th,
table tr td {
  border-right: 1px solid #bbb;
  border-bottom: 1px solid #bbb;
  padding: 5px;
  color: purple;
}
.roundtable{
	background: #F5FFFA;
	border: 3px solid #000000;
	
}
</style>
<body vlink="black">
	<div style="height: 80px; width = 100%">
		<legend><center><font size="30" color="white"><B>Events</B></font></center></legend>
	</div>
	<br><br>
	<?php
	echo"<center>";

	echo"<br><br>";

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

	$r = mysqli_query($conn,"select * from eventadd");

	$head = array('Sr.No','Event','Date','Time');
	echo"<table cellspacing=2 class='roundtable'>";

	echo "<tr>";
	foreach($head as $value)
	{
		echo "<th>$value</th>";
	}
	echo "</tr>";

	while($row = mysqli_fetch_assoc($r))
	{
		echo"<tr>";
		echo"<td>$row[ea]</td>
		<td>$row[ename]</td>
		<td>$row[edate]</td>
		<td>$row[etime]</td>";
		echo "</tr>";

	}
	echo "</table>";
	echo "<br><br>";
	echo "<font size=4><a href='temple.php'><I>Click Here To Return Main Page</I></a></font>";
	?>
</body>
</html>
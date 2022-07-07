<html>
<head><title>Event</title></head>

<body vlink="black">
<?php
if(isset($_GET['SUBMIT']))
{
	$n = $_GET['select'];
	$d = $_GET['dt'];
	$t = $_GET['tm'];

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
    
   /* $n = "Aarti";
    $d = "2021/05/22";
    $t = "08:00 A.M"; */
    $number = mysqli_query($conn,"SELECT max(ea) as 'maximum' from eventadd");
    $row1 = mysqli_fetch_assoc($number);
    $max = $row1['maximum'];
    $maxs = $max + 1;
	$r = mysqli_query($conn,"INSERT into eventadd(ea,ename,edate,etime) values('$maxs','$n','$d','$t')");
	if($r)
	{
		echo "<center><font size= 10 color=firebrick><I><B>Event Added Successfully!!!<br></B></I></font>
		<a href='Adminprofile.html'>Back To Profile</center></a> ";
	}
	else
	{
		echo"<center><font size=7>Event Not Added";
		echo "<a href='Adminprofile.html'>Back To Profile</a> ";
	}
}
?>
</body>
</html>
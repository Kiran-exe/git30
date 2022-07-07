<html>
<body>
<?php 
if(isset($_GET['SUBMIT']))
{
	$aname = $_GET['aname'];
	$pass = $_GET['password'];

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

	$login = mysqli_query($conn,"select * from admin where aname='$aname' and password = '$pass'");
	while($row=mysqli_fetch_assoc($login));
	{
		static $i = 0;
		$a_id[$i] = $row[0];
		$aname[$i] = $row[1];
		$password[$i] = $row[2];
		$i++;
	}
	if($i>0)
	{
		header('Location:http://localhost/Project/Adminprofile.html');
	}
	else
	{
	  echo"Error Logging in---";
	  print"<br>";
	  echo"<a href ='adminlogin.html'>Back to login Page</a>";

	}
}
?>
</body>
</html>
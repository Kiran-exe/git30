<html>
<body bgcolor="palegoldenrod">

<?php
if(isset($_GET['SUBMIT']))
{
	$u = $_GET['uname'];
	$p = $_GET['pass'];
	$cp = $_GET['cpass'];

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

	if($cp==$p)
	{
		$details = mysqli_query($conn,"update userlogin set password = '$p' where uname = '$u'");
		if($details)
		{
			echo "<center><font size= 10 color=firebrick><I>New Password Set Successfully<br><br>
			<a href='Userlogin.html'></I></font></center>Proceed to login Page</a>";
		}
	}
	else
	{
		echo"<center>Error logging in!!!<br>
        Possible Causes of error.
        <br>* Duplicate User ID
        <br>* Password and Confirm Password fields are not same<br>";
        echo"<a href='Userlogin.html'> Back to Login Page</a>";
	}
}
?>
</body>
</html>

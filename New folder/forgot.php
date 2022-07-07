<?php

if(isset($_GET['SUBMIT']))
{
	$u = $_GET['uname'];
    $sp = $_GET['sports'];
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

    $forget = mysqli_query($conn,"select * from userlogin where uname='$u' and sports='$sp'");
    while($row = mysqli_fetch_row($forget))
    {
    	static $i = 0;
    	$uid[$i] = $row[0];
        $uname[$i] = $row[1];
        $mobile[$i] = $row[2];
        $password[$i] = $row[3];
        $sports[$i] = $row[4];

        $i++;
    }
    if($i>0)
{
header('Location:http://localhost/Project/New.html');
}

else
{
echo"Error in identification!!";
print"<br>";
echo"<a href='Userlogin.html'> Back to Login Page</a>";
}
}
?>


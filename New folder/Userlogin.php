    <?php

if(isset($_GET['SUBMIT']))
{
	$u = $_GET['uname'];
    $p = $_GET['password'];
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
  
	$login = mysqli_query($conn,"select * from userlogin where uname='$u' and password='$p'");
    while ($row = mysqli_fetch_row($login)) 
    {
    	static $i = 0;
    	$uid[$i] = $row[0];
        $uname[$i] = $row[1];
        $mobile[$i] = $row[2];
        $password[$i] = $row[3];
        $sports[$i] = $row[4];
        $i++;
    }
    setcookie('uno',$uname[0]);
    setcookie('uid',$uid[0]);
    if($i>0)
    {
       header('Location:http://localhost/Project/Userprofile.php');
    }
    else
    {
     echo"<center>Error Logging in!!</center>";
     print"<br><br>";
     echo"<center><a href='Userlogin.html'> Back to Login Page</a></center>";
    }
}
?>
	
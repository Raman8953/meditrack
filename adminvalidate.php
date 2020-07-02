<?php 
$db=mysqli_connect('localhost','root','','meditrack');
if(isset($_POST['alogin']))
{
$_adminid=mysqli_real_escape_string($db,$_POST['adminid']);
$_adminpass=mysqli_real_escape_string($db,$_POST['adminpass']);	
$user_check_query="select adminid,adminpass from admin";
$result=mysqli_query($db,$user_check_query);
if (mysqli_num_rows($result)>0) 
{
  while($row = mysqli_fetch_assoc($result)) { 
        
$_adminid=$row['adminid'];
$_adminpass=$row['adminpass'];
if($_adminid==$_adminid)
{
	if($_adminpass==$_adminpass)
	{
		header('Location:adminpage.php');
	}
}
 else
 {
	echo "<script> alert('invalid user') </script>";
	header('Location:alogin.php');
 }
  }
}

}
?>
<?php  
//check.php  
$connect = mysqli_connect("localhost", "root", "", "kontrol_db"); 
if(isset($_POST["noseri"]))
{
 
 $noseri = mysqli_real_escape_string($connect, $_POST["noseri"]);
 $query = "SELECT * FROM seri_off WHERE noseri_off = '".$noseri."'";
 $result = mysqli_query($connect, $query);
 echo mysqli_num_rows($result);

 }
?>
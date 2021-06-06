<?php 
require_once("includes/config.php");
// code for usid availablity
if(!empty($_POST["uscode"])) {
	$usid=$_POST["uscode"];
	
$sql ="SELECT UsId FROM tblusers WHERE UsId=:usid";
$query= $dbh->prepare($sql);
$query-> bindParam(':usid',$usid, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
echo "<span style='color:red'> User id already exists .</span>";
 echo "<script>$('#add').prop('disabled',true);</script>";
} else{
	
echo "<span style='color:green'> User id available for Registration .</span>";
echo "<script>$('#add').prop('disabled',false);</script>";
}
}

// code for emailid availablity
if(!empty($_POST["emailid"])) {
$usid= $_POST["emailid"];
$sql ="SELECT EmailId FROM tblusers WHERE EmailId=:emailid";
$query= $dbh -> prepare($sql);
$query-> bindParam(':emailid',$usid, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
echo "<span style='color:red'> Email id already exists .</span>";
 echo "<script>$('#add').prop('disabled',true);</script>";
} else{
	
echo "<span style='color:green'> Email id available for Registration .</span>";
echo "<script>$('#add').prop('disabled',false);</script>";
}
}




?>

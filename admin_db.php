<html>
<body><?php

	include("connectdb.php");

	$user = $_POST["adminid"];
	$pwd = $_POST["password"];
	
	$sql = "SELECT adminid, password from admin";
	$result = mysqli_query($conn,$sql);
	
	if($result)
  	{
  		while ($row=mysqli_fetch_row($result))
    	{
    		if($user==$row[0] && $pwd==$row[1])
    		{
    			header("Location: admin_view.php");
    			break;
    		}
    	}
  		mysqli_free_result($result);
	}
?>
</body>
</html>
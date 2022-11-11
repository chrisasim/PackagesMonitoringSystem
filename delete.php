<?php
require("db.php");
$query = "DELETE FROM users WHERE ID='". $_GET["id"]. "'";
if (mysqli_query($con, $query))
{
	echo "Record deleted successfully";
	header('Location: enrolledUsers.php');
}else
{
	echo "Error deleting record".mysqli_error($con);
}
mysqli_close($con);

?>
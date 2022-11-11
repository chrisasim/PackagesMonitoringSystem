<?php
require("db.php");
$query = "DELETE FROM designBox WHERE ID='". $_GET["id"]. "'";
if (mysqli_query($con, $query))
{
	echo "Record deleted successfully";
	header('Location: previewDesignBox.php');
}else
{
	echo "Error deleting record".mysqli_error($con);
}
mysqli_close($con);

?>
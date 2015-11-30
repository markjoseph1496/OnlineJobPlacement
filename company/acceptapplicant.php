<?php 
include('../connection.php');

if(isset($_GET['Accepted'])){
	$Accepted = $_GET['Accepted'];
	$RID = $_GET['id'];
	if($Accepted == 1){

		$qry = "UPDATE requesttocompanytbl SET Status = 'Accepted' WHERE RID = '$RID'";
		$result = mysql_query($qry);

		echo'
			<script type="text/javascript">
	            location.href="applicantlist.php?id=1";
	        </script>
	        ';
	}
	elseif($Accepted == 0){

		$qry = "UPDATE requesttocompanytbl SET Status = 'Rejected' WHERE RID = '$RID'";
		$result = mysql_query($qry);

		echo'
			<script type="text/javascript">
	            location.href="applicantlist.php?id=0";
	        </script>
	        ';

	}
}
?>
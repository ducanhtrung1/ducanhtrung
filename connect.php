<?php
$conn_string="host=ec2-18-214-119-135.compute-1.amazonaws.com port=5432 dbname=dcn2l34onuh0g3 user=gnhyavjavygcrj password=9fc64148d6d2e83d43e60c20567f140c6b2f3ae59cdf57e1876289acba55b0bd";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAccount WHERE user='".$username."' AND pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>

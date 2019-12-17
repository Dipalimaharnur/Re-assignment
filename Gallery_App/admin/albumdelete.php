<?php

$mykey1=$_REQUEST['del_id'];
$status='delete';

include 'connect.php';
mysqli_query($con,"update tbl_album set status='$status' where albumid = '$mykey1'");
echo "<script>location.href='viewalbums.php'</script>"

?>
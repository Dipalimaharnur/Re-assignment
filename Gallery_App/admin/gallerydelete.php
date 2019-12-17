<?php


$mykey1=$_REQUEST['del_id'];
$status='delete';

include 'connect.php';
mysqli_query($con,"update tbl_gallery set status='$status' where gid = '$mykey1'");
echo "<script>location.href='viewgallery.php'</script>"

?>
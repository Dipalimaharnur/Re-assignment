<?php
$ab=$_POST['gname'];

echo $ab;
header( "Location:addimages.php?id=$ab" );
?>
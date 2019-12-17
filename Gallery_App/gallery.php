<?php $aid=$_REQUEST['id']; ?>
<!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset="utf-8">
	<title>Gallery-Application</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="litebox-master/assets/css/litebox.css" rel="stylesheet" type="text/css" media="all" />

	<!-- The Menu -->
	<link href="stylesheets/styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="pe-icon-7-stroke/css/pe-icon-7-stroke.css">

	<!-- Optional - Adds useful class to manipulate icon font display -->
	<link rel="stylesheet" href="pe-icon-7-stroke/css/helper.css">

</head>
<body >
<!---->
	<div class="header">
	 <div class="container">
		 <div class="logo">
			 <a href="index.php"><h2>Gallery Application</h2></a>
		 </div>
		 <div class="top-menu">
				<ul>					 
                     <li><a href="admin/login.php">Admin panel</a></li>			 
				 </ul>
		 </div>
			 <!--script-nav-->
		  
	 </div>
</div>
<!--header-->
<div class="gallery-head">
 <?php  
 
							include 'connect.php';
							$sql = "SELECT * FROM tbl_album where albumid='$aid'";
							$rs_result = mysqli_query ($con,$sql);


####### Fetch Results From Table ########

while ($row = mysqli_fetch_assoc($rs_result)) 
{

$aname=$row['name'];
$adesc=$row['adesc'];
$astatus=$row['status'];

?>
	 <div class="gallery-info">
		 <div class="container">
			 <h2>Gallery Of <?php echo "$aname"; ?>  </h2>		 
		 </div>		 
	 </div>
	
		<div class="container">
			<div class="one-whole text-center">
            

				<?php } ?>
                <hr style="border:solid 1px;margin-top:0px;">
<p style="margin-left:75px">
				<?php  
		include "connect.php";

$sql = "SELECT * FROM tbl_gallery where aid=$aid and status='process'";
$num_rows = mysqli_num_rows(mysqli_query($con,$sql));		
####### Fetch Results From Table ########

$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
$gimage=$row['gimages'];

?>	
	
<?php	echo "<a href='admin/photo/$gimage' target='_self' class='inline-block litebox' data-litebox-group='group-1'><img src='admin/photo/$gimage' class='inline-block' height=200 width=200/></a> ";?>			
<?php } ?>				
</p>
				
</div>		

		
	</div>	
	</div>	




	<!-- Primary Page Layout
	================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="litebox-master/assets/js/smoothscroll.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/images-loaded.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/tipsy.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/backbone.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/litebox.min.js" type="text/javascript"></script>

		<script type="text/javascript">
			$('.litebox').liteBox();
		</script>
	
<!-- JavaScript
	================================================== -->
	<script src="js/jquery-main.js" type="text/javascript"></script>
	<script type='text/javascript' src="js/jquery-latest.min.js"></script>
	<script type='text/javascript' src='js/menu_jquery.js'></script>
	<script src="js/car/jquery-1.7.2.min.js" type="text/javascript"></script> <!-- jQuery -->
    <script src="js/car/jquery.easing.1.3.js" type="text/javascript"></script> <!-- jQuery easing -->
    <script src="js/car/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
	<script src="js/ticker.js" type="text/javascript"></script>
 	<script type='text/javascript' src='js/jquery.common.min.js'></script>

<!--End Document
================================================== -->

	
	
	<div class="footer">
	
</div>
</body>

</html>
<?php 
session_start();
if(isset($_SESSION['username']))
{
//echo $_SESSION['username'];
 include "header.php"; ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    
                       
                            <div class="row">
                                
                                <div class="center">
								<div>Albums</div>
                                    <div class="huge">
									<?php 
									
include "connect.php";
$result = mysqli_query($con,"select count(*) as total from tbl_album where status='process'");
$data=mysqli_fetch_assoc($result);
echo $data['total'];
 ?>
 </div>
                                    
                                </div>
								                <a href="viewalbums.php">View Details </a>
                            </div>
                        
        
                   
                </div>
            <div class="col-lg-3 col-md-6">
                    
                       
                            <div class="row">
                                
                                <div class="center">
								  <div>Gallery Images</div>
                                    <div class="huge"><?php 
									
include "connect.php";
$result = mysqli_query($con,"select count(*) as total from tbl_gallery  where status='process'");
$data=mysqli_fetch_assoc($result);
echo $data['total'];
 ?></div>
                                  
                                </div>
								<a href="viewsgallery.php" > View Details  </a>
                            </div>
                        
                        
                   
                </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
<?php
}
else
{
header("location:login.php");
}
?>
</body>

</html>


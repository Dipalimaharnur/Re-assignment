<?php session_start();
if(isset($_SESSION['username']))
{
 include "header.php"; 

 //Notice: Undefined variable: con in C:\xampp\htdocs\Gallery_App\admin\addalbum.php on line 12

 ?>
 
 
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Album</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
 
            <?php
			 include "connect.php";
 if(isset($_POST["submit"])){
    $albumName=$_POST["aname"];
	$albumDesc=$_POST["adesc"];
    $adate = date('Y-m-d H:i:s');
    $status='process';

	$query="INSERT INTO tbl_album(name,adesc,date,status) VALUES ('$albumName','$albumDesc','$adate','$status')";
if(mysqli_query($con,$query))
	{
echo " <div class='alert alert-success'>Your New Album Is Successfully Added. <a href='viewalbums.php'>View albums</a></div>";
	}
	else
	{
		echo "error";
		print mysqli_error('$con');
	}
 }			
			?>
			
			
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill This Form To Add Album (Only upload jpg files only)
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post"  enctype="multipart/form-data" >
                                       
                                        <div class="form-group">
                                            <label>Album Name or Title</label>
                                            <input class="form-control" placeholder="Enter Title" name="aname">
                                                <p class="help-block">Example "Sunset pics"</p>
                                        
                                        </div>
                                        <div class="form-group">
                                        
                                            <label>Event Description</label>
                                             <p class="help-block" style="font-weight:bold">Max 1000 Character Allow </p>
                                             <textarea class="form-control" rows="3" placeholder="Enter Description" name="adesc" maxlength="1000"></textarea>
                                               
                                        </div>
                                              <button id="submit" name="submit" type="Submit" class="btn btn-primary">Add Album</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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

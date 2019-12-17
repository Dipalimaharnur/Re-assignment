<?php session_start();
if(isset($_SESSION['username']))
{
include "header.php";
 $id=$_REQUEST['id']; 
include"connect.php";
$sql = "select * from tbl_album where albumid='$id'";
$rs_result = mysqli_query ($con,$sql);
while ($row = mysqli_fetch_assoc($rs_result)) 
{
	 $aname=$row["name"];
	
}

?>


 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Gallery</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill This Form To Add Gallery
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        
                                        <div class="form-group">
                                            <label>Gallery Image</label>
                                            <input type="file" name="upload1[]" multiple  id="upload" />
                
                                            <p class="help-block">Example "Recomended Image Size in pixel 400 X 300"</p>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary" name="submit">Submit Button</button>
                                        
                                    </form>
									<?php
									if(isset($_POST["submit"]))
									{
										$errors= array();
										for($i=0;$i<count($_FILES["upload1"]["name"]); $i++)
									{
										
											$filetmp = $_FILES["upload1"]["tmp_name"][$i];
											$filename = $_FILES["upload1"]["name"][$i];
											$filetype = $_FILES["upload1"]["type"][$i];
											$file_size =$_FILES['upload1']['size'][$i];
											$filepath = "photo/".$filename;
													
												 if($file_size > 2097152)
												 {
													$errors[]='File size must be less than 2 MB';
													
												 }
												 if($filename=='')
												 {
													 $errors[]='Please Upload Image';
												 }
												 if(empty($errors)==true)
												 {
												//echo $filename;
												//echo $filepath;
												//echo $aname;
												//echo $id;
											    $gdate = date('Y-m-d H:i:s');
												$status='process';
												
										
													move_uploaded_file($filetmp,$filepath);
													$query="INSERT INTO tbl_gallery(aid,gname,gimages,date,status) VALUES ('$id','$aname','$filename','$gdate','$status')";
													mysqli_query($con,$query);
												 }
												else
												{
												 
												 print_r($errors);
												
												}												 
									}
									if(empty($errors))
									{
										echo " <div class='alert alert-success'>Your Images Is Successfully Uploded. <a href='viewgallery.php'>View Photos</a> </div>";
		
									}

								}

								
									
									?>
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

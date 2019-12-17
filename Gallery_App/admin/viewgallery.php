<?php session_start();
if(isset($_SESSION['username']))
{
 include "header.php"; ?>
         <!-- Page Content -->
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Gallery Details</h1>
                </div
				<?php
						include "connect.php";
						if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
						$start_from = ($page-1) * 8;
						$sql = "select * from tbl_gallery where status='process' ORDER BY gid DESC LIMIT $start_from, 8";
						$rs_result = mysqli_query ($con,$sql);
				?>
				 <div class="col-md-12">
          <table  class="table table-bordered table-striped">
              <thead>
                  <tr>
				  
				  <th>Album Name</th>
				  <th>Image Name</th>
				  <th>Images</th>
				  <th>Action</th>
				  </tr>
              </thead>
			  
							<?php
							while ($row = mysqli_fetch_assoc($rs_result)) {
							?>
              <tbody>
					<tr>
					<td> <?php echo $row["gname"]; ?> </td>
					<td><?php echo $row["gimages"]; ?></td>
					<td><img src="photo/<?php echo $row["gimages"];?>" width="100px"/></td>
					
                    <!--<td><a href='gallerydelete.php?key1=<?php echo $row["gid"]; ?>' onClick="deleteme(<?php echo $row['empid']; ?>)">Delete</a> </td>-->
					<td><input type="button"  class="btn btn-danger" onClick="deleteme(<?php echo $row["gid"]; ?>)" name="Delete" value="Delete"></td>
					</tr>
              </tbody>
			  
			  <?php
};
?>
          </table>
		  
		  
		  <strong>Pages  </strong>

<?php
$sql = "SELECT COUNT(gimages) FROM tbl_gallery";
$rs_result = mysqli_query($con,$sql);
$row = mysqli_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 8);
for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='viewgallery.php?page=".$i."' class='navigation_item selected_navigation_item'>".$i."</a> ";
};
?>
      </div>

				
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
 
            
         
       
    
    </div>
    <!-- /#wrapper --> 	
 
  <script language="javascript">
 function deleteme(delid)
 {
 if(confirm("Do you want Delete!")){
 window.location.href='gallerydelete.php?del_id=' +delid+'';
 return true;
 }
 } 
 </script>
 
 
 
 
 
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

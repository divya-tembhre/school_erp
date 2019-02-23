<?php
  include('include/header.php'); 
if(isset($_GET['gel'])!='')	
	{
	 		 
		 $sql= "  delete from add_student where id='".$_GET['del']."' " ;
		 $con->query($sql); 

	}
?>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <?php include('include/navbar.php');  ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
       
	   
	    <?php include('include/left.php');  ?>
	   
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Tables</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Student Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                          <tr>
											    <th>s no</th>
                                                <th>First name</th>
												<th>Middle name</th>
												<th>Last name </th>
												<th>Father name</th>
												<th>Mother name</th>
												<th>Mobile no</th>
												<th>Date of Birth</th>
												<th>Addres</th> 												 
                                                <th>Gender</th> 
                                                <th>Class name</th>
												<th>Section name</th>
												
                                                <th width="150"> Action</th>
                                            </tr>  
											</thead>
                                        <tbody>
										
										
                                             
                                             <?php 
                                  $sr_no=1;
		                         $sql=" SELECT * FROM add_student "; 
	                            $result = $con->query($sql); 
                                while($row = $result->fetch_array () )
									{
                                 
                                     ?>
<tr>
<td> <?php echo $sr_no; ?> </td>
<td> <?PHP echo  $row['first_name']  ?> </td>
<td> <?PHP echo  $row['middle_name']  ?> </td>
<td> <?PHP echo  $row['last_name']  ?> </td>
<td> <?PHP echo  $row['father_name']  ?> </td>
<td> <?PHP echo  $row['mother_name']  ?> </td>
<td> <?PHP echo  $row['mobile_no']  ?> </td>
<td> <?PHP echo  $row['date_of_birth']  ?> </td>
<td> <?PHP echo  $row['addres']  ?> </td>
<td> <?PHP echo  $row['gender']  ?> </td>
 
 
   <td> 
			  <?PHP    
			   
						$sql1=" SELECT class FROM add_class where id=".$row['class_name']."  "; 
						$resultClass = $con->query($sql1); 
						$row1= $resultClass->fetch_array();
						 echo $row1['class'];
			  ?> 
	</td>
	

 <td> 
			  <?PHP    
			   
						$sql2=" SELECT section FROM add_section where id=".$row['section_name']."  "; 
						$resultsection = $con->query($sql2); 
						$row2= $resultsection->fetch_array();
						 echo $row2['section'];
			  ?> 
	</td>


	
<td width="150"> 

<form action="edit_student.php" target="_blank" method="get">

<input type="submit" name="submit" value="Edit" >

<input type="hidden" name="edit_id" value="<?php echo $row['id'] ; ?>" >

</form>
  
<form action="view_student.php" method="get">

<input type="submit" name="submit" value="Delete" >

<input type="hidden" name="del" value="<?php echo $row['id'] ; ?>" >

</form>

</td>
</tr>
<?php 
$sr_no++;
}?>                                          
                                             
                                        </tbody>
                                         
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                
                 
                    <!-- ============================================================== -->
                    <!-- data table rowgroup  -->
                    <!-- ============================================================== -->
                    
                    <!-- ============================================================== -->
                    <!-- end data table rowgroup  -->
                    <!-- ============================================================== -->
                 
                 
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           <?php include('include/footer.php');  ?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="../../../../../cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
     <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="../../../../../cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="../../../../../cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="../../../../../cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    </body>
	
	
	

</html>
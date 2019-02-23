<?php 
	include('include/header.php');  
	
if(isset($_POST['updd'])!='')								
	{                         
		 $sql= " update add_student set first_name='".$_POST['first_name']."',middle_name='".$_POST['middle_name']."',last_name='".$_POST['last_name']."',father_name ='".$_POST['father_name']."', mother_name ='".$_POST['mother_name']."', mobile_no='".$_POST['mobile_no']."', date_of_birth='".$_POST['date_of_birth']."',addres='".$_POST['addres']."', gender='".$_POST['gender']."',class_name='".$_POST['class_name']."',          
		 
	section_name='".$_POST['section_name']."'    where id= '".$_GET['edit_id']."'";
		 
         $con->query ($sql);		  
		 echo $sql;
		 
	}  
	?> 
	

<body>
<?php 
     $sql=" SELECT * FROM add_student where id='".$_GET['edit_id']."' " ;
	 $result = $con->query($sql); 
	 $data_get = $result->fetch_array();
     
 
 ?>


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
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Form Elememnts </h2>
                                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                          
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Detail</h3>
								</div>
                                <div class="card">
                                    <h5 class="card-header">Edit detail </h5>
                                    <div class="card-body">
                                        <form method="post">
																													
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">First name</label>
                                               <input id="inputclass"   name="first_name" value="<?php echo $data_get['first_name']; ?>"  type="text" class="form-control">
                                            </div>
											
											<div class="form-group">   
                                            <label for="inputText3" class="col-form-label">middle name</label>
											<input id="inputclass"   name="middle_name" value="<?php echo $data_get['middle_name']; ?>"  type="text" class="form-control">
                                            </div>
																			
											<div class="form-group">   
                                            <label for="inputText3" class="col-form-label">Last name</label>
											<input id="inputclass"   name="last_name" value="<?php echo $data_get['last_name'];?>"  type="text" class="form-control">
                                            </div>
											<div class="form-group">   
                                            <label for="inputText3" class="col-form-label">Father name</label>
											<input id="inputclass"   name="father_name" value="<?php echo $data_get['father_name'];?>"  type="text" class="form-control">
                                            </div>
											
											<div class="form-group">   
                                            <label for="inputText3" class="col-form-label"> Mother name</label>
											<input id="inputclass"   name="mother_name" value="<?php echo $data_get['mother_name'];?>"  type="text" class="form-control">
                                            </div>	
											
											<div class="form-group">   
                                            <label for="inputText3" class="col-form-label">Mobile no </label>
											<input id="inputclass"   name="mobile_no" value="<?php echo $data_get['mobile_no'];?>"  type="text" class="form-control">
                                            </div>															
													
											<div class="form-group">   
                                            <label for="inputText3" class="col-form-label">Date_Of_Birth </label>
											<input id="inputclass"   name="date_of_birth" value="<?php echo $data_get['date_of_birth'];?>"  type="text" class="form-control">
                                            </div>	
											
											<div class="form-group">   
                                            <label for="inputText3" class="col-form-label">Addres </label>
											<input id="inputclass"   name="addres" value="<?php echo $data_get['addres'];?>"  type="text" class="form-control">
                                            </div>	
											
											<div class="form-group">   
                                            <label for="inputText3" class="col-form-label">Gender </label>
                                           <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="gender"<?php if($data_get['gender']=='male'){?> checked="" <?php }?> class="custom-control-input" value="male" ><span class="custom-control-label">Male</span>
                                            </label>
											
											<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="gender" <?php if($data_get['gender']=='female'){?>checked="" <?php }?>  class="custom-control-input" value="female" ><span  class="custom-control-label">Female</span>
                                            </label>
                                            </div>
											
											<div class="form-group">   
                                            <label for="inputText3" class="col-form-label">Class name </label>
											 <select name="class_name" class="form-control">
												<?php 
												 $sql=" SELECT * FROM add_class "; 
													$result = $con->query($sql); 
													while($row = $result->fetch_array () )
													{
													?>
													<option value="<?php echo  $row['id'] ?>" <?php if($row['id']==$data_get['class_name']){ ?> selected  <?php }?>>Class <?php echo  $row['class'] ?></option>													 
													<?php }?>
												</select>  
																				 
                                              </div>		
											 
											<div class="form-group">
                                                <label for="inputdeploment">Section name</label>
                                                 <select name="section_name" class="form-control">
												<?php 
												 $sql=" SELECT * FROM add_section "; 
													$result = $con->query($sql); 
													while($row = $result->fetch_array () )
													{
													?>
													<option value="<?php echo  $row['id'] ?>" <?php if($row['id']==$data_get['section_name']){ ?> selected  <?php }?>>section <?php echo  $row['section'] ?></option>													 
													<?php }?>
												</select>   
												 
											</div> 											
																					 
											<div class="form-group"> 
												<input id="inputupusubmit" type="submit" name="updd"  value="update"  class="form-control">
											</div>
                                        
										</form>	
                                    </div>
                                     
                                </div>
                            </div>
                        </div>
                         
                      
                         
                         
                    </div>
                     
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
			
			<?php	include('include/footer.php')?>
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
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
    <script>
    $(function(e) {
        "use strict";
        $(".date-inputmask").inputmask("dd/mm/yyyy"),
            $(".phone-inputmask").inputmask("(999) 999-9999"),
            $(".international-inputmask").inputmask("+9(999)999-9999"),
            $(".xphone-inputmask").inputmask("(999) 999-9999 / x999999"),
            $(".purchase-inputmask").inputmask("aaaa 9999-****"),
            $(".cc-inputmask").inputmask("9999 9999 9999 9999"),
            $(".ssn-inputmask").inputmask("999-99-9999"),
            $(".isbn-inputmask").inputmask("999-99-999-9999-9"),
            $(".currency-inputmask").inputmask("$9999"),
            $(".percentage-inputmask").inputmask("99%"),
            $(".decimal-inputmask").inputmask({
                alias: "decimal",
                radixPoint: "."
            }),

            $(".email-inputmask").inputmask({
                mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
                greedy: !1,
                onBeforePaste: function(n, a) {
                    return (e = e.toLowerCase()).replace("mailto:", "")
                },
                definitions: {
                    "*": {
                        validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
                        cardinality: 1,
                        casing: "lower"
                    }
                }
            })
    });
    </script>
</body>
 
</html>
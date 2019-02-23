<?php 
	include('include/header.php');  
	if(isset($_POST['first_name'])!='')								
	{                         
		 $sql= " insert into add_student  (first_name,middle_name,last_name,father_name,mother_name,mobile_name,date_of_birth,addres,gender,class_name,section_name)	      
		 values ( 
		 '".$_POST['first_name']."',
		 '".$_POST['middle_name']."',
		 '".$_POST['last_name']."',
		 '".$_POST['father_name']."',
		 '".$_POST['mother_name']."', 
		 '".$_POST['mobile_name']."', 
		 '".$_POST['date_of_birth']."', 
		 '".$_POST['addres']."', 
		 '".$_POST['gender']."', 
		 '".$_POST['class_name']."', 		   
		 '".$_POST['section_name']."')";
		 
		 $con->query($sql);
		 
		 //echo $sql;
		
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
                                    <h3 class="section-title">student</h3>
								</div>
                                <div class="card">
                                    <h5 class="card-header">Add Student </h5>
                                    <div class="card-body">
                                        <form method="post">
										
										
										
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">First name</label>
                                               <input id="inputkind of equiment"   name="first_name"  type="text" class="form-control">
                                            </div>
											
												 
                                            <div class="form-group">
                                                <label for="inputspcification">Middle name</label>
                                                <input id="inputspcification" name="middle_name" type="text"   class="form-control">                                                
                                            </div>
											
											 <div class="form-group">
                                                <label for="inputquantity">Last name</label>
                                               <input id="inputquantity" name="last_name" type="text" placeholder="" class="form-control">                                                
                                            </div>
											
                                            <div class="form-group">
                                                <label for="inputcost">Father name</label>
												<input id="inputcost" name="father_name"  type="text"  placeholder="" class="form-control"> 
											</div>
											<div class="form-group">
                                                <label for="inputdeploment">Mother name</label>
											<input  id="inputdeployment" name="mother_name" type="text"  placeholder="" class="form-control">
											</div>
											
                                             <div class="form-group"> 
                                                 <label for="inputdeploment">Mobile no.</label>
                                           <input  id="inputdeployment" name="mobile_name" type="number"  placeholder="" class="form-control">
											</div> 
                                             
											<div class="form-group">
                                               <label for="inputdeploment">Date_of_birth</label>
											<input  id="inputdeployment" name="date_of_birth" type="date"  placeholder="" class="form-control">
											</div> 
											
											<div class="form-group">
                                                <label for="inputdeploment">Addres</label>
											<input  id="inputdeployment" name="addres" type="text"  placeholder="" class="form-control">
											</div>

                                           <div class="form-group">
										    <label for="inputdeploment">Gender</label>
										    <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="gender"  checked="" class="custom-control-input" value="male" ><span class="custom-control-label">Male</span>
                                            </label>
											
											 <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="gender"  class="custom-control-input" value="female" ><span  class="custom-control-label">Female</span>
                                            </label>
											 
											</div>
											                                            										
											<div class="form-group">
                                                <label for="inputdeploment">Class name</label>
												
												<select name="class_name" class="form-control">
												<?php
													$sql=" SELECT * FROM add_class "; 
													$result = $con->query($sql); 
													while($row = $result->fetch_array () )
													{
													?>
													<option value="<?php echo  $row['id'] ?>">Class <?php echo  $row['class'] ?></option>													 
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
													<option value="<?php echo  $row['id'] ?>">section <?php echo  $row['section'] ?></option>													 
													<?php }?>
												</select>   
												 
											</div> 
																									
																	
											<div class="form-group"> 
												<input id="inputsubmit" type="submit" value="submit"  class="form-control">
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
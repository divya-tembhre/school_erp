<?php 
	include('include/header.php');  
	if (isset($_POST['submit'])!='')
	{
		$sql= "update my_information set fname='".$_POST['fname']."', email_id='".$_POST['email_id']."', addres='".$_POST['addres']."', moblie_number='".$_POST ['moblie_number']."', date_of_birth='".$_POST['date_of_birth']."'  where id= '".$_SESSION['id']."' ";
        $con->query ($sql);
		echo $sql;
		
		 
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
                                    <h3 class="section-title">Profile</h3>
								</div>
                                <div class="card">
                                    <h5 class="card-header">View Profile </h5>
                                    <div class="card-body">
                                        <form method="post">   
<?php  
													 $sql=" SELECT * FROM my_information where id='".$_SESSION['id']."' " ;
													 $result = $con->query($sql); 
													 $data_get = $result->fetch_array();   
												?>										
                                         <div class="form-group"> 
										 <label for="inputText3" class="col-form-label">Name</label>
                                               <input id="inputEmail"   name="fname" value="<?php echo $data_get['fname']; ?>" type="text" class="form-control">
                                            </div>
											 
												 
                                            <div class="form-group">
                                                <label for="inputEmail">Email</label>
                                                <input id="inputEmail" name="email_id" type="text" value="<?php echo $data_get['email_id']; ?>" placeholder="" class="form-control">                                                
                                            </div>
											
											 <div class="form-group">
                                                <label for="inputAddres">Addres</label>
                                               <input id="inputAddres" name="addres" type="text" value="<?php echo $data_get['addres'];?>" placeholder="" class="form-control">                                                
                                            </div>
											
                                            <div class="form-group">
                                                <label for="inpuMobile number">Mobile number</label>
                                             <input id="inputMoblie number" name="moblie_number" type="number" value="<?php echo $data_get['moblie_number']; ?>" placeholder="" class="form-control"> 
											</div>
												
                                            <div class="form-group">
                                                <label for="inpuDate of birth ">Date of birth</label>
											<input  id="inputDate of birth" name="date_of_birth" type="date" value="<?php echo $data_get['date_of_birth']; ?>" placeholder="" class="form-control">
											</div> 
										 
											<div class="form-group"> 
												<input id="inputsubmit" type="submit" name="submit" value="submit"  class="form-control">
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
            
			
			<?php	include('include/footer.php');?>
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
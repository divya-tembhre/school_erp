<?php 
	include('include/header.php');  
	
if(isset($_POST['updd'])!='')								
	{                         
		 $sql= " update school_details set kind_of_equipment='".$_POST['kind_of_equipment']."',spcification='".$_POST['spcification']."',quantity='".$_POST['quantity']."',cost='".$_POST['cost']."',deployment='".$_POST['deployment']."'  where id= '".$_GET['edit']."' ";
         $con->query ($sql);		  
		 echo $sql;
		 exit;
	}  
	?> 
	


<body>
<?php 
     $sql=" SELECT * FROM school_details where id='".$_GET['edit']."' " ;
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
                                                <label for="inputText3" class="col-form-label">Kind of equipment</label>
                                               <input id="inputkind of equipment"   name="kind_of_equipment" value="<?php echo $data_get['kind_of_equipment']; ?>"  type="text" class="form-control">
                                            </div>
											
												 
                                            <div class="form-group">
                                                <label for="inputspcification">spcification</label>
                                                <input id="inputspcification" name="spcification" value="<?php echo $data_get['spcification'];?>" type="text"   class="form-control">                                                
                                            </div>
											
											 <div class="form-group">
                                                <label for="inputquantity">Quantity </label>
                                               <input id="inputquantity" name="quantity" value="<?php echo $data_get['quantity'];?>" type="text" placeholder="" class="form-control">                                                
                                            </div>
											
                                            <div class="form-group">
                                                <label for="inputcost">cost</label>
                                             <input id="inputcost" name="cost" value="<?php echo $data_get['cost'];?>" type="number"  placeholder="" class="form-control"> 
											</div>
												
                                            <div class="form-group">
                                                <label for="inputdeploment">Deployment</label>
											<input  id="inputdeployment" name="deployment" value="<?php echo $data_get['deployment'];?>" type="text"  placeholder="" class="form-control">
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
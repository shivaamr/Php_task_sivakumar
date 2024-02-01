<?php
   if (isset($_GET['edit_order'])) {
          
     $edit_id= $_GET['edit_order'];
     
     $get_product_details = "select * from neworder where id= $edit_id" ;
     $result_select1 = mysqli_query($con,$get_product_details);
     $row1 = mysqli_fetch_assoc( $result_select1);
     $id= $row1['id'];
     $orderdate= $row1['orderdate'];
     $region = $row1['region'];    
     $report = $row1['report'];
        $items = $row1['items'];  
          $units = $row1['units'];
          $unitcost = $row1['unitcost'];
		     $total = $row1['total'];		

     if (isset($_POST['Edit_Order'])) {
          
          $update_id= $id;
          $orderdate = $_POST['orderdate'];
          $region= $_POST['region'];
          $report= $_POST['report'];
		     $items = $_POST['items'];
		     $units= $_POST['units'];
          $unitcost= $_POST['unitcost'];
		     $total = $_POST['total'];
     
          $product_update = "update neworder SET orderdate = '$orderdate' ,region ='$region',
          report ='$report',items = '$items',units = '$units',unitcost = '$unitcost',total = '$total' where id = '$update_id'" ;
          $result_update = mysqli_query($con,$product_update);
          //$row = mysqli_fetch_array( $result_select1);
         if($result_update)
{
     echo"<script>alert('This product was updated')</script>";
	  echo"<script>window.open('index.php?upload_excel','_self')</script>";
}


     
        }
   }
?>



<h1>User </h1>

<div class="row">
<form action="" method="post" enctype="multipart/form-data">
       <div class="row">
       <div class="col-md-2">  </div>
            <div class="col-md-8">
			     <div class="row">
					 <div class="col-md-6"> </div>
					  <div class="col-md-6"> </div>
				 </div>
				 
				 
				<div class="row">
					 <div class="col-md-6">
							<div class="form-outline mb-3">
								<label for="user_name" class="form-label">Order Date</label>
								<input type="text" class="form-control" name="orderdate" id="orderdate" value="<?php echo $orderdate?>"
								 placeholder="Order Date autocomplete="off" required="required">
							</div>

					 </div>
					  <div class="col-md-6">
							<div class="form-outline mb-3">
								<label for="user_name" class="form-label">Region</label>
								<input type="text" class="form-control" name="region" id="region" value="<?php echo $region?>"
								 placeholder="Region" autocomplete="off" required="required">
							</div>
					  </div>
				 </div>
				 
				 	<div class="row">
					 <div class="col-md-6">
						 <div class="form-outline mb-3">
						<label for="Address" class="form-label">Report</label>
						<input type="text" class="form-control" name="report" id="report"  value="<?php echo $report?>"
						 placeholder="Report" autocomplete="off" required="required">
					</div>

					 </div>
					  <div class="col-md-6">
							<div class="form-outline mb-3">
								<label for="user_name" class="form-label">Items</label>
								<input type="text" class="form-control" name="items" id="items" value="<?php echo $items?>"
								 placeholder="Items" autocomplete="off" required="required">
							</div>
					  </div>
				 </div>
			
				 	<div class="row">
					 <div class="col-md-6">
						 <div class="form-outline mb-3">
						<label for="Address" class="form-label">Units</label>
						<input type="text" class="form-control" name="units" id="units"  value="<?php echo $units?>"
						 placeholder="Units" autocomplete="off" required="required">
					</div>

					 </div>
					  <div class="col-md-6">
							<div class="form-outline mb-3">
								<label for="user_name" class="form-label">Unit Cost</label>
								<input type="text" class="form-control" name="unitcost" id="unitcost" value="<?php echo $unitcost?>"
								 placeholder="Unit Cost" autocomplete="off" required="required">
							</div>
					  </div>
				 </div>
				 
				 				 	<div class="row">
					 <div class="col-md-6">
						 <div class="form-outline mb-3">
						<label for="Address" class="form-label">Total</label>
						<input type="text" class="form-control" name="total" id="total"  value="<?php echo $total?>"
						 placeholder="Total" autocomplete="off" required="required">
					</div>

					 </div>
					  <div class="col-md-6">
				
					  </div>
				 </div>


    
   

  
        <input type="submit" class="btn btn-warning" name="Edit Order" value="Edit Order"  style="float: right;">
       
        </div>
        <div class="col-md-2">  </div>
        </div>
    
  
    </form>

</div>
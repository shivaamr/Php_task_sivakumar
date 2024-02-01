<?php
include('../includes/connect.php');
?>




<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row">
		<div class="col-md-3">   </div>
            <div class="col-md-6 mt-4">

                <?php
                if(isset($_SESSION['message']))
                {
                    echo "<p>".$_SESSION['message']."</p>";
                    unset($_SESSION['message']);
                }
                ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Orders</h4>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST" enctype="multipart/form-data">

                            <input type="file" name="import_file" class="form-control" />
                            <button type="submit" name="save_excel_data" class="btn btn-primary mt-3">Import</button>

                        </form>

                    </div>
                </div>
            </div>
			<div class="col-md-3">   </div>
			
        </div>
    </div>
	    <div class="container card" style="margin-top:20px;">
		   <div class="row card-body">
		  
		   <div class="col-md-12">  
			<table class="table display" id="example1" >
			<thead>
			<tr>
				<td>#</td>
				<td>ID</td>
				<td>Order Date</td>
				<td>Region</td>
				<td>Region</td>
				<td>Item</td>
				<td>Units</td>
					<td>Unit Cost</td>
				<td>Total</td>
				<td>Edit</td>
				<td>Delete</td>
			</tr>
				</thead>

			
			     <?php
          
	$i = 1;
          $get_order_details = "SELECT * FROM neworder" ;
          $result_select2 = mysqli_query($con,$get_order_details);
          $number = 0;
         while($row1 = mysqli_fetch_assoc( $result_select2))
          {
             $id= $row1['id'];
             $orderdate= $row1['orderdate'];          
             $region = $row1['region'];           
             $report = $row1['report']; 
             $items = $row1['items'];          
             $units = $row1['units'];           
             $unitcost = $row1['unitcost']; 
				$total= $row1['total'];          
      			  
             $number++;
             
             ?>
			
			
			<tr>
				<td> <?php echo $i++; ?> </td>
					<td > <?php  	echo "$id"; ?> </td>
				<td> <?php echo "$orderdate"; ?> </td>
				<td> <?php echo "$region"; ?> </td>
				<td> <?php  echo "$report";  ?> </td>
				<td > <?php  	echo "$items"; ?> </td>
				<td> <?php echo "$units"; ?> </td>
				<td> <?php echo "$unitcost"; ?> </td>
				<td> <?php  echo "$total";  ?> </td>
				          <td><a href="index.php?edit_order=<?php
	echo $id
?>" class="btn btn-warning">Edit</a></td>
          <td><a href="index.php?delete_order=<?php
	echo $id
?>"class="btn btn-danger">Delete</a></td>
			</tr>
		          <?php
  } 
?>  
		</table>
		 </div>
	
  </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



		
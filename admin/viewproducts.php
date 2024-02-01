
<style>
  .thumb{
    width: 6ch;
    height: 60px;;
}
</style>

<div class="container" style="margin-top:20px;">
    <div class="row card">
	 <div class="card-header">
    <h3 style="padding: 10px;font-size:20px;">View Products</h3>
</div>
<div class="card-body">
        <table class="table  display" id="example1" >
          <thead>
            <tr>
              <td>Product ID</td>
              <td>Product Name</td>
              <td>Product Image</td>
              <td>Price</td>         
              <td>Edit</td>
              <td>Delete</td>
            </tr>
          </thead>

          <tbody >
          <?php
          

          $get_order_details = "select * from products" ;
          $result_select2 = mysqli_query($con,$get_order_details);
          $number = 0;
         while($row1 = mysqli_fetch_assoc( $result_select2))
          {
             $product_id= $row1['product_id'];
             $product_name= $row1['product_name'];
             $pimage1 = $row1['pimage1'];
             $selling_price = $row1['selling_price'];           
             $status = $row1['status'];
             $number++;
             
             ?>
          
             <tr>
          
             <td><?php 	echo "$product_id" ?></td>
			  <td><?php 	echo "$product_name" ?></td>
             <td><?php 	echo "<img src='./product_images/$pimage1' alt='' class='thumb'>" ?></td>
             <td><?php 	echo "$selling_price" ?></td>
          <td><a href="index.php?edit_product=<?php
	echo $product_id
?>" class="btn btn-warning">Edit</a></td>
          <td><a href="index.php?delete_product=<?php
	echo $product_id
?>"class="btn btn-danger">Delete</a></td>
          </tr>

          <?php
  } 
?>        
     

          </tbody>

        </table>
   </div>
    </div>
</div>







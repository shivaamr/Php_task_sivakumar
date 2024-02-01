<?php
   if (isset($_GET['edit_product'])) {
          
     $edit_id= $_GET['edit_product'];
     
     $get_product_details = "select * from products where product_id= $edit_id" ;
     $result_select1 = mysqli_query($con,$get_product_details);
     $row1 = mysqli_fetch_assoc( $result_select1);
     $product_id= $row1['product_id'];
     $product_name= $row1['product_name'];
     $description = $row1['description'];
     $product_image = $row1['pimage1'];
     $price = $row1['price'];
     $selling_price = $row1['selling_price'];           

     if (isset($_POST['Edit_Product'])) {
          
          $update_id= $product_id;
          $product_name = $_POST['product_name'];
          $description= $_POST['description'];
          $price= $_POST['price'];
          $selling_price = $_POST['selling_price'];

          $product_image= $_FILES['product_image']['name'];
          $product_image_tmp= $_FILES['product_image']['tmp_name'];
          move_uploaded_file($product_image_tmp,"./product_images/$product_image");
          $product_update = "update products SET product_name = '$product_name' ,description ='$description',pimage1='$product_image',
          price =' $price',selling_price ='$selling_price' where product_id = '$update_id'" ;
          $result_update = mysqli_query($con,$product_update);
          //$row = mysqli_fetch_array( $result_select1);
         if($result_update)
{
     echo"<script>alert('This product was updated')</script>";
}


     
        }
   }
?>





<div class="row">
<form action="" method="post" enctype="multipart/form-data">
       <div class="row" style="margin-top:20px;">
       <div class="col-md-4">  </div>
            <div class="col-md-4 card">
			 <div class="card-header"><h1 style="font-size:20px;">Edit Product</h1></div>
            <div class="form-outline mb-3">
            <label for="user_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name" id="product_name" value="<?php echo $product_name?>"
             placeholder="User name" autocomplete="off" required="required">
        </div>
        <div class="form-outline mb-3">
            <label for="user_name" class="form-label">Product Description</label>
            <input type="text" class="form-control" name="description" id="description" value="<?php echo $description?>"
             placeholder="User name" autocomplete="off" required="required">
        </div>
        <div class="form-outline mb-3">
        <label for="formFile" class="form-label">Product Image</label>
        <input type="file" class="form-control" name="product_image" id="product_image"
             >
             <img src='./product_images/<?php echo  $product_image?>' alt='' class='userimage'>
        </div>
    
        <div class="form-outline mb-3">
            <label for="Address" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price"  value="<?php echo $price?>"
             placeholder="Enter Address" autocomplete="off" required="required">
        </div>

        <div class="form-outline mb-3">
            <label for="Email" class="form-label">Selling Price</label>
            <input type="text" class="form-control" name="selling_price" id="selling_price"  value="<?php echo $selling_price?>"
             placeholder="User Email" autocomplete="off" required="required">
        </div>
        <input type="submit" class="btn btn-warning" name="Edit_Product" value="Edit_Product"  style="float: right;">
       
        </div>
        <div class="col-md-4">  </div>
        </div>
    
  
    </form>

</div>
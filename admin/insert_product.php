
<?php
include('../includes/connect.php');
if (isset($_POST['insert_product'])) {
    $productname =$_POST['product_name'];
    $description =$_POST['description'];
    $productkeyword =$_POST['product_keyword'];
    $productcategory =$_POST['product_category'];
    $productbrand =$_POST['product_brand'];
    $productprice =$_POST['product_price'];
    $productsellingprice =$_POST['product_sellingprice'];
    $productstatus ="true";

    $productimage1 =$_FILES['product_image1']['name'];
    $productimage2 =$_FILES['product_image2']['name'];
    $productimage3 =$_FILES['product_image3']['name'];

    $temp_image1 =$_FILES['product_image1']['tmp_name'];
    $temp_image2 =$_FILES['product_image2']['tmp_name'];
    $temp_image3 =$_FILES['product_image3']['tmp_name'];

    if($productname =='' or $description == '' or $productkeyword =='' or  $productcategory =='' or $productbrand =='' or $productprice =='' or
    $productsellingprice =='' or $productimage1 =='' or $productimage2 =='' or $productimage3 =='')
    {
        echo "<script>alert('Please enter the value')</script>" ;
        exit();
    }else{      
        move_uploaded_file($temp_image1,"./product_images/$productimage1");
        move_uploaded_file($temp_image2,"./product_images/$productimage2");
        move_uploaded_file($temp_image3,"./product_images/$productimage3");
        $sql = "insert into products(product_name,description,product_keyword,category_id,brand_id,
        pimage1,pimage2,pimage3,price,selling_price,date,status) values
        ('$productname','$description','$productkeyword','$productcategory','$productbrand',
        '$productimage1','$productimage2','$productimage3','$productprice','$productsellingprice',NOW(),'$productstatus')" ;
        $result = mysqli_query($con,$sql);
        if($result)
        {
            echo " <script>alert('Product added successfully')</script>" ;
        }
    
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-Edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Product - Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
    <div class="row" style="margin-top:20px;">
        <div class="col-md-2"></div>
        <div class="col-md-8">
		<div class="card">
			<div class="card-header">
			   <h1 style="font-size:20px;">Insert Product</h1>
			</div>
		
         <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
               <div class="row">
                    <div class="col-md-6">
                    <div class="form-outline mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="product_name" id="product_name"
                     placeholder="Product Title" autocomplete="off" required="required">
                </div>

                <div class="form-outline mb-3">
                    <label for="description" class="form-label">Product Description</label>
                    <input type="text" class="form-control" name="description" id="description"
                     placeholder="Product Description" autocomplete="off" required="required">
                </div>

                <div class="form-outline mb-3">
                    <label for="product_keyword" class="form-label">Product Keyword</label>
                    <input type="text" class="form-control" name="product_keyword" id="product_keyword"
                     placeholder="Product Keyword" autocomplete="off" required="required">
                </div>

                <div class="form-outline mb-3">
                <label for="product_Category" class="form-label">Product Category</label>
                    <select class="form-select" name="product_category" id="" aria-label="Default select example">
                    <option selected>Select Category</option>
                    <?php
$select = "select * from categories" ;
$result_select = mysqli_query($con,$select);
while($data = mysqli_fetch_assoc( $result_select ))
{
  $catagoryname = $data['category_name'];
  $categoryid  = $data['category_id'];
  echo "<option value=' $categoryid '> $catagoryname</option> " ;
}
?>
     
                    </select>
                </div>

                <div class="form-outline mb-3">
                <label for="product_Brand" class="form-label">Product Brand</label>
                <select class="form-select" name="product_brand" id="" aria-label="Default select example">
                <option selected>Select Brand</option>
<?php
$select1 = "select * from brands" ;
$result_select1 = mysqli_query($con,$select1);
while($data1 = mysqli_fetch_assoc( $result_select1 ))
{
  $brandname = $data1['brand_name'];
  $brandid  = $data1['brand_id'];
  echo "<option value=' $brandid '> $brandname</option> " ;
}
?>
                    </select>
                </div>
                    </div>
                     <div class="col-md-6">
                     <div class="form-outline mb-3">
                <label for="formFile" class="form-label">Product Image1</label>
                <input type="file" class="form-control" name="product_image1" id="product_image1"
                     required="required">
                </div>
                <div class="form-outline mb-3">
                <label for="formFile" class="form-label">Product Image2</label>
                <input type="file" class="form-control" name="product_image2" id="product_image2"
                     required="required">
              
                </div>
                <div class="form-outline mb-3">
                <label for="formFile" class="form-label">Product Image3</label>
                <input type="file" class="form-control" name="product_image3" id="product_image3"
                     required="required">
              
                </div>
                <div class="form-outline mb-3">
                    <label for="product_price" class="form-label">Product Price</label>
                    <input type="text" class="form-control" name="product_price" id="product_price"
                     placeholder="Product Price" autocomplete="off" required="required">
                </div>

                <div class="form-outline mb-3">
                    <label for="product_sellingprice" class="form-label">Product Selling Price</label>
                    <input type="text" class="form-control" name="product_sellingprice" id="product_sellingprice"
                     placeholder="Product Sellingprice" autocomplete="off" required="required">
                </div>

                <input type="submit" class="btn btn-warning" name="insert_product" value="Insert Products"  style="float: right;">
                    </div>
               </div> 
            
          
            </form>
			</div>
			</div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<?php
$con = mysqli_connect("localhost", "root", "", "ksstask");

function getProducts()
{
    global $con;
    if (!isset($_GET['category'])) {
        if (!isset($_GET['brand'])) {
    $select1 = "select * from products order by rand() limit 0,9" ;
    $result_select1 = mysqli_query($con,$select1);
    while($data = mysqli_fetch_assoc( $result_select1 ))
    {
      $productid = $data['product_id'];
      $productname  = $data['product_name'];
      $description = $data['description'];
      $productimage1	  = $data['pimage1'];
      $category_id  = $data['category_id'];
      $brand_id  = $data['brand_id'];
      $productprice = $data['price'];
      $sellingprice= $data['selling_price'];
      echo "   <div class='col-md-4'>
      <div class='card'>
          <img src='./admin/product_images/$productimage1' class='card-img-top' alt='...'>
          <h5 class='card-title'> $productname</h5>
          <div class='card-body'>
              <p class='card-text'>$description</p>
              <p class='card-text'>$productprice</p>
              <a href='products.php?add_to_cart=$productid' class='btn btn-warning'>Add</a>
                <a href='product_details.php?product_id=$productid' class='btn btn-danger'>View more</a>
        </div>
     </div>
</div>" ;
    }
}
}
}

function getUniqueProducts()
{
    global $con;
    if (isset($_GET['category'])) {
        $catagoryid = $_GET['category'];
    $select1 = "select * from products where category_id=$catagoryid " ;
    $result_select1 = mysqli_query($con,$select1);
    while($data = mysqli_fetch_assoc( $result_select1 ))
    {
      $productid = $data['product_id'];
      $productname  = $data['product_name'];
      $description = $data['description'];
      $productimage1	  = $data['pimage1'];
      $category_id  = $data['category_id'];
      $brand_id  = $data['brand_id'];
      $productprice = $data['price'];
      $sellingprice= $data['selling_price'];
      echo "   <div class='col-md-4'>
      <div class='card'>
          <img src='./admin/product_images/$productimage1' class='card-img-top' alt='...'>
          <h5 class='card-title'> $productname</h5>
          <div class='card-body'>
              <p class='card-text'>$description</p>
              <p class='card-text'>$productprice</p>
              <a href='products.php?add_to_cart=$productid' class='btn btn-warning'>Add</a>
                <a href='product_details.php?product_id=$productid' class='btn btn-danger'>View more</a>
        </div>
     </div>
</div>" ;
    }
}
}

function getcategories()
{
    global $con;
    $select = "select * from categories" ;
$result_select = mysqli_query($con,$select);
      while($data = mysqli_fetch_assoc( $result_select ))
      {
        $catagoryname = $data['category_name'];
        $categoryid  = $data['category_id'];
        echo "  <li class='nav-item'>
        <a href='products.php?category=$categoryid' class='nav-link' > $catagoryname</a>
      </li>" ;
      }
}

function getbrands()
{
    global $con;
    $select = "select * from brands" ;
$result_select = mysqli_query($con,$select);
      while($data = mysqli_fetch_assoc( $result_select ))
      {
        $brandname = $data['brand_name'];
        $brandid  = $data['brand_id'];
        echo "  <li class='nav-item'>
        <a href='products.php?brand=$brandid' class='nav-link' >$brandname</a>
      </li>" ;
      }
}








?>
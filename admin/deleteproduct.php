<?php
   if (isset($_GET['delete_product'])) {
          
     $delete_id= $_GET['delete_product'];

          
     $delete_product = "delete from products where product_id= $delete_id" ;
     $result_select1 = mysqli_query($con,$delete_product);
     if($result_select1)
     {
        echo"<script>alert('This product was deleted')</script>";
            echo"<script>window.open('index.php','_self')</script>";
     }

    }
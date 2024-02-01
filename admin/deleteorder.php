<?php
   if (isset($_GET['delete_order'])) {
          
     $delete_id= $_GET['delete_order'];

          
     $delete_order = "delete from neworder where id= $delete_id" ;
     $result_select1 = mysqli_query($con,$delete_order);
     if($result_select1)
     {
        echo"<script>alert('This product was deleted')</script>";
            echo"<script>window.open('index.php?upload_excel','_self')</script>";
     }

    }
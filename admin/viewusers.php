
<style>
  .thumb{
    width: 100px;
    height: 100px;;
}
</style>

<div class="container-fluid">
    <div class="row">
    <h3>View Users</h3>
    </div>

    <div class="row">
        <table class="table table-bordered">
          <thead>
            <tr>
            <td>No</td>
              <td>User ID</td>
              <td>User Name</td>
              <td>email</td>
              <td>Address</td>
              <td>Mobile</td>
        
            </tr>
          </thead>

          <tbody>
          <?php
          

          $get_order_details = "select * from users" ;
          $result_select2 = mysqli_query($con,$get_order_details);
          $number = 0;
         while($row1 = mysqli_fetch_assoc( $result_select2))
          {
             $user_id= $row1['id'];
             $user_name= $row1['name'];
             $email = $row1['email'];
             $image= $row1['image'];           
             $address = $row1['address'];
             $mobile = $row1['mobile'];
             $number++;
             
             ?>
          
             <tr>
             <td><?php 	echo "$number" ?></td>
             <td><?php 	echo "$user_id" ?></td>
             <td><?php 	echo "$email" ?></td>
             <td><?php 	echo "<img src='../users/user_images/$image' alt='' class='thumb'>" ?></td>
             <td><?php 	echo "$address" ?></td>
             <td><?php 	echo "$mobile" ?></td>

          </tr>

          <?php
  } 
?>        
     

          </tbody>

        </table>

    </div>
</div>


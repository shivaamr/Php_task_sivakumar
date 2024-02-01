
<?php
include('../includes/connect.php');
include('../functions/all_functions.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-Edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
 
<style>
  h1{

font-size: 15px;

}
  .nav{

  background: rgba(18, 33, 46, 0.9);
  transition: 0.3s;
 
}
.nav li a{

color: #fff;
transition: 0.3s;

}
</style>

</head>
<body>
<div class="container-fluid">
<div class="row">
<h1 style="font-size:20px;margin-top:15px;">Dashboard</h1>
</div>


    <div class="row">
        
        <div class="col--md-12">
        <ul class="nav">

    <li class="nav-item">
    <a class="nav-link active" href="index.php?upload_excel">Upload Excel</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?insert_products">Insert Products</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="index.php?view_products">View Product</a>
  </li>




  <li class="nav-item">
    <a class="nav-link" href="logout.php">Log Out</a>
  </li>
</ul>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
    <?php
if (isset($_GET['insert_products'])) {
    include('insert_product.php');
}
if (isset($_GET['upload_excel'])) {
    include('uploadexcel.php');
}
if (isset($_GET['insert_brand'])) {
  include('insertbrand.php');
}
if (isset($_GET['view_products'])) {
  include('viewproducts.php');
}
if (isset($_GET['edit_product'])) {
  include('editproducts.php');
}
if (isset($_GET['delete_product'])) {
  include('deleteproduct.php');
}
if (isset($_GET['edit_order'])) {
  include('editorder.php');
}
if (isset($_GET['delete_order'])) {
  include('deleteorder.php');
}


?>
    </div>
</div>


</body>
</html>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>


	<script type="text/javascript">
	
	$( document ).ready(function() {
    console.log( "ready!" );
	$('#example').DataTable();
	$('#example1').DataTable();
});

	
	</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
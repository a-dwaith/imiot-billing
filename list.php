<?php
include ('db_connection.php');
$query = "SELECT * FROM item_list";
$result = mysqli_query($conn, $query);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>List</title>
    <style>
        .top {
            margin-top: 10rem;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="login.php">imiot-Billso.exe</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="imiot.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="search.php">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Logout</a>
        </li>
    </div>
  </div>
</nav>
<table class="table table-light table-striped">
  <thead>
    <tr>
      <th scope="col">Sl_no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact number</th>
      <th scope="col">Quantity</th>
      <th scope="col">Category</th>
      <th scope="col">Items</th>
    </tr>
  </thead>

<?php
if (mysqli_num_rows($result) > 0) {
  while($data = mysqli_fetch_assoc($result)) 
  {
 ?>

 <tr>
   <td><?php echo $data['sl_no']; ?> </td>
   <td><?php echo $data['name']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['con_number']; ?> </td>
   <td><?php echo $data['quantity']; ?> </td>
   <td><?php echo $data['category']; ?> </td>
   <td><?php echo $data['items']; ?> </td>
 <tr>

 <?php
}
  } 
?>

</table>
</body>
</html>
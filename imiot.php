<?php
include ('db_connection.php');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $quantity=$_POST['quantity'];
    $category=$_POST['category'];
    $items=$_POST['items'];

    $sql = "INSERT INTO `item_list` (`sl_no`, `name`, `email`, `con_number`, `quantity`, `category`, `items`) VALUES (NULL, '$name', '$email', '$contact', '$quantity', '$category' , '$items');" ;

    if ($conn->query($sql) === TRUE) 
    {
        echo "<script>alert('List added')</script>";
    }
    else
    {
        echo "<script>alert('Failed to enter your list try again')</script>";
    }
}
/*if(isset($_POST['showitems']))
{
    session_start();
    {
        header("location:http://localhost/booga/imiot/list.php");
    }
}*/
if(isset($_POST['slno']))
{
    session_start();
    {
        header("location:http://localhost/booga/imiot/showinvoice.php");
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Home</title>
    <style>
        .top {
            margin-top: 2rem;
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
          <a class="nav-link active" aria-current="page" href="list.php">Show list</a>
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
    <main class="d-flex justify-content-center align-items-center top">
        <div style="width:35rem;" class="card p-3">
            <h2 class="text-muted text-center">Item list</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact number</label>
                    <input type="number" name="contact" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" name="quantity" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label for="inputState" class="form-label">Category</label>
                    <select name="category" class="form-select" required>
                        <option value="HARDWARE">Hardware</option>
                        <option value="SOFTWARE">Software</option>
                        <option value="PROJECT">Project</option>
                    </select>
                </div> 

                <div class="mb-3">
                    <label for="items" class="form-label">Items</label>
                    <input type="number" name="items" class="form-control">
                </div>

                <div class="mb-3 d-grid">
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                </div>

                <!--<div class="mb-3 d-grid">
                    <button type="submit" name="showitems" class="btn btn-primary">Show items</button>
                </div>
                
                <div class="mb-3 d-grid">
                    <button type="submit" name="slno" class="btn btn-primary">search</button>
                </div>
                
                <div class="mb-3 d-grid">
                    <button type="submit" name="generate_pdf" class="btn btn-primary">Download receipt</button>
                </div>
                -->
            </form>

        </div>
    </main>
</body>

</html>
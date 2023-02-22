
<?php
include ('db_connection.php');
if(isset($_POST['login']))
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $sql = "select user_name,password from admin where user_name = '".$user_name."' AND password = '".$password."'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    {
        if($row["user_name"]==$user_name && $row["password"]==$password)
        {
            session_start();
            {
                header("location:http://localhost/booga/imiot/imiot.php");
            }
        }
        else
        {
            echo "<script>alert('Username or Password does not match!')</script>";   
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>login</title>
    <style>
        .top {
            margin-top: 10rem;
        }
    </style>
</head>

<body>
<?php

if($login)
{
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> You are logged in 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="login.php">imiot-Billso.exe</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    </div>
  </div>
</nav>
    <main class="d-flex justify-content-center align-items-center top">
        <div style="width:35rem;" class="card p-3">
            <h2 class="text-muted text-center">Log In</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="user_name" class="form-label">Username</label>
                    <input type="text" placeholder="Enter your username" name="user_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" placeholder="Enter your password" name="password" class="form-control" required>
                </div>
                <div class="mb-3 d-grid">
                    <button type="submit" name="login" class="btn btn-primary">login</button>
            </form>

        </div>
    </main>
</body>

</html>

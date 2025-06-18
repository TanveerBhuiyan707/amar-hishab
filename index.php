<?php
session_start();
include "db.php";


if($_SERVER['REQUEST_METHOD']==='POST'){
  $user = $_POST['username'];
  $pass =sha1($_POST['password']);

  $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)==1){
    $_SESSION['user'] = $user;
    header("Location: dashboard.php");
  }else{
    $error = "Invalid login";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Login</title>
</head>
<body class="bg-light d-flex justify-content-center" style="height:100vh;">
  <div class="card p-4" style="width:90%;max: width 400px;">
    <h4 class="text-center">Login</h4>
    <?php if(!empty($error)) echo "<div class='alert alert-danger'>$error</div>"?>
    <form  method="post">
      <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
      <input type="password" name="password" class="form-control mb-3" placeholder="password" required>
      <button class="btn btn-primary w-100">Login</button>
    </form>
  </div>
  
</body>
</html>
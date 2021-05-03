<?php
$servername="localhost";
$username="root";
$password="";
$database="aadarsh school";
$conn=mysqli_connect($servername, $username, $password, $database);
if (mysqli_connect_errno()){
    echo "Failed to connect: " . mysqli_connect_error();
}
session_start();
if(isset($_POST['submit'])){
    $sql = "SELECT * FROM `admin login`";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $db_username = $row['uname'];
    $db_password = $row['pass'];
    if(($_POST['username']==$db_username)and($_POST['password']==$db_password)){
        header("Location: adminpage.php");
    }
    else{
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Error !</strong> invalid credentials
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <style media="screen">
    body {
     background-image: url("books.jfif");
     background-color: #111;
    }
    input[type=text], input[type=password], select {
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 20%;
      background-color:	#696969;
      color: white;
      padding: 14px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color:	#808080;
    }
    .form {
      border-radius: 5px;
      background-color:	#DCDCDC;
      padding: 20px;
      margin: 0 auto;
      text-align: center;
      width:40%
      position: relative;
     width: 400px;
     height: 230px;
     margin-top: 12%;
     opacity: 1.0;
    }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Admin Login</title>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="https://www.google.com/search?rlz=1C1CHBF_enIN860IN860&sxsrf=ALeKk00qHQFclOoI94Evji-a8jXSIXFJRA:1607148827897&q=Aadarsh%20school%20shadipur%20julana&sa=X&ved=2ahUKEwjOn_P3l7btAhVj4nMBHcs-CGcQvS4wAHoECAIQMA&biw=1536&bih=754&dpr=1.25&tbs=lf:1,lf_ui:2&tbm=lcl&rflfq=1&num=10&rldimm=12514883010836950755&lqi=Ch5BYWRhcnNoIHNjaG9vbCBzaGFkaXB1ciBqdWxhbmFaMAoOYWFkYXJzaCBzY2hvb2wiHmFhZGFyc2ggc2Nob29sIHNoYWRpcHVyIGp1bGFuYQ&rlst=f#rlfi=hd:;si:12514883010836950755,l,Ch5BYWRhcnNoIHNjaG9vbCBzaGFkaXB1ciBqdWxhbmFaMAoOYWFkYXJzaCBzY2hvb2wiHmFhZGFyc2ggc2Nob29sIHNoYWRpcHVyIGp1bGFuYQ;mv:[[29.367538000000003,76.5809653],[28.860364399999998,76.2626885]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:2">Aadarsh School</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="workerlogin.php">Worker Login</a>
    </div>
  </div>
</nav>
<div class="form">
<form class="" action="adminlogin.php" method="post">
  <label for="">Username </label>
  <input type="text" name="username" value=""><br>
  <label for="">Password </label>
  <input type="password" name="password" value=""><br>
  <input type="submit" name="submit" value="Login">
</form>
</div>

  </body>
</html>

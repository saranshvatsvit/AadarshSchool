<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  $servername="localhost";
  $username="root";
  $password="";
  $database="aadarsh school";
  $conn=mysqli_connect($servername, $username, $password, $database);
  $name=$fname=$srnno=$class=$month=$feerec=" ";
  $name=$_POST['name'];
  $fname=$_POST['fname'];
  $srnno=$_POST['srnno'];
  $class=$_POST['class'];
  $month=$_POST['month'];
  $feerec=$_POST['feerec'];
  $sql="INSERT INTO `fee details` (`Name`, `Fathers Name`, `SRN Number`, `Class`, `Month`, `Fee Received`, `Date / Time`) VALUES ('$name', '$fname', '$srnno', '$class', '$month', '$feerec', current_timestamp());";
  $result=mysqli_query($conn, $sql);
  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success !</strong> Your form has been saved
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Fee Form</title>
  </head>
  <style>
body{
  padding: 0px;
  margin: 0px;
}
body {
 background-image: url("books.jfif");
 background-color: #111;
}
input, select{
  padding: 12px 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin: 8px;
}

input[type=submit] {
  width: 25%;
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
  width: 420px;
  height: 500px;
  margin-top: 6%;
  opacity: 1.0;
}
</style>
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
      <a class="nav-link" href="main.php">Logout <span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>
<div class="form">
<form class="" action="form.php" method="post">
  <label for="">Name</label>
  <input type="text" name="name" value=""><br>
  <label for="">Fathers name</label>
  <input type="text" name="fname" value=""><br>
  <label for="">SRN Number</label>
  <input type="text" name="srnno" value=""><br>
  <label for="">Class</label>
  <select class="" name="class">
    <option value="NULL"> </option>
    <option value="Nursery">Nursery</option>
    <option value="1st">1st</option>
    <option value="2nd">2nd</option>
    <option value="3rd">3rd</option>
    <option value="4th">4th</option>
    <option value="5th">5th</option>
    <option value="6th">6th</option>
    <option value="7th">7th</option>
    <option value="8th">8th</option>
    <option value="9th">9th</option>
    <option value="10th">10th</option>
    <option value="11th Arts">11th Arts</option>
    <option value="11th Commerce">11th Commerce</option>
    <option value="11th Non med">11th Non med</option>
    <option value="11th Med">11th Med</option>
    <option value="12th Arts">12th Arts</option>
    <option value="12th Commerce">12th Commerce</option>
    <option value="12th Non med">12th Non med</option>
    <option value="12th Med">12th Med</option>
  </select><br>
  <label for="">Month</label>
  <input type="text" name="month" value=""><br>
  <label for="">Fee Received</label>
  <input type="number" name="feerec" value=""><br>
  <input type="submit" name="submit" value="submit">
</form>
</div>
  </body>
</html>

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `fee details` WHERE CONCAT(`Name`, `Fathers Name`, `SRN Number`, `Class`,`Month`,`Fee Received`,`Date / Time`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
}
else {
   $query = "SELECT * FROM `fee details`";
   $search_result = filterTable($query);
}
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "aadarsh school");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <style media="screen">
    /*body {
     background-image: url("books.jfif");
     background-color: #111;
    }*/
    .right{
      padding-left: 850px;
    }
    table {
      border: solid 4px #585858;
      border-collapse: collapse;
      text-align: center;
      margin-top: 100px;

     }
    tr { border: none; }
    td, th{
      border-right: solid 3px #585858;
      border-left: solid 3px #585858;
      padding: 20px;
    }
    th{
      background-color: #A8A8A8;
      color: white;
    }
    td{
      background-color:#E8E8E8;
    }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Fee Details</title>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="https://www.google.com/search?rlz=1C1CHBF_enIN860IN860&sxsrf=ALeKk00qHQFclOoI94Evji-a8jXSIXFJRA:1607148827897&q=Aadarsh%20school%20shadipur%20julana&sa=X&ved=2ahUKEwjOn_P3l7btAhVj4nMBHcs-CGcQvS4wAHoECAIQMA&biw=1536&bih=754&dpr=1.25&tbs=lf:1,lf_ui:2&tbm=lcl&rflfq=1&num=10&rldimm=12514883010836950755&lqi=Ch5BYWRhcnNoIHNjaG9vbCBzaGFkaXB1ciBqdWxhbmFaMAoOYWFkYXJzaCBzY2hvb2wiHmFhZGFyc2ggc2Nob29sIHNoYWRpcHVyIGp1bGFuYQ&rlst=f#rlfi=hd:;si:12514883010836950755,l,Ch5BYWRhcnNoIHNjaG9vbCBzaGFkaXB1ciBqdWxhbmFaMAoOYWFkYXJzaCBzY2hvb2wiHmFhZGFyc2ggc2Nob29sIHNoYWRpcHVyIGp1bGFuYQ;mv:[[29.367538000000003,76.5809653],[28.860364399999998,76.2626885]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:2">Aadarsh School</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link" href="adminpage.php">Complete Details <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="search.php">Logout <span class="sr-only">(current)</span></a>
    </div>
    <form class="form-inline my-2 my-lg-0 right" method="post" action="search.php" >
      <input class="form-control mr-sm-2" type="text" name="valueToSearch" placeholder="Enter SRN number" aria-label="Search">
      <input type="submit" name="search" value="Filter">
    </form>
  </div>
</nav>
<div class="">
   <center>
<table>
    <tr>
      <th>Name</th>
      <th>Father's Name</th>
      <th>SRN Number</th>
      <th>Class</th>
      <th>Month</th>
      <th>Fee Received</th>
      <th>Date & Time</th>
    </tr>
  <?php while($row = mysqli_fetch_array($search_result)):?>
        <tr>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Fathers Name'];?></td>
        <td><?php echo $row['SRN Number'];?></td>
        <td><?php echo $row['Class'];?></td>
        <td><?php echo $row['Month'];?></td>
        <td><?php echo $row['Fee Received'];?></td>
        <td><?php echo $row['Date / Time'];?></td>
        </tr>
     <?php endwhile;?>
</table>
</center>
</div>
  </body>
</html>

<html>
<head>
  <title>ITF Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #fffdf1;">
<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab.mysql.database.azure.com', 'miew@itflab', 'It123456789', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container" style="padding-top: 50px;">
<table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th><center>Product</center></th>
        <th><center>Price</center></th>
        <th><center>Amount</center></th>
        <th><center>Total</center></th>
      </tr>
    </thead>
<?php
while($result = mysqli_fetch_array($res))
{
?>
  <tr class="table-danger">
    <td><?php echo $result['product'];?></div></td>
    <td><?php echo $result['price'];?></td>
    <td><?php echo $result['amount'];?></td>
    <td><?php echo $result['total'];?></td>
    <td><center><button type="submit" class="btn btn-light"><a href="delete.php?id=<?=$result['id'];?>">Delete</a></button></center</td>
        <button type="submit" class="btn btn-light"><a href="edit.php?id=<?=$result['id'];?>">Edit</a></button></td>
  </tr>
</div>
<?php
}
?>
 </table>
<?php
mysqli_close($conn);
?>
<center><button type="submit" class="btn btn-primary" onclick="window.location= 'form1.html'">Add</button></center>
</body>
</html>
<html lang="en">
    <head><title>Edit</title></head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAB02</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <head>
    <title>Comment Form</title>
  </head>

<style>
  .container {
  width: 315px;
  height: 520px;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.897);
  -moz-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.932);
  -webkit-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.397);
  -o-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.932);
  -ms-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.842);
  border-radius: 20px;
  -moz-border-radius: 20px;
  -webkit-border-radius: 20px;
  -o-border-radius: 20px;
  -ms-border-radius: 20px; 
  }
</style>

<h1 style="padding-top: 200px; padding-left: 45%; color: rgb(255, 255, 255); text-shadow:1px 1px 10px rgb(4, 0, 54);"><b>Edit form</b></h1>
<body> 
<body background="16.jpg">
<div class="comment-form">
<div class="container">

<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab.mysql.database.azure.com', 'miew@itflab', 'It123456789', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = $_GET['id'];
$sql = "SELECT * FROM guestbook WHERE id = $id";
$query = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($query);
?>

<form action="save-edit.php?id=<?=$row['id'];?>" method = "post">
<input type="hidden" name="id" value="<?=$row['id'];?>">
<div class="col-sm-1">
  <div class="form-group" style="padding-left: 10px; padding-top: 20px;">
    <b><font size="6" color=#294867><label for="idName">Name:</label></font></b>
    <input type="text" class="form-control" placeholder="Enter Name" id="idName" name = "name" style="width: 210px;" value="<?=$row['name'];?>">
  </div>
  <div class="form-group" style="padding-left: 10px;">
    <b><font size="6" color=#294867><label for="idComment">Comment:</label></font></b>
    <textarea class="form-control" rows="5"placeholder="Comment here" style="width: 225px;" id="idComment" name = "comment" value="<?=$row['comment'];?>"></textarea>
  </div>
  <div class="form-group" style="padding-left: 10px;">
    <b><font size="6" color=#294867><label for="idLink">Link:</label></font></b>
    <input type="text" class="form-control" placeholder="Enter Link" id="idLink" name = "link" style="width: 210px;" value="<?=$row['link'];?>">
  </div>
  <div class="form-group form-check">
  <center><button type="submit" class="btn btn-primary" >Submit</button></center>
  </div>
</div>
</form>
</div>
</div>
</body>
</html>

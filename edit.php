<form action="show.php" name="insert" method="post">
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab.mysql.database.azure.com', 'miew@itflab', 'Mw7456891023', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$id = $_GET['id'];
$user_id = false;
$sql = "SELECT * FROM guestbook WHERE id = $id";
$query = mysqli_query($conn , $sql);

if(mysqli_num_rows($query) > 0){
    $user_id = mysqli_fetch_array($query);
}

mysqli_close($conn);
?>
   
<html lang="en">
    <head><title>Edit<title></head>
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
  -ms-border-radius: 20px; }

  .comment-form {
    padding: 8%;
    padding-top: 200px;
  }
</style>

<body>
<body background="15.png">
    <h1>Edit Product</h1>
<div class="comment-form">
<div class="container">
<form action="save-edit.php" method = "post">
<div class="col-sm-1">
  <div class="form-group" style="padding-left: 10px; padding-top: 20px;">
    <b><font size="6" color=#00338d><label for="idName">Name:</label></font></b>
    <input type="text" class="form-control" placeholder="Enter Name" id="idName" name = "name" style="width: 210px;" value="<?=$user_id['name'];?>">
  </div>
  <div class="form-group" style="padding-left: 10px;">
    <b><font size="6" color=#00338d><label for="idComment">Comment:</label></font></b>
    <textarea class="form-control" rows="5"placeholder="Comment here" style="width: 225px;" id="idComment" name = "comment" value="<?=$user_id['comment'];?>"></textarea>
  </div>
  <div class="form-group" style="padding-left: 10px;">
    <b><font size="6" color=#00338d><label for="idLink">Link:</label></font></b>
    <input type="text" class="form-control" placeholder="Enter Link" id="idLink" name = "link" style="width: 210px;" value="<?=$user_id['link'];?>">
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

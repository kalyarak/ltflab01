<form action="show.php" name="insert" method="post">
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab.mysql.database.azure.com', 'miew@itflab', 'It123456789', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (name , comment , link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
    header('location: show.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

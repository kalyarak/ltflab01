<form action="show.php" name="delete" method="get">
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab.mysql.database.azure.com', 'miew@itflab', 'Mw7456891023', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['id'];

$sql = 'DELETE FROM guestbook WHERE id = $id';


if (mysqli_query($conn, $sql)) {
    echo "Delete Succesfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>


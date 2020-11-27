<form action="show.php" name="insert" method="post">
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab.mysql.database.azure.com', 'miew@itflab', 'It123456789', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');

$product = $_POST['product'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$total = $price * $amount

$sql = "INSERT INTO guestbook (product , price , amount, total) VALUES ('$product', '$price', '$amount', $total)";


if (mysqli_query($conn, $sql)) {
    header('location: show1.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab.mysql.database.azure.com', 'miew@itflab', 'Mw7456891023', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$sql = "DELETE FROM guestbook WHERE id = {$id}";
$query = mysqli_query($sql);

echo "<a href=\"show.php"\">BACK</a>";

<?php
if ($_GET['id']){
    $id = $_GET['id'];
}else{
    echo "comment not found";
    die();
}

$sql = "DELETE FROM guestbook WHERE id = {$id}";
$query = mysqli_query( $itflab , $sql);

echo "<a href=\"show.php"\">BACK</a>";
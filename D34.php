<?php

$x  = mysqli_connect(
    'localhost' ,
    'root' ,
    '1' ,
    'contacts');
if (!$x) {
    echo 'connection error' . mysqli_connect_error();
}

$sql = "select * from form1 where id > '2000'";
$result = mysqli_query($x, $sql);

$rows = [];

for($i =0; $i < mysqli_num_rows($result); $i++){
    $row = mysqli_fetch_assoc($result);
    $rows[] = $row;
    print_r ($rows);
    echo  '<br>';
}
?>


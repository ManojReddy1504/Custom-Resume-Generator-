<?php
 include 'config.php';

$query = "SELECT * FROM users,content WHERE email=email2 AND user_id=(SELECT max(user_id) FROM content)";
//if(mysqi_num_rows($query)){
$result = mysqli_query($conn, $query);
//}

?>
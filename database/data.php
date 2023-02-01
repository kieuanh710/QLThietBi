<?php
include_once('../database/database.php');
?>
<?php
    $sql = "SELECT * FROM nhiet_do;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    foreach ($result as $data){
        $chan_cam[] = $data['chan_cam'];
        $nhiet_do[] = $data['nhiet_do'];
    }
?>
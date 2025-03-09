<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

       
        $sql = "SELECT * FROM `registration_3` WHERE `id` = '$id'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $record = mysqli_fetch_assoc($result);
           
            echo json_encode(['status' => 'success', 'record' => $record]);
        } else {
            echo json_encode(['status' => 'error']);
        }
    } else {
        echo json_encode(['status' => 'error']);
    }
}
?>
 
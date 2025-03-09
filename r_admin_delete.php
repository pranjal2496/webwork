<?php

         include 'conn.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM `registration_2` WHERE `id` = $id ";
    if ($con->query($sql) === TRUE) {

            echo json_encode(['status' => 'success', 'status_text' => 'Record deleted successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'status_text' => 'Failed to delete record.']);
        }

        //mysqli_stmt_close($stmt);
    } else {
        echo json_encode(['status' => 'error', 'status_text' => 'Database error.']);
    }
 
?>
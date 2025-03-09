<?php
include 'conn.php';
$id = $_GET['updateid'];

if (isset($_POST['done'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $purpose = $_POST['purpose'];

    $sql = "UPDATE `registration_3` SET id= $id, name='$name', address='$address', purpose='$purpose' WHERE id= $id ";

    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "updated successfully";exit;
        header('location:queenzend.php');
    } else {
        die(mysqli_error($con));
    }
}
?>  




<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
  
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $purpose = $_POST['purpose'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
      
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES['image']['name']);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (getimagesize($_FILES['image']['tmp_name']) === false) {
            echo "File is not an image.";
            exit;
        }
  
        
        if ($_FILES['image']['size'] > 5000000) { 
            echo "Sorry, your file is too large.";
            exit;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            exit;
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            echo "The file " . basename($_FILES['image']['name']) . " has been uploaded.";
            $image = $targetFile; 
        } 
        
        else {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }
    }
     
    else {
        
        $sql = "SELECT image FROM registration_3 WHERE id = $id";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $image = $row['image']; 
    }

    $updateSql = "UPDATE `registration_3` SET 
                    name = '$name', 
                    address = '$address', 
                    purpose = '$purpose',  
                    image = '$image' 
                  WHERE id = $id";

    if (mysqli_query($con, $updateSql)) {
        echo "Record updated successfully";
        header("Location: queenzend.php"); 
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}
?>

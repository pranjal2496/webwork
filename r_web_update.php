


  

<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $id = $_POST['id'];
    $name = $_POST['name'];
    $url = $_POST['url'];
    $username = $_POST['username'];
    $password = $_POST['password'];

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
        
        $sql = "SELECT image FROM registration_1 WHERE id = $id";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $image = $row['image']; 
    }

    $updateSql = "UPDATE `registration_1` SET 
                    name = '$name', 
                    url = '$url', 
                    username = '$username', 
                    password = '$password', 
                    image = '$image' 
                  WHERE id = $id";

    if (mysqli_query($con, $updateSql)) {
        echo "Record updated successfully";
        header("Location: ring_1.php"); 
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}
?>




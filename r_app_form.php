



<?php

include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $link = $_POST['link'];
    $username = $_POST['username'];
    $password = $_POST['password'];
  
  
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $uploadDir = 'uploads/';  
        $imageName = basename($_FILES['image']['name']);
        $uploadFile = $uploadDir . $imageName;

        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $fileType = $_FILES['image']['type'];

        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
               
            } else {
                echo "Error uploading the file.";
                exit;
            }
        } else {
            echo "Invalid file type.";
            exit;
        }
    } else {
       
        $uploadFile = 'uploads/default.jpg'; 
    }

    
    $sql = "INSERT INTO registration (`name`, `description`, `link`, `username`, `password`, `image`) 
            VALUES ('$name', '$description', '$link', '$username', '$password', '$uploadFile')";
    
    if (mysqli_query($con, $sql)) {
        echo "Record added successfully!";
        header('Location: ring_1.php'); 
    } else {
        echo "Error adding record: " . mysqli_error($con);
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        .container {
            display: flex;
            justify-content: center;
        }

        .card {
            background:#77A69D!important;}

        body {
            background: rgb(240,255,252);
    background: radial-gradient(circle, rgba(240,255,252,1) 100%, rgba(119,166,157,1) 100%);
}

        .queen {
            background: white;
        }

        .form-control {
            width: 100%;
        }

        .queen.container {
            margin-top: 5%;
            width: 70%;
            padding: 50px 30px 70px 30px;
        }

        .button-wrapper {
            width: 300px;
            text-align: center;
            margin: auto;
            height: 6vh;
            background: #406665!important;
            border-radius: 2rem;

        }

        .button-wrapper button {
            color: white !important;
        }
    </style>

</head>

 
<body>

    <div style="height: 93vh;">

        <div class="col-12">
            <div class="card mb-4 bg-white text-dark" style="width: 100%;">
                <div class="p-3 mb-2 bg-header text-dark">
                    <div style="display: flex;">
                        <img src="Image/queenzendlogo.png" style="width: 10%;height: 10vh;">

                        <div style="margin-left: 15%; margin-top: 0%;">
                            <h1 class="text-center">Ring Credential Manager</h1>
                            <h6 class="text-center">Manage all your credential with ease</h6>
                        </div>

                        <div class="links grid gap-3" style="margin-left: 28%; margin-top: 1%; display: flex; height: 49px;">
                            <div class="input-group-text px-2 g-col-6"><b><i
                                        class="bi bi-person-circle"> </i>Ring</b></div>
                            <div class="input-group-text px-2 g-col-6">
                                <button type="button" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout" style="border: none;">
                                    <a style="text-decoration: none;" href="logout.php"><b><i class=""><img src="Image/power-button.png" style="width: 100%; height: 4vh;"> </i></b></a></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <div class="queen container ">
            <div class="form-content">
                <!-- form section -->  
                    <h4 style="border-bottom: 0.2px solid #c9d9ea; color: #0e0e0e;  padding-bottom: 16px; margin-bottom: 30px;">Add App</h4>
                <form id="dataForm" action="r_app_form.php" method="POST" enctype="multipart/form-data">
                    <div class="grid gap-3">

                        <div class="row " style="margin-top: 4px;">

                            <div class="col-md-4">
                                <label for="name"><b>Name</b></label>
                                <input type="text" style="border-color: grey;" class="form-control" style="width: 100%;" id="name" name="name"
                                    value="">
                            </div>

                            <div class="col-md-4">
                                <label for="description"><b>Description</b></label>
                                <input type="text"  style="border-color: grey;" id="description" class="form-control" style="width: 100%;" name="description"
                                    value="">
                            </div>

                            <div class="col-md-4">
                                <label for="link"><b>link</b></label>
                                <input type="text" style="border-color: grey;" id="link" class="form-control" style="width: 100%;" name="link"
                                    value="">
                            </div>
                        </div>

                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-4">
                                <label for="username"><b>Username</b></label>
                                <input type="text" style="border-color: grey;" id="username" class="form-control" style="width: 100%;" name="username"
                                    value="">
                            </div>

                            <div class="col-md-4">
                                <label for="password"><b>Password</b></label>
                                <input type="text" style="border-color: grey;" id="password" class="form-control" style="width: 100%;" name="password"
                                    value="">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="image"><b>Upload Image</b></label>
                                 <input type="file"  style="border-color: grey;" class="form-control" name="image" style="width: 100%;" id="image" accept="image/*" />
                            </div>

                        </div>
                    </div>

                    <div class="row button-wrapper" style="margin-top: 30px ">
                        <button type="submit" name="done" class="btn"  id="submit"><b>Submit</b></button>
                    </div>



                </form>
            </div>
        </div>
    </div>


    </div>
    <footer>
        <p class="p-3 bg-dark text-white text-center">@Ring.com</p>
    </footer>

</body>
<script src="script.js"></script>

</html>
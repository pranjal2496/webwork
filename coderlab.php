<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:index.php");
}
?>






<!DOCTYPE htlm>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style_4.css">
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
        header {
            position: sticky;
            top: 0;
            z-index: 99; 
        } 

        body { 
            overflow-x: scroll;
        }

        .button-a {
            color: rgb(0, 147, 215);
        }
    </style>

</head> 

<body>

    <header>
        <div class="col-12">
            <div class="card bg-white text-dark" style="width: 100%;">
                <div class="p-3 ">
                    <div style="display: flex;">
                        <img src="Image/queenzendlogo.png" style="width: 150px; margin-left: 6%;">

                        <div style="margin-left: 8%; margin-top: 0%;">
                            <h1 class="text-center">Coderlab Credential Manager</h1>
                            <h6 class="text-center">Manage all your credential with ease</h6>
                        </div>

                        <div class="links grid gap-3" style="margin-left: 22%; margin-top: 1%; display: flex; height: 49px;">
                            <div class="input-group-text px-2 g-col-6"><b><i
                                        class="bi bi-person-circle"> </i>Coderlab</b></div>
                            <div class="input-group-text px-2 g-col-6">
                                <button type="button" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout" style="border: none;">
                                    <a style="text-decoration: none;" href="logout.php"><b><i class=""><img src="Image/power-button.png" style="width: 100%; height: 4vh;"> </i></b></a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header> 

    
    <div style="display:flex">
        
        <div style="width: 100%;">

        <ul class="nav nav-pills my-3" id="pills-tab" role="tablist" style="margin-left: 2%;">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-apps" type="button" role="tab" aria-controls="pills-apps" aria-selected="true" style="color: black;">
                <h5><b><i class="bi bi-app-indicator"></i></b>  Apps</h5>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-websites-tab" data-bs-toggle="pill" data-bs-target="#pills-websites" type="button" role="tab" aria-controls="pills-websites" aria-selected="true" style="color: black;">
                <h5><b><i class="bi bi-globe"></i></b> Websites</h5>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-admin-details-tab" data-bs-toggle="pill" data-bs-target="#pills-admin-details" type="button" role="tab" aria-controls="pills-admin-details" aria-selected="true" style="color: black;">
                <h5><b><i class="bi bi-person-fill"></i></b>  Admin</h5>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-server-information-tab" data-bs-toggle="pill" data-bs-target="#pills-server-information" type="button" role="tab" aria-controls="pills-server-information" aria-selected="true" style="color: black;">
                <h5><b><i class="bi bi-browser-chrome"></i></b>  Server</h5>
            </button>
        </li>
    </ul> 


            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-apps" role="tabpanel" aria-labelledby="pills-apps-tab" tabindex="0">
                    <div class="card mb-3 p-2 g-col-3" style="margin: 1.5rem;">
                        <div class="card-header text-white bg-info " style="display: flex;">Apps
                            <div style="margin-left: 88%;"><button style="width: 5rem; border: none; border-radius: 2rem;"><a style="text-decoration: none !important; color: black" href="c_app_form.php"><b><i class="bi bi-person-fill-add"></i>  Add</b></a></button></div>
                        </div>
                        <div class=" text-center">

                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr. No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Link</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    include 'conn.php';

                                    $sql = "SELECT * FROM `registration`";
                                    $result = mysqli_query($con, $sql);
                                    $index = 0;
                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            $id = $row['id'];
                                            $name = $row['name'];
                                            $description = $row['description'];
                                            $link = $row['link'];
                                            $username = $row['username'];
                                            $password = $row['password'];
                                            $image = $row['image'];

                                            $index++;

                                            echo '<tr>

                   <td><b>' . $index. '</b></td>
                    <td>' . $name . '</td>
                    <td>' . $description . '</td>
                    <td>' . $link . '</td>
                    <td>' . $username . '</td>
                    <td>' . $password . '</td>
                     <td><img src="' . $image . '" class="tableimg" style="width: 50px; height: 50px;"></td>
                    <td>

                        <button data-bs-toggle="tooltip" title="Edit" data-bs-placement="top" style="border: none; text-decoration: none; background: unset !important;">
                            <a class="button-a p-2 g-col-6" href="c_app_edit.php?c_app_editid=' . $id . '"><i class="bi bi-pencil-fill"></i></a>
                        </button>

                        <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button" class="confirm_del_btn4" data-id="' . $id . '" style="border: none; background: unset !important;">
                            <a class="button-a p-2 g-col-6" href="#"><i class="bi bi-trash-fill"></i></a>
                        </button>

                        <button data-bs-toggle="tooltip" title="View" data-bs-placement="top" type="button" style="border: none; background: unset !important;" class="view_record_btn4" data-id="' . $id . '" data-bs-toggle="modal" data-bs-target="#myModal' . $id . '">
                        <a class="button-a p-2 g-col-6" href="#"><i class="bi bi-eye-fill"></i></a>
                          </button>


                    </td>
                </tr>';
                                            echo '<div id="myModal' . $id . '" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Coderlab Credential Manager</h4>
                            <button style="margin-left: 15%;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
                        </div>
        
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for=""><b>Name</b></label>
                                <input type="text" class="form-control" name="name" id="name" value="' . $name . '" readonly />
                            </div>
        
                            <div class="form-group mb-3">
                                <label for=""><b>Description</b></label>
                                <input type="text" class="form-control" name="description" id="description" value="' . $description . '" readonly />
                            </div>
        
                            <div class="form-group mb-3">
                                <label for=""><b>Link</b></label>
                                <input type="text" class="form-control" name="link" id="link" value="' . $link . '" readonly />
                            </div>
        
                            <div class="form-group mb-3">
                                <label for=""><b>Username</b></label>
                                <input type="text" class="form-control" name="username" id="username" value="' . $username . '" readonly />
                            </div>
        
                            <div class="form-group mb-3">
                                <label for=""><b>Password</b></label>
                                <input type="text" class="form-control" name="password" id="password" value="' . $password . '" readonly />
                            </div>
        
                             <div class="form-group mb-3">
                                <label for=""><b>Image</b></label>
                                <div>
                                   <img src="' . $image . '" class="img-fluid" style="width: 100px; height: 100px;" alt="Image">
                                </div>
                               </div>

                        </div>
        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
        
                    </div>
                </div>
            </div>';
                                        }
                                    }
                                    ?>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="pills-websites" role="tabpanel" aria-labelledby="pills-websites-tab" tabindex="0">
                    <div class="card mb-3 p-2 g-col-6" style="margin: 1.5rem;">
                        <div class="card-header text-white bg-info" style="display: flex;">Websites
                            <div style="margin-left: 85%;"><button style="width: 5rem; border: none; border-radius: 2rem;"><a style="text-decoration: none !important; color: black" href="c_web_form.php"><b><i class="bi bi-person-fill-add"></i>  Add</b></a></button></div>
                        </div>
                        <div class=" ">

                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr. No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">URL</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    include 'conn.php';

                                    $sql = "SELECT * FROM `registration_1`";
                                    $result = mysqli_query($con, $sql);
                                    $index = 0;
                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            $id =  $row['id'];
                                            $name = $row['name'];
                                            $url = $row['url'];
                                            $username = $row['username'];
                                            $password = $row['password'];
                                            $image = $row['image'];

                                            $index++;

                                            echo '<tr>

                    <td><b>' .$index. '</b></td>
                    <td>' . $name . '</td>
                    <td>' . $url . '</td>
                    <td>' . $username . '</td>
                    <td>' . $password . '</td>
                     <td><img src="' . $image . '" class="tableimg" style="width: 50px; height: 50px;"></td>
                    <td>

                        <button data-bs-toggle="tooltip" title="Edit" data-bs-placement="top" style="border: none; text-decoration: none; background: unset !important;">
                            <a class="button-a p-2 g-col-6" href="c_web_edit.php?c_web_editid=' . $id . '"><i class="bi bi-pencil-fill"></i></a>
                        </button>

                        <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button" class="confirm_del_btn5" data-id="' . $id . '" style="border: none; background: unset !important;">
                            <a class="button-a p-2 g-col-6" href="#"><i class="bi bi-trash-fill"></i></a>
                        </button>

                        <button data-bs-toggle="tooltip" title="View" data-bs-placement="top" type="button" style="border: none; background: unset !important;" class="view_record_btn5" data-id="' . $id . '" data-bs-toggle="modal" data-bs-target="#myModal' . $id . '">
                        <a class="button-a p-2 g-col-6" href="#"><i class="bi bi-eye-fill"></i></a>
                          </button>


                    </td>
                </tr>';
                                            echo '<div id="myModal' . $id . '" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Coderlab Credential Manager</h4>
                            <button style="margin-left: 15%;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
                        </div>
        
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for=""><b>Name</b></label>
                                <input type="text" class="form-control" name="name" id="name" value="' . $name . '" readonly />
                            </div>
        
                            <div class="form-group mb-3">
                                <label for=""><b>Url</b></label>
                                <input type="text" class="form-control" name="url" id="url" value="' . $url . '" readonly />
                            </div>
        
                            <div class="form-group mb-3">
                                <label for=""><b>Username</b></label>
                                <input type="text" class="form-control" name="username" id="username" value="' . $username . '" readonly />
                            </div>
        
                            <div class="form-group mb-3">
                                <label for=""><b>Password</b></label>
                                <input type="text" class="form-control" name="password" id="password" value="' . $password . '" readonly />
                            </div>

                            
                             <div class="form-group mb-3">
                                <label for=""><b>Image</b></label>
                                <div>
                                   <img src="' . $image . '" class="img-fluid" style="width: 100px; height: 100px;" alt="Image">
                                </div>
                               </div>

        
                        </div>
        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
        
                    </div>
                </div>
            </div>';
                                        }
                                    }
                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade " id="pills-admin-details" role="tabpanel" aria-labelledby="pills-admin-details-tab" tabindex="0">
                    <div class="card mb-3 p-2 g-col-6" style="margin: 1.5rem;">
                        <div class="card-header text-white bg-info" style="display: flex;">Admin Details
                            <div style="margin-left: 82%;"><button style="width: 5rem; border: none; border-radius: 2rem;"><a style="text-decoration: none !important; color: black" href="c_admin_form.php"><b><i class="bi bi-person-fill-add"></i>  Add</b></a></button></div>
                        </div>
                        <div class=" ">

                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr. No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Link</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    include 'conn.php';

                                    $sql = "SELECT * FROM `registration_2`";
                                    $result = mysqli_query($con, $sql);
                                    $index = 0;
                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            $id =   $row['id'];
                                            $name = $row['name'];
                                            $description = $row['description'];
                                            $panel = $row['panel'];
                                            $username = $row['username'];
                                            $password = $row['password'];
                                            $image = $row['image'];

                                            $index++;

                                            echo '<tr>

                    <td><b>' .$index. '</b></td>
                    <td>' . $name . '</td>
                     <td>' . $description . '</td>
                    <td>' . $panel . '</td>
                    <td>' . $username . '</td>
                    <td>' . $password . '</td>
                     <td><img src="' . $image . '" class="tableimg" style="width: 50px; height: 50px;"></td>
                    <td>

                        <button data-bs-toggle="tooltip" title="Edit" data-bs-placement="top" style="border: none; text-decoration: none; background: unset !important;">
                            <a class="button-a p-2 g-col-6" href="c_admin_edit.php?c_admin_editid=' . $id . '"><i class="bi bi-pencil-fill"></i></a>
                        </button>

                        <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button" class="confirm_del_btn6" data-id="' . $id . '" style="border: none; background: unset !important;">
                            <a class="button-a p-2 g-col-6" href="#"><i class="bi bi-trash-fill"></i></a>
                        </button>

                        <button data-bs-toggle="tooltip" title="View" data-bs-placement="top" type="button" style="border: none; background: unset !important;" class="view_record_btn6" data-id="' . $id . '" data-bs-toggle="modal" data-bs-target="#myModal' . $id . '">
                        <a class="button-a p-2 g-col-6" href="#"><i class="bi bi-eye-fill"></i></a>
                          </button>


                    </td>
                </tr>';
                                            echo '<div id="myModal' . $id . '" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Coderlab Credential Manager</h4>
                            <button style="margin-left: 15%;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
                        </div>
        
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for=""><b>Name</b></label>
                                <input type="text" class="form-control" name="name" id="name" value="' . $name . '" readonly />
                            </div>
        
                            <div class="form-group mb-3">
                                <label for=""><b>Description</b></label>
                                <input type="text" class="form-control" name="description" id="description" value="' . $description . '" readonly />
                            </div>

                            <div class="form-group mb-3">
                                <label for=""><b>Link</b></label>
                                <input type="text" class="form-control" name="panel" id="panel" value="' . $panel . '" readonly />
                            </div>
        
                            <div class="form-group mb-3">
                                <label for=""><b>Username</b></label>
                                <input type="text" class="form-control" name="username" id="username" value="' . $username . '" readonly />
                            </div>
        
                            <div class="form-group mb-3">
                                <label for=""><b>Password</b></label>
                                <input type="text" class="form-control" name="password" id="password" value="' . $password . '" readonly />
                            </div>

                            
                             <div class="form-group mb-3">
                                <label for=""><b>Image</b></label>
                                <div>
                                   <img src="' . $image . '" class="img-fluid" style="width: 100px; height: 100px;" alt="Image">
                                </div>
                               </div>

        
                        </div>
        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
        
                    </div>
                </div>
            </div>';
                                        }
                                    }
                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade " id="pills-server-information" role="tabpanel" aria-labelledby="pills-server-information-tab" tabindex="0">
                    <div class="card mb-3 p-2 g-col-6" style="margin: 1.5rem;">
                        <div class="card-header text-white bg-info" style="display: flex;">Server Information
                            <div style="margin-left: 78%;"><button style="width: 5rem; border: none; border-radius: 2rem;"><a style="text-decoration: none !important; color: black" href="c_server_form.php"><b><i class="bi bi-person-fill-add"></i>  Add</b></a></button></div>
                        </div>
                        <div class=" ">

                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr. No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">IP Address</th>
                                        <th scope="col">Purpose</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    include 'conn.php';

                                    $sql = "SELECT * FROM `registration_3`";
                                    $result = mysqli_query($con, $sql);
                                    $index = 0;
                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            $id =  $row['id'];
                                            $name = $row['name'];
                                            $address = $row['address'];
                                            $purpose = $row['purpose'];
                                            $image = $row['image'];

                                            $index++;

                                            echo '<tr>

                    <td><b>' . $index . '</b></td>
                    <td>' . $name . '</td>
                    <td>' . $address . '</td>
                    <td>' . $purpose . '</td>
                     <td><img src="' . $image . '" class="tableimg" style="width: 50px; height: 50px;"></td>
                    <td>

                        <button data-bs-toggle="tooltip" title="Edit" data-bs-placement="top" style="border: none; text-decoration: none; background: unset !important;">
                            <a class="button-a p-2 g-col-6" href="c_server_edit.php?c_server_editid=' . $id . '"><i class="bi bi-pencil-fill"></i></a>
                        </button>

                        <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button" class="confirm_del_btn7" data-id="' . $id . '" style="border: none; background: unset !important;">
                            <a class="button-a p-2 g-col-6" href="#"><i class="bi bi-trash-fill"></i></a>
                        </button>

                        <button data-bs-toggle="tooltip" title="View" data-bs-placement="top" type="button" style="border: none; background: unset !important;" class="view_record_btn7" data-id="' . $id . '" data-bs-toggle="modal" data-bs-target="#myModal' . $id . '">
                        <a class="button-a p-2 g-col-6" href="#"><i class="bi bi-eye-fill"></i></a>
                          </button>
 

                    </td>
                </tr>';
                                            echo '<div id="myModal' . $id . '" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Coderlab Credential Manager</h4>
                            <button style="margin-left: 15%;" type="button" class="close" data-bs-dismiss="modal">&times;</button>
                        </div>
        
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for=""><b>Name</b></label>
                                <input type="text" class="form-control" name="name" id="name" value="' . $name . '" readonly />
                            </div>
        
                            <div class="form-group mb-3">
                                <label for=""><b>IP Address</b></label>
                                <input type="text" class="form-control" name="address" id="address" value="' . $address . '" readonly />
                            </div>
        
                            <div class="form-group mb-3">
                                <label for=""><b>Purpose</b></label>
                                <input type="text" class="form-control" name="purpose" id="purpose" value="' . $purpose . '" readonly />
                            </div>

                            
                             <div class="form-group mb-3">
                                <label for=""><b>Image</b></label>
                                <div>
                                   <img src="' . $image . '" class="img-fluid" style="width: 100px; height: 100px;" alt="Image">
                                </div>
                               </div>


                        </div>
        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
        
                    </div>
                </div>
            </div>';
                                        }
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.confirm_del_btn4').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            console.log(id);

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "c_app_delete.php",
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function(response) {
                            // console.log(response.status);
                            var res = JSON.parse(response);
                            if (res.status == 'success') {
                                Swal.fire(
                                    'Deleted!',
                                    'The record has been deleted.',
                                    'success'
                                ).then(() => {
                                    window.location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'There was an issue deleting the record.',
                                    'error'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'Something went wrong, please try again later.',
                                'error'
                            );
                        }
                    });
                } else {
                    Swal.fire(
                        'Cancelled',
                        'Your record is safe :)',
                        'info'
                    );
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.view_record_btn4').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            console.log('Fetching details for ID: ' + id);

            $.ajax({
                url: "c_app_view.php",
                type: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    var data = JSON.parse(response);

                    if (data.status === 'success') {

                        $('#myModal' + id + ' #name').val(data.record.name);
                        $('#myModal' + id + ' #description').val(data.record.description);
                        $('#myModal' + id + ' #link').val(data.record.link);
                        $('#myModal' + id + ' #username').val(data.record.username);
                        $('#myModal' + id + ' #password').val(data.record.password);
                        $('#myModal' + id + ' #imagePreview').attr('src', data.record.image);
                        $('#myModal' + id).modal('show');
                    } else {
                        Swal.fire(
                            'Error!',
                            'Could not fetch the record details.',
                            'error'
                        );
                    }
                },
                error: function() {
                    Swal.fire(
                        'Error!',
                        'Something went wrong, please try again later.',
                        'error'
                    );
                }
            });
        });
    });
</script>



<script type="text/javascript">
    $(document).ready(function() {
        $('.confirm_del_btn5').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            console.log(id);

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "c_web_delete.php",
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function(response) {

                            var res = JSON.parse(response);
                            if (res.status == 'success') {
                                Swal.fire(
                                    'Deleted!',
                                    'The record has been deleted.',
                                    'success'
                                ).then(() => {
                                    window.location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'There was an issue deleting the record.',
                                    'error'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'Something went wrong, please try again later.',
                                'error'
                            );
                        }
                    });
                } else {
                    Swal.fire(
                        'Cancelled',
                        'Your record is safe :)',
                        'info'
                    );
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.view_record_btn5').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            console.log('Fetching details for ID: ' + id);

            $.ajax({
                url: "c_web_view.php",
                type: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {

                        $('#myModal' + id + ' #name').val(data.record.name);
                        $('#myModal' + id + ' #url').val(data.record.url);
                        $('#myModal' + id + ' #username').val(data.record.username);
                        $('#myModal' + id + ' #password').val(data.record.password);
                        $('#myModal' + id + ' #imagePreview').attr('src', data.record.image);
                        $('#myModal' + id).modal('show');
                    } else {
                        Swal.fire(
                            'Error!',
                            'Could not fetch the record details.',
                            'error'
                        );
                    }
                },
                error: function() {
                    Swal.fire(
                        'Error!',
                        'Something went wrong, please try again later.',
                        'error'
                    );
                }
            });
        });
    });
</script>



<script type="text/javascript">
    $(document).ready(function() {
        $('.confirm_del_btn6').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            console.log(id);

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "c_admin_delete.php",
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function(response) {

                            var res = JSON.parse(response);
                            if (res.status == 'success') {
                                Swal.fire(
                                    'Deleted!',
                                    'The record has been deleted.',
                                    'success'
                                ).then(() => {
                                    window.location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'There was an issue deleting the record.',
                                    'error'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'Something went wrong, please try again later.',
                                'error'
                            );
                        }
                    });
                } else {
                    Swal.fire(
                        'Cancelled',
                        'Your record is safe :)',
                        'info'
                    );
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.view_record_btn6').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            console.log('Fetching details for ID: ' + id);

            $.ajax({
                url: "c_admin_view.php",
                type: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {

                        $('#myModal' + id + ' #name').val(data.record.name);
                        $('#myModal' + id + ' #description').val(data.record.description);
                        $('#myModal' + id + ' #panel').val(data.record.panel);
                        $('#myModal' + id + ' #username').val(data.record.username);
                        $('#myModal' + id + ' #password').val(data.record.password);
                        $('#myModal' + id + ' #imagePreview').attr('src', data.record.image);
                        $('#myModal' + id).modal('show');
                    } else {
                        Swal.fire(
                            'Error!',
                            'Could not fetch the record details.',
                            'error'
                        );
                    }
                },
                error: function() {
                    Swal.fire(
                        'Error!',
                        'Something went wrong, please try again later.',
                        'error'
                    );
                }
            });
        });
    });
</script>



<script type="text/javascript">
    $(document).ready(function() {
        $('.confirm_del_btn7').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            console.log(id);

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "c_server_delete.php",
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function(response) {

                            var res = JSON.parse(response);
                            if (res.status == 'success') {
                                Swal.fire(
                                    'Deleted!',
                                    'The record has been deleted.',
                                    'success'
                                ).then(() => {
                                    window.location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'There was an issue deleting the record.',
                                    'error'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'Something went wrong, please try again later.',
                                'error'
                            );
                        }
                    });
                } else {
                    Swal.fire(
                        'Cancelled',
                        'Your record is safe :)',
                        'info'
                    );
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.view_record_btn7').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            console.log('Fetching details for ID: ' + id);

            $.ajax({
                url: "c_server_view.php",
                type: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {

                        $('#myModal' + id + ' #name').val(data.record.name);
                        $('#myModal' + id + ' #address').val(data.record.address);
                        $('#myModal' + id + ' #purpose').val(data.record.purpose);
                        $('#myModal' + id + ' #imagePreview').attr('src', data.record.image);
                        $('#myModal' + id).modal('show');
                    } else {
                        Swal.fire(
                            'Error!',
                            'Could not fetch the record details.',
                            'error'
                        );
                    }
                },
                error: function() {
                    Swal.fire(
                        'Error!',
                        'Something went wrong, please try again later.',
                        'error'
                    );
                }
            });
        });
    });
</script>




</html>
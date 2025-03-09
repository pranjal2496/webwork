<?php

$con = new mysqli('localhost', 'root', '', 'curddb');


if (!$con) {
    die(mysqli_error($con));
}
//echo"db connected";exit;

<?php
include '../configuration/connection.php'; //connection
require '../controller/DeleteController.php'; // Function Controller
$c_Del = new Delete_Controller(); // Delete controller declarati0n
$c_con = new ClassConnection(); // connection declaration
$conn = $c_con->f_connection();
$c_Del->deleteRecord($conn, "UPDATE users SET duration = duration - 300 WHERE duration > 0 AND status='active'");
$c_Del->deleteRecord($conn, "UPDATE users SET duration = 0 WHERE duration < 0 OR status='delete'");
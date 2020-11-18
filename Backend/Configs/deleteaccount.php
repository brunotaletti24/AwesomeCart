<?php 

// Include the database connection
include_once("../Database/connection.php");

// Start the session
session_start();

$id =  $_SESSION['id'];

// Delete the user account
$delete_user = $db->prepare("DELETE FROM users WHERE id=$id");
$delete_user->execute();
$delete_user_result = $delete_user->fetchColumn();

// Destroy all sessions
session_destroy(); 

// Redirect user to main page
if(isset($delete_user_result)){
    header("Location: ../../Frontend/Pages/signin.php");
}
?>
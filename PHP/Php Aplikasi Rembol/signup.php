<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("users", $_POST['fullname'], $_POST['email'], $_POST['username'], $_POST['password'])) {
            echo "Sign Up Success";
        } else echo "Username atau Email sudah Terdaftar";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>

<?php

session_start();
$_SESSION['multiUsers'] = $users = array(
    "lara" => "larapass" ,
    "mohammad" => "mohammadpass",
    "dana" => "danapass",
    "ayham" => "ayhampass",
    "hamzeh" => "hamzehpass",
);

$admin["admin"] = "adminpass";



foreach ($users as $name => $password) {
    if ($name == $_POST["user"] && $password == $_POST["pass"]) {
        header("Location: userpage.php");
        die();
    }
}
header("Location: index.php");

foreach ($admin as $name => $password) {
    if ($name == $_POST["user"] && $password == $_POST["pass"]) {
        header("Location: adminpage.php");
        die();
    }
}
header("Location: index.php")

?>
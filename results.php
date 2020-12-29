<?php
session_start();
$_SESSION['multiUsers'] = $users = array(
    "lara" => "larapass" ,
    "mohammad" => "mohammadpass",
    "dana" => "danapass",
    "ayham" => "ayhampass",
    "Hussam" => "hussampass",
);
$admin["admin"] = "adminpass";


if($_POST["newuser"] == $_POST["newuser"] && $_POST["newpass"]== $_POST["newpass"]){
         $_POST["newuser"]=$y;
         $_POST["newpass"]=$z;

         $_SESSION['multiUsers'] = $users = array(
            "lara" => "larapass" ,
            "mohammad" => "mohammadpass",
            "dana" => "danapass",
            "ayham" => "ayhampass",
            "Hussam" => "hussampass",
            $y => $z,
        );
    array_push($users, $y, $z);
}

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



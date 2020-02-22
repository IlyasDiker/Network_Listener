<?php

    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "ancfcc";

    $conn = mysqli_connect($host, $dbuser, $dbpass, $db);
    mysqli_select_db($conn, $db);
    if (isset($_POST['submitlogin'])) {
        
        $username = $_POST['uid'];
        $password = $_POST['pwd'];

        $sql = "select * from users where username ='".$username."' and password = '".$password."' limit 1;";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($reuslt)==1){
            header("Location: ../index.php");
	        exit();
        } else {
            header("Location: ../login.php?error=wrongpass?sql=".$sql); 
	        exit();
        }

    }

?>
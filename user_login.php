<?php

include 'conn.php';
session_start();
$error = '';

if (empty($_POST['user_name']) || empty($_POST['password'])) {
    $error = "Username or Password is invalid";
} else {


    $user_name = $_POST["user_name"];
    $password = $_POST["password"];

    $query = "SELECT * from user_login where username='$user_name' and password='$password' and is_active='true'";

    $result = mysql_query($query);

    $rows = mysql_num_rows($result);

    if ($rows == 1) {


        $_SESSION['login_user'] = $user_name;

//        echo 'Success';

        $ses_sql1 = mysql_query("select * from user_login where username='$user_name'", $conn);
        $row1 = mysql_fetch_assoc($ses_sql1);
        $result = $row1['user_id'];
        $date = date("Y/m/d");
        $time = date("h:i:sa");

        $sql = "INSERT INTO user_session_management (user_id, date, time, activity) VALUES ('$result', '$date', '$time', 'Login in to the System')";

        $results = @mysql_query($sql);
        if ($results) {
            echo "Success";
        } else {
            
        }
    } else {
        echo 'Invalid User Name or Password';
    }

    mysql_close($conn);
}
?>

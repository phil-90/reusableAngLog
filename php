<?php
$user = ($_POST['user']);
    $pass = ($_POST['pass']);
    $con = mysqli_connect('localhost', 'root', '', 'user-registration') or die();
    $query = mysqli_query($con, "SELECT * FROM login WHERE username = '$user' AND password = '$pass'");
    $numrows = mysqli_num_rows($query); 
        if($numrows != 0){
            while($row = mysqli_fetch_assoc($query)){
                $dbusername = $row['username'];
                $dbpassword = $row['password'];
            }
            if($user == $dbusername && $pass == $dbpassword){
                echo 'success';
            }
        }else{
                echo 'Invalid username or password';
            }
?>

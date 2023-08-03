<?php

session_start();


include_once 'conf/db.php';

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['login'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        $F = validate($email);
        $P = validate($password);

         $sql = "SELECT * FROM birth WHERE email='$F' AND password='$P'";

         $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $F && $row['password'] === $P) {
                session_destroy();
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['name'] = 'Aziz Ki'; 
                header('Location:index.php');
            }
   
        } else {
            $_SESSION['login_error'] = $email;
            header('Location:login.php');
        }
    }

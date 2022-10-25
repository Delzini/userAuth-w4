<?php
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

loginUser($email, $password);


}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    $file = '..\storage\users.csv';
    $cache = fopen($file, 'r');
    while(!feof($cache)){
        $line = fgetcsv($cache);
        if($line[1] == $email && $line[2] == $password){
            $_SESSION['username'] = $line[0];
            header("Location: ../index.php");
        }
    }
    echo "Invalid Username or password";
}

echo "HANDLE THIS PAGE";


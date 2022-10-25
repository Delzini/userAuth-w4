<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
registerUser($username, $email, $password);
 
}

function registerUser($username, $email, $password){
    $data = ['fullname'=> $username, 'email'=> $email, 'password'=>$password];
    $file = '..\storage\users.csv';
    $cache = fopen($file, 'a');
    if (fputcsv($cache, $data)){
        echo 'User successfully registered';
        echo "<br/>";
    fclose($cache);
    }else{
    echo 'entry failed';}
}

echo "HANDLE THIS PAGE";






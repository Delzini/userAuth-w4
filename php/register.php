<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data = print_r($_POST);
    echo $data;
    registerUser($username, $email, $password);
 
}

function registerUser($username, $email, $password){
    $file = 'C:\xampp\htdocs\xamppTest\userAuth\storage\users.csv';
    $cache = fopen($file, 'a');
    if (putcsv($cache, $newdata)){
        echo "Data saved successfully";
        echo "<br/>";
    }
    echo 'entry failed';
}

// echo "HANDLE THIS PAGE";
registerUser();





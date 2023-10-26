<?php
session_start();
require "connect.php";
function emailValidation($email){
    $emailPattern = '/^[a-zA-Z]{2,10}+[0-9]*@[a-zA-Z]+.[a-zA-Z]{2,3}$/';
    return preg_match($emailPattern, $email);
}
function phoneValidation($phone){
    $phonePattern = '/^[0-9]{10,10}$/';
    return preg_match($phonePattern, $phone);
}
function nameValidation($name){
    $Pattern = '/^[a-zA-Z ]{3,100}+$/';
    return preg_match($Pattern, $name);
}


if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = htmlspecialchars(strtolower($_POST['name']));
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars(strtolower($_POST['email']));
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // $error = array();

    if(!nameValidation($name)){
        $error = "Please enter a valid name";
        header("Location: index.php/?error=$error");
    }
    $_SESSION['postData'] = $_POST;
    if(!phoneValidation($phone)){
        $error = "Please enter a vlid phone number";
        header("Location: index.php/?error=$error");
    }
    if(!emailValidation($email)){
        $error = "Please enter a vlid email";
        header("Location: index.php/?error=$error");
    }
    
    if(nameValidation($name) && phoneValidation($phone) && emailValidation($email)){
        // echo $name." ".$phone." ".$phone." ".$email;
        /* procedural wal to insert data in database not very good way*/
        // $sqlquery = "INSERT INTO users (name, email, phone, password) VALUES ('$name','$email', '$phone', '$pass')";
        // $result = $conn->query($sqlquery);
        // azad@gmail.com
        // azad9798@gmail.com
        // azad@gmail.com

        $sqlquery = "INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sqlquery);
        $stmt->bind_param('ssss', $name, $email, $phone, $pass);

        //$stmt->execute();
        // $name="khushi bansal";
        // $email = "kshusi@gmail.com";
        // $phone = "994654465";
        // $pass = "azdjj";
        
        if($stmt->execute()){
            echo "user created successfully!";
            header("Location: index.php?success=Form Submitted Successfully!");
        }else{
            echo "something went wrong";

        }
    }
}

// $result = emailValidation("azad9798@gmail.com");
// $result = phoneValidation("978464797");
// $result = nameValidation("azad kumar");
// if($result){
//     echo "pattern matched";
// }else{
//     echo "pattern didn't matched";
// }
?>
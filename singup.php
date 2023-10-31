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
    $pass = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
    $confirm_pass = htmlspecialchars($_POST['comfirm_pass']);

    $_SESSION['postData'] = $_POST;

    $isPassMatched = password_verify($confirm_pass, $pass);
    
    if(empty($_POST['password']) || empty($_POST['comfirm_pass'])){
        header("Location: singup.php/?error=Please fill all the credentials!");
        exit();
    }
    // $error = array();

    if(!nameValidation($name)){
        $error = "Please enter a valid name";
        // $_SESSION['error'] = $error;
        header("Location: singup.php/?error=$error");
        exit();
    }
    echo $_POST['name'];
    if(!phoneValidation($phone)){
        $error = "Please enter a vlid phone number";
        header("Location: singup.php/?error=$error");
        exit();
    }
    if(!emailValidation($email)){
        $error = "Please enter a vlid email";
        header("Location: singup.php/?error=$error");
        exit();
    }
    if(!$isPassMatched){
        $error = "Password and confirm Password should be matched!";
        header("Location: singup.php/?error=$error");
        exit();
    }

    if(nameValidation($name) && phoneValidation($phone) && emailValidation($email) && $isPassMatched){
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
            header("Location: singup.php?success=Form Submitted Successfully!");
        }else{
            header("Location: singup.php?error=Some went wrong!");

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


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Singup Page | Gold Gym</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<?php include "header.php"; 
?>

    <div class="singupCotainerParent" style="display: flex; justify-content: center;">
        <div class="singupCotainerChild" id='singupCotainerChild' style="width: 50%;
            z-index: 9999;
            position: fixed;
            background-color: white;
            padding: 30px;
            border: 1px solid gray;
            border-radius: 10px;
            ">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Signup Form</h5>
                    </div>
                    <div class="modal-body">
                        <div class="container my-2">
                            <?php if (isset($_GET['error']) || !empty($_GET['error'])) { ?>
                                <p class="bg-danger p-3 text-white h4 rounded-2"><?php echo $_GET['error'] ?></p>
                            <?php } ?>
                            <?php if (isset($_GET['success']) || !empty($_GET['success'])) { ?>
                                <p class="bg-success p-3 text-white h4 rounded-2"><?php echo $_GET['success'] ?></p>
                            <?php } ?>
                        </div>
                        <form method="post" action=''>
                            <div class="mb-3">
                                <label for="inputname" class="form-label">Name</label>
                                <input type="Text" name='name' class="form-control" id="inputname" value="<?php echo isset($_SESSION['postData']['name'])? $_SESSION['postData']['name'] : "" ?>">
                            </div>
                            
                            <div class="mb-3">
                                <label for="inputnumber" class="form-label">Mobile
                                    Number</label>
                                <input type="tel" name="phone" class="form-control" id="inputnumber" value="<?php echo isset($_SESSION['postData']['phone'])? $_SESSION['postData']['phone'] : "" ?>">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email
                                    address</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="<?php echo isset($_SESSION['postData']['email'])? $_SESSION['postData']['email'] : "" ?>">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" name="password" class="form-control" id="password">
                            </div>

                            <div class="mb-3">
                                <label for="comfirm_pass" class="form-label">Confirm Password</label>
                                <input type="text" name="comfirm_pass" class="form-control" id="comfirm_pass">
                            </div>
                            <div style="float: right;">
                                <button type="submit" class="btn btn-primary">Sign
                                    Up</button>
                            </div>
                        </form>
                        <?php
                            unset($_SESSION['postData']);
                        // if(isset($_SESSION['postData'])){
                        // }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
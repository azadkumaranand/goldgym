<?php
session_start();
require "connect.php";
function emailValidation($email){
    $emailPattern = '/^[a-zA-Z]{2,10}+[0-9]*@[a-zA-Z]+.[a-zA-Z]{2,3}$/';
    return preg_match($emailPattern, $email);
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = htmlspecialchars(strtolower($_POST['email']));
    $pass = htmlspecialchars($_POST['password']);
    
    if(empty($_POST['password']) || empty($_POST['email'])){
        header("Location: login.php/?error=Please fill all the credentials!");
        exit();
    }

    if(!emailValidation($email)){
        $error = "Please enter a vlid email";
        header("Location: singup.php/?error=$error");
        exit();
    }

    if(emailValidation($email)){
        // echo "Hello".$email;
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($query);
        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";
        // echo "Hello".$email;
        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            echo  $row['email'].$row['name'].$row['password'];
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";
            if($pass === $row['password']){
                $_SESSION['user_name'] = $row['name'];
                header("Location: index.php");
            }else{
                // header("Location: login.php/?error=Please enter correct password");
                echo "wrong password";
            }
        }else{
            header("Location: login.php/?error=Your email is not registred!");
        }

    }
}

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
                        <h5 class="modal-title">Login Form</h5>
                    </div>
                    <?php if(isset($_SESSION['user_name'])){echo $_SESSION['user_name'];} ?>
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
                                <label for="email" class="form-label">Email
                                    address</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="<?php echo isset($_SESSION['postData']['email'])? $_SESSION['postData']['email'] : "" ?>">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" name="password" class="form-control" id="password">
                            </div>
                            <div style="float: right;">
                                <button type="submit" class="btn btn-primary">Login</button>
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
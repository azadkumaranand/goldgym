<div class="container-fluid bg-body-tertiary">
        <div class="container">
            <div class="row" style="height: 70px;">
                <div class="col-6 my-2">
                    <h1>GolGym</h1>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item mx-3">
                                        <a href=""> <button type="button" class="btn btn-outline-warning " style="border: none; color: black;"> <b>Home</b></button>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href=""> <button type="button" class="btn btn-outline-warning " style="border: none; color: black;"><b>About</b></button> </a>
                                    </li>
                                    <li class="nav-item mx-3">
                                        <a href=""> <button type="button" class="btn btn-outline-warning " style="border: none; color: black;"><b>Blog</b></button> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href=""><button type="button" class="btn btn-outline-warning mx-1 " style="border: none; color: black;"><b>Contact</b></button> </a>
                                    </li>
                                    <?php if(!isset($_SESSION['user_name'])){ ?>
                                    <li>
                                        <a href="login.php"><button type="button" class="btn btn-warning mx-1" data-bs-toggle="modal" data-bs-target="#loginmodal">
                                            <b> Login</b>
                                        </button></a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/goldgym/singup.php"><button type="button" class="btn btn-warning mx-1" id="trigarSinupModal">
                                            <b> Sign up</b>
                                        </button></a>
                                    </li>
                                    <?php }else{ ?>
                                        <li><button type="button" class="mx-1 border-0" data-bs-toggle="modal" data-bs-target="#loginmodal">
                                            <b><?php echo $_SESSION['user_name'];  ?></b>
                                        </button>
                                        <a href="logout.php">
                                        <button class="btn btn-warning">Logout</button></a></li>
                                        <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <script>
        function logout(){
            alert("hello")
            <?php 
                // unset($_SESSION['user_name']);
                // header("Location: index.php");
            ?>
        }
    </script>
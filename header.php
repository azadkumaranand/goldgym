<style>
    .nav_items{
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .nav-container{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .menubar{
        display: none;
    }
    @media(max-width: 1200px){
        #navbarSupportedContent{
            display: none;
            background-color: red;
            z-index: 999;
            width: 100%;
            position: fixed;
            left: 0;
        }
        .nav_items{
            z-index: 9999;
            padding: 0;
            flex-direction: column;
        }
        .menubar{
            display: block;
            font-size: 23px;
            font-weight: 800;
        }
        /* .menubar{
            display: block;
        } */
    }
</style>
<div class="container-fluid bg-body-tertiary">
        <div class="container">
            <div class="row" style="height: 70px;">
                <div class="col-6 my-2">
                    <h1>GolGym</h1>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <nav class="nav-container">
                        <div class="container-fluid">
                            <div class="menubar" id="menubar">
                            <i class="fa-solid fa-bars"></i>
                            </div>
                            <div class="navbarSupportedContent" id="navbarSupportedContent">
                                <ul class="nav_items">
                                    <li class="">
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
        // function logout(){
        //     alert("hello")
        //     <?php 
        //         // unset($_SESSION['user_name']);
        //         // header("Location: index.php");
        //     ?>
        // }
        
    </script>
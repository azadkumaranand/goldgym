<?php 
session_start();
include "connect.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gold Gym</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/b5e6f58036.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- singup modal -->

    <!-- Modal -->
    <!-- <div class="singupCotainerParent" style="display: flex; justify-content: center;">
        <div class="singupCotainerChild" id='singupCotainerChild' style="width: 50%;
            z-index: 9999;
            position: fixed;
            background-color: white;
            padding: 30px; display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Signup Form</h5>
                        <button type="button" class="btn-close" id="closeSingupModal" data-bs-dismiss="modal" aria-label="Close"></button>
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
                        <form method="post" action='singup.php'>
                            <div class="mb-3">
                                <label for="inputname" class="form-label">Name</label>
                                <input type="Text" name='name' class="form-control" id="inputname" value="<?php if(isset($_SESSION['postData']['name'])){echo $_SESSION['postData']['name'];} ?>">
                            </div>
                            <div class="mb-3">
                                <label for="inputnumber" class="form-label">Mobile
                                    Number</label>
                                <input type="tel" name="phone" class="form-control" id="inputnumber" value="<?php if(isset($_SESSION['postData']['phone'])){echo $_SESSION['postData']['phone'];} ?>">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email
                                    address</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="<?php if(isset($_SESSION['postData']['email'])){echo $_SESSION['postData']['email'];} ?>">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" name="password" class="form-control" id="password">
                            </div>

                            <div class="mb-3">''
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
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- singup modal end-->
    <?php include "header.php"; ?>
    <!-- slider  -->
    <div class="container-fluid p-0 m-0">

        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/random/900x800/?gym" class="d-block w-100" alt="..." style="height: 550px;">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/random/900x800/?gym-boy" class="d-block w-100" alt="..." style="height: 550px;">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/random/900x800/?gym-man" class="d-block w-100" alt="..." style="height: 550px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- slider  end-->

    <!-- contianer 2 -->
    <div class="container text-center">
        <h2 class="text-warning lh-lg">Introduction</h2>
        <p class="text-primary lh-lg fs-5">Suspendisse ut magna vel velit cursus tempor ut nec nunc maruis vehicula <br>
            augue in tincidunt porta, purus ipsum blandit massa.
        </p>
    </div>
    <div class="container d-flex justify-content-evenly flex-wrap mt-5">
        <?php
            // echo "<h4>Requested valued".$_POST['limit']."</h4>";
            $limit = isset($_POST['limit'])?$_POST['limit']:4;
            $blogquery = "SELECT * FROM blogs ORDER BY id ASC LIMIT $limit";
            $result = $conn->query($blogquery);
            $noRows = $result->num_rows;
            while($noRows>0){
                $row = $result->fetch_assoc();
                // echo "<h4>".$row['title']."</h4>";
                echo '<div class="card my-2" style="width: 300px;">
                        <img src="images/gym2.jpeg" class="card-img-top" alt="gym1stimge">
                        <div class="card-body">
                            <h5 class="card-title text-warning">'.$row["title"].'</h5>
                            <p class="card-text">'.$row["shortdesc"].'</p>
                            <a href="" class="btn btn-warning text-light">DETAIL</a>
                        </div>
                    </div>';
                $noRows--;
            }
        ?>
        <?php if($noRows>0){ ?>
        <form action="" method="post">
            <input type="hidden" name="limit" value="<?php echo isset($_POST['limit'])?$_POST['limit']+4:8;?>">
            <button type="submit" class="btn btn-warning my-3">Load More</button>
        </form>
        <?php } ?>
    </div>
    

    <!-- contianer 2 end -->

    <!-- container-3 -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-warning">Pellentesque fermentum mauris et posuere</h2>
                <p class="text-primary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores, fuga.</p>
                <div class="card a1">
                    <img src="images/coffee.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text  text-primary">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptas ea
                            ratione veritatis alias delectus quidem amet illum atque et quas, id quod, nulla reiciendis
                            ullam porro,
                            voluptates expedita officiis accusamus!</p>
                        <p class="card-text text-primary">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptas ea
                            ratione veritatis alias delectus quidem amet illum atque et quas, id quod, nulla reiciendis
                            ullam porro,
                            voluptates expedita officiis accusamus!</p>
                        <p class="card-text text-primary">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptas ea
                            ratione veritatis alias delectus quidem amet illum atque et quas, id quod, nulla </p>

                        <a href="#" class="btn btn-warning">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-6">
                        <h3 class="text-warning">Categories</h3>
                        <a href="">rfksidejdcxsj</a>
                        <a href="">smxkcjsicxdxsc</a>
                        <a href="">xssxddsxwsdik</a>
                        <a href="">sxxxiwdei</a>
                        <a href="">cskxscsccs</a>

                    </div>
                    <div class="col-6">
                        <h3 class="text-warning">Usefull Links</h3>
                        <a href="">rfksidejdcxsj</a>
                        <a href="">smxkcjsicxdxsc</a>
                        <a href="">xssxddsxwsdik</a>
                        <a href="">sxxxiwdei</a>
                        <a href="">cskxscsccs</a>
                    </div>
                    <div class="container">
                        <h5 class="text-warning releted">Related Posts</h5>
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <img src="images/cycle.jpg" alt="" class="w-100">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="text-warning-emphasis"> Lorem ipsum dolar</h5>
                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                                    fugit incidunt ipsum
                                    vel, officia
                                    quod odio voluptates tempore exercitationem! Tenetur tempore debitis illo corrupti
                                    voluptate itaque
                                    iure velit provident in.</p>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="images/stock.jpg" alt="" class="w-100">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="text-warning-emphasis"> Lorem ipsum dolar</h5>
                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                                    fugit incidunt ipsum
                                    vel, officia
                                    quod odio voluptates tempore exercitationem! Tenetur tempore debitis illo corrupti
                                    voluptate itaque
                                    iure velit provident in.</p>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="images/Untitled.jpg" alt="" class="w-100">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="text-warning-emphasis "> Lorem ipsum dolar</h5>
                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                                    fugit incidunt ipsum
                                    vel, officia
                                    quod odio voluptates tempore exercitationem! Tenetur tempore debitis illo corrupti
                                    voluptate itaque
                                    iure velit provident in.</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- container-3 end-->
    <!-- <p>Hello testing 8&gt5</p> -->
    <!-- footer -->
    <footer class="bg-dark">
        <div class="container d-flex align-items-center">
            <div class="row">
                <div class="col-md-3 text-white order-5">
                    <h5 class="text-warning mb-4">prion eu posuere felis</h5>
                    <div class="card " style="width: 16rem;">
                        <p class="px-3">Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Eius dolorem, suscipit
                            perspiciatis similique deleniti est.
                        </p>
                        <p class="px-3">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Totam, quae!
                        </p>
                        <h5 class="text-dark px-3">Danny Egg (Executive)</h5>
                    </div>
                    <p class=" mt-5"><a href="" class="text-white " style="list-style: none; font-size: 15px;">Copyright
                            2016 Your Company Name</a></p>
                </div>
                <div class="col-md-3 text-left">
                    <h5 class="text-warning mb-4 ">Nulla tortor dolor</h5>
                    <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                    <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                    <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                    <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                    <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                    <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                </div>
                <div class="col-md-3">
                    <h5 class="text-warning mb-4">Etiam mollis ornare</h5>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur ,
                        adipisicing elit. Totam, quae!
                    </p>
                    <hr style=" border: 1px solid white;; ">
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur ,
                        adipisicing elit. Totam, quae!
                    </p>
                    <hr style=" border: 1px solid white; ">
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur ,
                        adipisicing elit. Totam, quae!
                    </p>
                    <hr style=" border: 1px solid white; ">

                    <a href="" target="_blank"><button class="btn  btn-secondary " type="submit">READ MORE</button></a>

                </div>
                <div class="col-md-3">
                    <h5 class="text-warning mb-4">Etiam mollis ornare</h5>
                    <div class="row">
                        <div class="col-12 mb-1">
                            <img src="images/WhatsApp Image 2023-06-11 at 10.55.48 21.jpg" alt="" style="width: 30%; height: 45px;">
                            <img src="images/WhatsApp Image 2023-06-11 at 10.55.48 22.jpg" alt="" style="width: 30%; height: 45px;">
                            <img src="images/WhatsApp Image 2023-06-11 at 10.55.48 23.jpg" alt="" style="width: 30%; height: 45px;">
                        </div>
                        <div class="col-12">
                            <img src="images/WhatsApp Image 2023-06-11 at 10.55.48.jpg" alt="" style="width: 30%; height: 45px;">
                            <img src="images/WhatsApp Image 2023-06-11 at 10.55.49 24.jpg" alt="" style="width: 30%; height: 45px;">
                            <img src="images/WhatsApp Image 2023-06-11 at 10.55.49 25.jpg" alt="" style="width: 30%; height: 45px;">
                        </div>
                    </div>
                    <p class="text-white mt-4 ">Lorem ipsum dolor sit amet consectetur ,
                        adipisicing elit. Totam, quae!
                    </p>
                    <a href="" target="_blank"><button class="btn  btn-secondary" type="submit">BROWSE</button></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- <script src="js/script.js"></script>-->
</body>

<script>
    const menubar = document.getElementById("menubar");
    const navbarSupportedContent = document.getElementById('navbarSupportedContent');
            menubar.addEventListener('click', function (){
                // alert("hello world");
                if(navbarSupportedContent.style.display == "block"){
                    navbarSupportedContent.style.display = "none";
                    menubar.innerHTML = `<i class="fa-solid fa-bars"></i>`;
                }else{
                    navbarSupportedContent.style.display = "block";
                    menubar.innerHTML = `<i class="fa-solid fa-xmark"></i>`;
                }
            })
</script>

</html>
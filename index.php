<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <!-- singup modal -->
  <div class="modal fade" id="signmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Signup Form
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <?php if(isset($_GET['error']) || !empty($_GET['error'])){ ?>
                        <p class="bg-danger p-4"><?php echo $_GET['error'] ?></p>
                    <?php } ?>
                </div>
                <form method="post" action='singup.php'>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">Name</label>
                        <input type="Text" name='name' class="form-control" id="inputname">
                    </div>
                    <div class="mb-3">
                        <label for="inputnumber" class="form-label">Mobile
                            Number</label>
                        <input type="tel" name="phone" class="form-control" id="inputnumber">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email
                            address</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
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
            </div>
        </div>
    </div>
</div>

  <!-- singup modal end-->
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
                                        <a href=""> <button type="button" class="btn btn-outline-warning "
                                                style="border: none; color: black;"> <b>Home</b></button>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href=""> <button type="button" class="btn btn-outline-warning "
                                                style="border: none; color: black;"><b>About</b></button> </a>
                                    </li>
                                    <li class="nav-item mx-3">
                                        <a href=""> <button type="button" class="btn btn-outline-warning "
                                                style="border: none; color: black;"><b>Blog</b></button> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href=""><button type="button" class="btn btn-outline-warning mx-1 "
                                                style="border: none; color: black;"><b>Contact</b></button> </a>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-warning mx-1" data-bs-toggle="modal"
                                            data-bs-target="#loginmodal">
                                            <b> Login</b>
                                        </button>
                                        <div class="modal fade" id="loginmodal" tabindex="-1"
                                            aria-labelledby="Loginmodel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="Loginmodel">Login</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Email
                                                                    address</label>
                                                                <input type="email" class="form-control"
                                                                    id="exampleInputEmail1"
                                                                    aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputPassword1"
                                                                    class="form-label">Password</label>
                                                                <input type="password" class="form-control"
                                                                    id="exampleInputPassword1">
                                                            </div>
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label"
                                                                    for="exampleCheck1">Remember
                                                                    me
                                                                </label>
                                                            </div>
                                                            <div style="float: right;">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Login</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-warning mx-1" data-bs-toggle="modal"
                                            data-bs-target="#signmodal">
                                            <b> Sign up</b>
                                        </button>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- slider  -->
    <div class="container-fluid p-0 m-0">

        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/random/900x800/?gym" class="d-block w-100"
                        alt="..." style="height: 550px;">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/random/900x800/?gym-boy" class="d-block w-100"
                        alt="..." style="height: 550px;">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/random/900x800/?gym-man" class="d-block w-100" alt="..."
                        style="height: 550px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
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
    <div class="container d-flex justify-content-between mt-5">
        <div class="card" style="width: 23%;">
            <img src="images/gym2.jpeg" class="card-img-top" alt="gym1stimge">
            <div class="card-body">
                <h5 class="card-title text-warning">Lorem ipsum dolor #1</h5>
                <p class="card-text"> that justifies statement is that gym has long been associated with healthy
                    lifestyle.</p>
                <a href="" class="btn btn-warning text-light">DETAIL</a>

            </div>
        </div>
        <div class="card" style="width: 23%;">
            <img src="images/gym3.jpeg" class="card-img-top" alt="gym1stimge">
            <div class="card-body">
                <h5 class="card-title text-warning">Lorem ipsum dolor #2</h5>
                <p class="card-text">You can build strength elsewhere developing it there.
                    CSCS, a trainer,

                </p>
                <a href="" class="btn btn-warning text-light">READ MORE </a>

            </div>
        </div>
        <div class="card" style="width: 23%;">
            <img src="images/gym4.jpeg" class="card-img-top" alt="gym1stimge">
            <div class="card-body">
                <h5 class="card-title text-warning">Lorem ipsum dolor #3</h5>
                <p class="card-text">this fitness you a specific objective to concentrate on as you begin
                    strength training.
                </p>
                <a href="" class="btn btn-warning text-light">DETAIL</a>

            </div>
        </div>
        <div class="card" style="width: 23%;">
            <img src="images/gym5.jpeg" class="card-img-top" alt="gym1stimge">
            <div class="card-body">
                <h5 class="card-title text-warning">Lorem ipsum dolor #4</h5>
                <p class="card-text">When many of us set a health or fitness goal, think to consult on
                    the subject.</p>
                <a href="" class="btn btn-warning text-light">READ MORE</a>

            </div>
        </div>
    </div>

    <!-- contianer 2 end -->

  <!-- container-3 -->
    <div class="container my-5">
        <div class="row">
            <div class="col-6">
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
            <div class="col-6">
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
                            <div class="col-4">
                                <img src="images/cycle.jpg" alt="" class="w-100" style="height: 70%;">
                            </div>
                            <div class="col-8">
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
                            <div class="col-4">
                                <img src="images/stock.jpg" alt="" class="w-100" style="height: 70%;">
                            </div>
                            <div class="col-8">
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
                            <div class="col-4">
                                <img src="images/Untitled.jpg" alt="" class="w-100" style="height: 70%; ">
                            </div>
                            <div class="col-8">
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
        <div class="container d-flex align-items-center  " style="height: 430px;">
            <div class="row ">
                <div class="col  text-white  ">
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
                <div class="col text-center">
                    <h5 class="text-warning mb-4 ">Nulla tortor dolor</h5>
                    <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                    <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                    <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                    <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                    <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                    <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                </div>
                <div class="col">
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
                <div class="col">
                    <h5 class="text-warning mb-4">Etiam mollis ornare</h5>
                    <div class="row">
                        <div class="col-12 mb-1">
                            <img src="images/WhatsApp Image 2023-06-11 at 10.55.48 21.jpg" alt=""
                                style="width: 30%; height: 45px;">
                            <img src="images/WhatsApp Image 2023-06-11 at 10.55.48 22.jpg" alt=""
                                style="width: 30%; height: 45px;">
                            <img src="images/WhatsApp Image 2023-06-11 at 10.55.48 23.jpg" alt=""
                                style="width: 30%; height: 45px;">
                        </div>
                        <div class="col-12">
                            <img src="images/WhatsApp Image 2023-06-11 at 10.55.48.jpg" alt=""
                                style="width: 30%; height: 45px;">
                            <img src="images/WhatsApp Image 2023-06-11 at 10.55.49 24.jpg" alt=""
                                style="width: 30%; height: 45px;">
                            <img src="images/WhatsApp Image 2023-06-11 at 10.55.49 25.jpg" alt=""
                                style="width: 30%; height: 45px;">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    @include('header')


      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="4.jpg" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>
    <div class="container" data-bs-spy="scroll" data-bs-target="#list" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <div class="row my-5">
        <div class="row my-5">
                <div class="col-12 text-center" id="feature">
                    <h1>OUR FEATURE</h1>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-12 col-sm-6 col-md-4">
                    <span class="icon2">
                            <i class="fa-solid fa-circle-check"></i>
                        </span>
                    <p class="check-p">
                        Lorem ipsum
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum dolor urna, vel consequat lorem tempor ut. Nunc nec felis elit. Aenean malesuada in diam non pretium.
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <span class="icon2">
                            <i class="fa-solid fa-circle-check"></i>
                        </span>
                    <p class="check-p">
                        Lorem ipsum
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum dolor urna, vel consequat lorem tempor ut. Nunc nec felis elit. Aenean malesuada in diam non pretium.
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <span class="icon2">
                            <i class="fa-solid fa-circle-check"></i>
                        </span>
                    <p class="check-p">
                        Lorem ipsum
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum dolor urna, vel consequat lorem tempor ut. Nunc nec felis elit. Aenean malesuada in diam non pretium.
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <span class="icon2">
                            <i class="fa-solid fa-circle-check"></i>
                        </span>
                    <p class="check-p">
                        Lorem ipsum
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum dolor urna, vel consequat lorem tempor ut. Nunc nec felis elit. Aenean malesuada in diam non pretium.
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <span class="icon2">
                            <i class="fa-solid fa-circle-check"></i>
                        </span>
                    <p class="check-p">
                        Lorem ipsum
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum dolor urna, vel consequat lorem tempor ut. Nunc nec felis elit. Aenean malesuada in diam non pretium.
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <span class="icon2">
                            <i class="fa-solid fa-circle-check"></i>
                        </span>
                    <p class="check-p">
                        Lorem ipsum
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum dolor urna, vel consequat lorem tempor ut. Nunc nec felis elit. Aenean malesuada in diam non pretium.
                    </p>
                </div>
            </div>



            


            <div class="row">
                <div class="g-0 col-12 col-sm-6 col-md-4">
                    <div class="photo-text">
                        <img src="1.jpg" style="width: 100%;">
                        <div class="text-photo text-center">
                            <h6>
                                Lorem ipsum
                            </h6>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="g-0 col-12 col-sm-6 col-md-4">
                    <div class="photo-text">
                        <img src="2.jpg" style="width: 100%;">
                        <div class="text-photo text-center">
                            <h6>
                                Lorem ipsum
                            </h6>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="g-0 col-12 col-sm-6 col-md-4">
                    <div class="photo-text">
                        <img src="3.jpg" style="width: 100%;">
                        <div class="text-photo text-center">
                            <h6>
                                Lorem ipsum
                            </h6>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="g-0 col-12 col-sm-6 col-md-4">
                    <div class="photo-text">
                        <img src="p3.jpg" style="width: 100%;">
                        <div class="text-photo text-center">
                            <h6>
                                Lorem ipsum
                            </h6>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="g-0 col-12 col-sm-6 col-md-4">
                    <div class="photo-text">
                        <img src="p4.jpg" style="width: 100%;">
                        <div class="text-photo text-center">
                            <h6>
                                Lorem ipsum
                            </h6>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="g-0 col-12 col-sm-6 col-md-4">
                    <div class="photo-text">
                        <img src="p5.jpg" style="width: 100%;">
                        <div class="text-photo text-center">
                            <h6>
                                Lorem ipsum
                            </h6>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    @include('footer')
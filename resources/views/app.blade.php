<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Contact Us">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/About Us">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/view posts">list</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/add posts">Add</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


            @yield("form")
            @yield("table")
    
    <div class="container-fluid">
        <div class="row bg-danger footer1 d-flex align-items-center justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h1 style="color: aliceblue;">Lorem ipsum dolor sit amet.</h1>
            </div>
            <div class="col-12 col-md-6 text-center">
                <button class="btn btn-dark">Read More</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-md-3">
                <h3>LISSOME</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum dolor urna, vel consequat lorem tempor ut. Nunc nec felis elit. Aenean malesuada in diam non pretium.
                </p>
            </div>
            <div class="col-12 col-md-3">
                <h5>Our Links</h5>
                <ul>
                    <li>About us</li>
                    <li>Contact us</li>
                    <li>Privacy Policy</li>
                    <li>FAQ</li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h5 class="footer-title">Resources</h5>
                <ul>
                    <li>Help Center</li>
                    <li>Shop Cart</li>
                    <li>Login</li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h5 class="footer-title">Get in Touch With Us</h5>
                <ul>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>ITI , Mansoura , Egypt</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <span>+123 123 123<br><i class="fa-solid fa-phone"></i>+123 123 123</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <span>support@support.id<br><i class="fa-solid fa-envelope"></i>info@support.id</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>
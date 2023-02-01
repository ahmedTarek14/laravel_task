
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
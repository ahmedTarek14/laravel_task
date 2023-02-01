<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    @include('header')


            <div class="row g-0">
                <div class="col-12 my-5 col-lg-6">
                    <img class="img-responsive" src="zz.jpg">
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center">
                    <form class="row g-5 needs-validation" novalidate>
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label">Username</label>
                            <input type="text" class="form-control" id="validationCustom01" required>
                            <div class="invalid-feedback">
                                Please provide a valid Username.
                            </div>
                            <div class="valid-feedback">
                                Nice Name☺!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom02" class="form-label">
                                    E-mail
                                </label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">
                                        <i class="fa-regular fa-envelope"></i>
                                    </span>
                                <input type="text" class="form-control" id="validationCustom02" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Please provide a valid E-mail.
                                </div>
                                <div class="valid-feedback">
                                    Looks Good!
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom03" class="form-label">Your Message</label>
                            <textarea class="form-control" id="validationCustom03" required></textarea>
                            <div class="invalid-feedback">
                                Please provide a valid Message.
                            </div>
                            <div class="valid-feedback">
                                Thanks!
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-danger" type="submit">Contact Us</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
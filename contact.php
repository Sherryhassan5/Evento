<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="x-icon" href="img/half-logo.webp">
    <title>Evento | Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f312036990.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">

    <style>
        <?php require "style.php"; ?>
    </style>

</head>


<body>

    <!-- navbar -->

    <div class="main" id="main">
        <?php require_once "nav.php"; ?>

        <div class="container my-5" style="position: relative; z-index: 11;">

            <h1 class="text-light big-text text-uppercase">Contact US</h1>

        </div>
    </div>

    <a href="#main">
        <div class="doodle bg-warning">
            <i class="fa-solid fa-chevron-up text-light"></i>
        </div>
    </a>















    <div class="container-fluid bg">
        <div class="container py-5">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3380.8370270071473!2d72.67776427459857!3d32.07365641960019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392177bfd683f3d5%3A0xa8090086de867b9d!2sUniversity%20of%20Sargodha!5e0!3m2!1sen!2s!4v1687874307178!5m2!1sen!2s"
                width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

        <div class="container py-5">

            <div class="row">
                <div class="contact-form col-12 col-md-8">
                    <h2 class="fw-bolder text-light">Get in Touch</h2>
                    <form action="" method="post">
                        <div class="form-group">

                            <textarea class="form-control textarea rounded-0 bg-transparent text-light"
                                id="exampleFormControlTextarea1" rows="7" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <input type="text" class="form-control textarea rounded-0 bg-transparent text-light"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Name">

                            </div>
                            <div class="form-group col-6">
                                <input type="email" class="form-control textarea rounded-0 bg-transparent text-light"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control textarea rounded-0 bg-transparent text-light"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Subject">

                        </div>
                        <button type="button"
                            class="bg-warning button-book border-warning text-dark py-3 fw-bold px-5 text-uppercase mt-4 ml-3">SEND</button>
                    </form>
                </div>
                <div class="contact-side col-12 col-md-3 offset-md-1 text-light mt-5">
                    <div class="row mb-4">
                        <div class="col-2 p-2 fs-2"><i class="fa-solid fa-house-chimney"></i></div>
                        <div class="col-10">
                            <p class="fw-bolder fs-5 text-at-end">Buttonwood, California.</p>
                            <p>Rosemead, CA 91770</p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-2 p-2 fs-2"><i class="fa-solid fa-mobile-screen-button"></i></div>
                        <div class="col-10">
                            <p class="fw-bolder fs-5 text-at-end">+92 305 9261 667</p>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-2 p-2 fs-2"><i class="fa-solid fa-envelope"></i></div>
                        <div class="col-10">
                            <p class="fw-bolder fs-5 text-at-end">Sherazhassan240@gmail.com</p>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <div class="container-fluid bg py-1">
        <div class="container">

            <div class="row">
                <div class="col-12 col-lg-4">
                    <img src="/img/logo.webp" alt="" class="d-block pb-4">
                    <p class="lorem lh-lg">Duis aute irure dolor inasfa reprehenderit in voluptate velit esse cillum.
                        Explicabo, maiores quisquam numquam quia reiciendis sit, accus antium atque ex animi
                        perspiciatis ab odit earum assumenda aliquid santium.
                    </p>
                    <div class="row pb-4">
                        <div class="rounded-circle bg-primary social-b m-1"> <i
                                class="fa-brands fa-facebook social"></i></div>
                        <div class="rounded-circle bg-danger social-b m-1"><i class="fa-brands fa-youtube social"></i>
                        </div>
                        <div class="rounded-circle bg-info social-b m-1"><i class="fa-brands fa-linkedin-in social"></i>
                        </div>
                        <div class="rounded-circle bg-dark social-b m-1"><i class="fa-brands fa-instagram social"></i>
                        </div>

                    </div>


                </div>
                <div class="col-12 col-lg-4">
                    <p class="fw-bold fs-3 text-light">Contact Us</p>
                    <a href="#" class="lorem link-f d-block">3968 Carson Street, San Diego, CA 92101</a>
                    <a href="#" class="lorem link-f d-block">info@evento.com</a>
                    <a href="" class="fs-4 text-warning link-f d-block">10 (85) 980 3673</a>



                </div>
                <div class="col-12 col-lg-4">
                    <p class="fw-bold fs-3 text-light">Subscribe Newsletter</p>
                    <p class="lorem lh-lg">raising a heavy fur muff that covered the whole of her lower arm towards the
                        viewer.
                    </p>
                    <input type="email" name="email" placeholder="Enter your email" class="input">

                    <button type="button"
                        class="bg-warning border-0  text-dark py-3 text-uppercase fw-bold px-5 mt-3">Subscribe</button>


                </div>

            </div>

            <div class="hr my-3"></div>
            <div class="text-center">
                <p class="lorem text-light fs-6 fw-light">Copyright &copy; 2023 All rights reserved | This template is
                    made by <span class="text-warning">Sheraz Hassan</span></p>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>


</body>

</html>
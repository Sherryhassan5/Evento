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
        <?php require "style.php";?>
    </style>

</head>


<body>

    <!-- navbar -->

    <div class="main" id="main">
    <?php require_once "nav.php";?>

    <div class="container my-5" style="position: relative; z-index: 11;">
            <h1 class="text-warning big-text text-uppercase">sandiego</h1>
            <h1 class="text-light big-text text-uppercase" id="big-text1">design</h1>
            <h1 class="text-light big-text text-uppercase" id="big-text2">week</h1>

            <div class="my-5 oc">
                <a href="https://www.youtube.com/embed/dsuMPWZvX2Q">
                    <div class="ic">
                        <i class="fa-solid fa-play text-danger fs-4"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-7 col-lg-6 col-12 ms-auto mt-n4 div-nav">
                <h1 class="pink-text text-end">12 AUG 2023</h1>
                <p class="text-light fs-5 text-end">3968 CARSON STREET, SAN DIEGO, CA 91224</p>
                <button type="button"
                    class="bg-transparent button-buy border-warning text-warning py-2 px-lg-4 text-uppercase">BUY
                    TICKET</button>
            </div>
        </div>
    </div>
    
    <a href="#main">
        <div class="doodle bg-warning">
            <i class="fa-solid fa-chevron-up text-light"></i>
        </div>
    </a>

    <div class="container-fluid bg py-2">

        <div class="container">
            <div class="row ">
                <div class="left col-12 col-md-6 pt-5">
                    <h1 class="white-text text-light">ABOUT</h1>
                    <h1 class="white-text text-light">DESIGN WEEK</h1>
                    <button type="button"
                        class="bg-warning button-book border-warning text-dark py-3 fw-bold px-lg-4 text-uppercase mt-4 ml-3">Confirm
                        Your Seat <i class="fa-solid fa-arrow-right ml-5"></i></button>
                </div>
                <div class="right col-12 col-md-6 py-3 px-2">
                    <p class="fs-5 lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, vel omnis
                        repellendus
                        mollitia, explicabo, maiores quisquam numquam quia reiciendis sit, accusantium atque ex animi
                        perspiciatis ab odit earum assumenda aliquid.

                        Dolor sit amet, consectetur adipisicing elit. Commodi, vel omnis repellendus mollitia,
                        explicabo, maiores quisquam numquam quia reiciendis sit, accusantium atque ex animi perspiciatis
                        ab odit earum assumenda aliquid.</p>

                    <div class="row">
                        <div class="col-12 col-sm-4 py-3 text-center">
                            <h1 class="pink-text fw-bold">03</h1>
                            <p class="fs-4 fw-bolder lorem">DAY EVENT</p>
                        </div>
                        <div class="col-12 col-sm-4 py-3 text-center">
                            <h1 class="pink-text fw-bold">10+</h1>
                            <p class="fs-4 fw-bolder lorem">DAY EVENT</p>
                        </div>
                        <div class="col-12 col-sm-4 pt-3 text-center">
                            <h1 class="pink-text fw-bold">23+</h1>
                            <p class="fs-4 fw-bolder lorem">SPONSORS</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    <div class="container-fluid bg py-0">

        <div class="container">
            <div class="row ">
                <div class="left col-12 col-sm-6 py-sm-5 py-1">
                    <h1 class="white-text text-light">SPEAKERS</h1>


                </div>
                <div class="right col-12 col-sm-6 py-sm-5 py-1 px-2">
                    <button type="button"
                        class="bg-transparent button-buy border-warning text-warning py-3 fw-bold px-lg-4 text-uppercase mt-1 d-block ms-auto">Confirm
                        Your Seat <i class="fa-solid fa-arrow-right ml-5"></i></button>
                </div>

                <!-- crouser -->
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <!-- crouser-card -->
                            <div class="teacher-card-container">
                                <div class="teacher-card">
                                    <div class="teacher-img">
                                        <img src="./img/team1.webp" class="img" height="auto" width="100%">
                                    </div>
                                    <div class="social-icons center" style="color:orange;">
                                        <i class="fa-brands fa-twitter"></i>
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <i class="fa-brands fa-google-plus-g"></i>
                                        <!-- <i class="fa-brands fa-instagram"></i> -->
                                    </div>
                                    <div class="teacher-des center">
                                        <p class="name secondary text-warning fw-bolder fs-4">Bianca Wilson</p>
                                        <p class="text-light teachers-text">Product Designer</p>

                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-img">
                                        <img src="./img/team2.webp" class="img" height="auto" width="100%">
                                    </div>
                                    <div class="social-icons center" style="color:orange;">
                                        <i class="fa-brands fa-twitter"></i>
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <i class="fa-brands fa-google-plus-g"></i>
                                        <!-- <i class="fa-brands fa-instagram"></i> -->
                                    </div>
                                    <div class="teacher-des center">
                                        <p class="name secondary text-warning fw-bolder fs-4">Frank Sanbian</p>
                                        <p class="text-light teachers-text">Frontend Designer</p>

                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-img">
                                        <img src="./img/team3.webp" class="img" height="auto" width="100%">
                                    </div>
                                    <div class="social-icons center" style="color:orange;">
                                        <i class="fa-brands fa-twitter"></i>
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <i class="fa-brands fa-google-plus-g"></i>
                                        <!-- <i class="fa-brands fa-instagram"></i> -->
                                    </div>
                                    <div class="teacher-des center">
                                        <p class="name secondary text-warning fw-bolder fs-4">Marcus Down</p>
                                        <p class="text-light teachers-text">Backend Developer</p>

                                    </div>
                                </div>

                            </div>







                        </div>
                        <div class="carousel-item">
                            <div class="teacher-card-container">
                                <div class="teacher-card">
                                    <div class="teacher-img">
                                        <img src="./img/team4.webp" class="img" height="auto" width="100%">
                                    </div>
                                    <div class="social-icons center" style="color:orange;">
                                        <i class="fa-brands fa-twitter"></i>
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <i class="fa-brands fa-google-plus-g"></i>
                                        <!-- <i class="fa-brands fa-instagram"></i> -->
                                    </div>
                                    <div class="teacher-des center">
                                        <p class="name secondary text-warning fw-bolder fs-4">Rick Shaw</p>
                                        <p class="text-light teachers-text">Senior Developer</p>

                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-img">
                                        <img src="./img/team5.webp" class="img" height="auto" width="100%">
                                    </div>
                                    <div class="social-icons center" style="color:orange;">
                                        <i class="fa-brands fa-twitter"></i>
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <i class="fa-brands fa-google-plus-g"></i>
                                        <!-- <i class="fa-brands fa-instagram"></i> -->
                                    </div>
                                    <div class="teacher-des center">
                                        <p class="name secondary text-warning fw-bolder fs-4">John Gabison</p>
                                        <p class="text-light teachers-text">Database Designer</p>

                                    </div>
                                </div>
                                <div class="teacher-card">
                                    <div class="teacher-img">
                                        <img src="./img/team6.webp" class="img" height="auto" width="100%">
                                    </div>
                                    <div class="social-icons center" style="color:orange;">
                                        <i class="fa-brands fa-twitter"></i>
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <i class="fa-brands fa-google-plus-g"></i>
                                        <!-- <i class="fa-brands fa-instagram"></i> -->
                                    </div>
                                    <div class="teacher-des center">
                                        <p class="name secondary text-warning fw-bolder fs-4">George Down</p>
                                        <p class="text-light teachers-text">Backend Developer</p>

                                    </div>
                                </div>

                            </div>
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
        </div>

    </div>





    <div class="container-fluid bg py-0">


        <div class="container">

            <div class="row">
                <img src="/img/about1.webp" alt="" class="d-none col-md-7">
                <div class="col-12 col-md-5 px-2 py-5">
                    <h1 class="white-text text-light">A CITYWIDE</h1>
                    <h1 class="white-text text-warning">CELEBRATION</h1>
                    <h1 class="white-text text-warning">OF DESIGN</h1>

                    <p class="fs-5 lorem">Dolor sit amet, consectetur adipisicing elit. Commodi, vel omnis repellendus
                        mollitia, explicabo, maiores quisquam numquam quia reiciendis sit, accusantium atque ex animi
                        perspiciatis ab odit earum assumenda aliquid santium atque ex animi.</p>

                    <p class="fs-5 lorem">Dolor sit amet, consectetur adipisicing elit. Commodi, vel omnis repellendus
                        mollitia, explicabo, maiores quisquam numquam quia reiciendis sit, accusantium atque ex animi
                        perspiciatis ab odit earum assumenda aliquid santium atque ex animi.</p>



                </div>
            </div>


        </div>



    </div>





    <div class="container-fluid bg py-3 bg-extra">


        <div class="container py-0">

            <h1 class="white-text text-light">SCHEDULE</h1>
            <div class="container inner-bg upper-sch col-10">
                <div class="text-center pt-5 px-1 px-sm-5 border-bottom">
                    <span class="fs-4 fw-bolder d-inline-block active1 sch-date pb-3 mx-2" data-date="17">17th
                        Aug</span>
                    <span class="fs-4 fw-bolder d-inline-block sch-date pb-3 mx-2" data-date="18">18th Aug</span>
                    <span class="fs-4 fw-bolder d-inline-block sch-date pb-3 mx-2" data-date="19">19th Aug</span>
                </div>
            </div>
            <div class="container inner-bg col-10 seventeen">
                <div class="pt-5 px-1 row bd">

                    <div class="col-8 col-sm-6">
                        <h1 class="fs-5 fw-bold text-light">Registration And Breakfast</h1>
                        <p class="fs-5 lorem">- Shawn Watson</p>
                    </div>
                    <div class="col-4 col-sm-6">
                        <h1 class="fs-4 fw-bold text-light text-end">8:30 am</h1>

                    </div>

                </div>


                <div class="pt-5 px-1 row bd">

                    <div class="col-8 col-sm-6">
                        <h1 class="fs-5 fw-bold text-light">Opening Remarks And Keynote</h1>
                        <p class="fs-5 lorem">- Lara Hudson</p>
                    </div>
                    <div class="col-4 col-sm-6">
                        <h1 class="fs-4 fw-bold text-light text-end">10:00 am</h1>

                    </div>

                </div>
                <div class="pt-5 px-1 row bd">

                    <div class="col-8 col-sm-6">
                        <h1 class="fs-5 fw-bold text-light">Web Accessible Designs</h1>
                        <p class="fs-5 lorem">- George Bush</p>
                    </div>
                    <div class="col-4 col-sm-6">
                        <h1 class="fs-4 fw-bold text-light text-end">11:30 am</h1>

                    </div>

                </div>
                <div class="pt-5 px-1 row bde">

                    <div class="col-8 col-sm-6">
                        <h1 class="fs-5 fw-bold text-light">Building Communities</h1>
                        <p class="fs-5 lorem">- James Strong</p>
                    </div>
                    <div class="col-4 col-sm-6">
                        <h1 class="fs-4 fw-bold text-light text-end">12:30 am</h1>

                    </div>

                </div>
            </div>

            <div class="container inner-bg col-10 eighteen">
                <div class="pt-5 px-1 row bd">

                    <div class="col-8 col-sm-6">
                        <h1 class="fs-5 fw-bold text-light">Registration And Breakfast</h1>
                        <p class="fs-5 lorem">- Mal Practice</p>
                    </div>
                    <div class="col-4 col-sm-6">
                        <h1 class="fs-4 fw-bold text-light text-end">8:30 am</h1>

                    </div>

                </div>


                <div class="pt-5 px-1 row bd">

                    <div class="col-8 col-sm-6">
                        <h1 class="fs-5 fw-bold text-light">Opening Remarks And Keynote</h1>
                        <p class="fs-5 lorem">- Aaron Ottix</p>
                    </div>
                    <div class="col-4 col-sm-6">
                        <h1 class="fs-4 fw-bold text-light text-end">10:00 am</h1>

                    </div>

                </div>
                <div class="pt-5 px-1 row bd">

                    <div class="col-8 col-sm-6">
                        <h1 class="fs-5 fw-bold text-light">Web Accessible Designs</h1>
                        <p class="fs-5 lorem">- Frank Senbeans</p>
                    </div>
                    <div class="col-4 col-sm-6">
                        <h1 class="fs-4 fw-bold text-light text-end">11:30 am</h1>

                    </div>

                </div>
                <div class="pt-5 px-1 row bde">

                    <div class="col-8 col-sm-6">
                        <h1 class="fs-5 fw-bold text-light">Building Communities</h1>
                        <p class="fs-5 lorem">- Ken Tucky</p>
                    </div>
                    <div class="col-4 col-sm-6">
                        <h1 class="fs-4 fw-bold text-light text-end">12:30 am</h1>

                    </div>

                </div>
            </div>

            <div class="container inner-bg col-10 nineteen">
                <div class="pt-5 px-1 row bd">

                    <div class="col-8 col-sm-6">
                        <h1 class="fs-5 fw-bold text-light">Registration And Breakfast</h1>
                        <p class="fs-5 lorem">- Patricia Height</p>
                    </div>
                    <div class="col-4 col-sm-6">
                        <h1 class="fs-4 fw-bold text-light text-end">8:30 am</h1>

                    </div>

                </div>


                <div class="pt-5 px-1 row bd">

                    <div class="col-8 col-sm-6">
                        <h1 class="fs-5 fw-bold text-light">Opening Remarks And Keynote</h1>
                        <p class="fs-5 lorem">- Bella Anderson</p>
                    </div>
                    <div class="col-4 col-sm-6">
                        <h1 class="fs-4 fw-bold text-light text-end">10:00 am</h1>

                    </div>

                </div>
                <div class="pt-5 px-1 row bd">

                    <div class="col-8 col-sm-6">
                        <h1 class="fs-5 fw-bold text-light">Web Accessible Designs</h1>
                        <p class="fs-5 lorem">- Fabricia Hopes</p>
                    </div>
                    <div class="col-4 col-sm-6">
                        <h1 class="fs-4 fw-bold text-light text-end">11:30 am</h1>

                    </div>

                </div>
                <div class="pt-5 px-1 row bde">

                    <div class="col-8 col-sm-6">
                        <h1 class="fs-5 fw-bold text-light">Building Communities</h1>
                        <p class="fs-5 lorem">- Jennifer Gates</p>
                    </div>
                    <div class="col-4 col-sm-6">
                        <h1 class="fs-4 fw-bold text-light text-end">12:30 am</h1>

                    </div>

                </div>
            </div>
        </div>

    </div>











    <div class="container-fluid bg py-5">


        <div class="container">





            <div class="teacher-card-container teacher-card-container-specific">
                <div class="teacher-card teacher-card-specific">
                    <div class="teacher-img">
                        <img src="./img/blog1.webp" class="img" height="auto" width="100%">
                    </div>
                    <div class="teacher-des">
                        <a href="#">
                            <p class="name secondary fw-bolder fs-6">WHEN CORNERS COLLIDE: DECODING THE CONTRASTING
                                AESTHETICS</p>
                        </a>
                        <p class="lorem fs-5 text-start">- Justin Case</p>


                    </div>
                </div>

                <div class="teacher-card teacher-card-specific">
                    <div class="teacher-img">
                        <img src="./img/blog2.webp" class="img" height="auto" width="100%">
                    </div>
                    <div class="teacher-des">
                        <a href="#">
                            <p class="name secondary fw-bolder fs-6">WHEN CORNERS COLLIDE: DECODING THE CONTRASTING
                                AESTHETICS</p>
                        </a>
                        <p class="lorem fs-5 text-start">- Justin Case</p>

                    </div>
                </div>

                <div class="teacher-card teacher-card-specific">
                    <div class="teacher-img">
                        <img src="./img/blog3.webp" class="img" height="auto" width="100%">
                    </div>
                    <div class="teacher-des">
                        <a href="#">
                            <p class="name secondary fw-bolder fs-6">WHEN CORNERS COLLIDE: DECODING THE CONTRASTING
                                AESTHETICS</p>
                        </a>
                        <p class="lorem fs-5 text-start">- Justin Case</p>


                    </div>
                </div>
            </div>








        </div>



    </div>








    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3380.8370270071473!2d72.67776427459857!3d32.07365641960019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392177bfd683f3d5%3A0xa8090086de867b9d!2sUniversity%20of%20Sargodha!5e0!3m2!1sen!2s!4v1687874307178!5m2!1sen!2s"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>





    <div class="container-fluid bg pt-5 pb-1">

        <img src="/img/bg_shape.webp" class="shape" alt="" width="100%" height="200px">

        <div class="container inner-bg-shape p-5">

            <h1 class="white-text text-light text-center">SCHEDULE</h1>


            <div id="carouselExampleAutoplaying" class="carousel slide py-5" data-bs-ride="carousel">
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <img src="/img/brand1.webp" class="text-center w-25 px-5 py-1 img-brand" alt="...">
                        <img src="/img/brand2.webp" class="text-center w-25 px-5 py-1 img-brand" alt="...">
                        <img src="/img/brand3.webp" class="text-center w-25 px-5 py-1 img-brand" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img src="/img/brand4.webp" class="text-center w-25 px-5 py-1 img-brand" alt="...">
                        <img src="/img/brand5.webp" class="text-center w-25 px-5 py-1 img-brand" alt="...">

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



    <script>
        let schDate = document.getElementsByClassName("sch-date");
        let elem18 = document.getElementsByClassName('eighteen');
        let elem19 = document.getElementsByClassName('nineteen');
        let elem17 = document.getElementsByClassName('seventeen');
        Array.from(schDate).forEach(element => {
            element.addEventListener('click', (e) => {
                Array.from(schDate).forEach(element => {
                    element.classList.remove('active1');
                });
                let a = e.target;
                a.classList.add('active1');
                if (a.getAttribute('data-date') == 18) {
                    elem18[0].style.zIndex = "101";
                    elem17[0].style.zIndex = "90";
                    elem19[0].style.zIndex = "90";

                }
                else if (a.getAttribute('data-date') == 19) {
                    elem19[0].style.zIndex = "101";
                    elem18[0].style.zIndex = "90";
                    elem17[0].style.zIndex = "90";

                }
                else if (a.getAttribute('data-date') == 17) {
                    elem17[0].style.zIndex = "101";
                    elem18[0].style.zIndex = "90";
                    elem19[0].style.zIndex = "90";

                }
            });
        });




    </script>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>
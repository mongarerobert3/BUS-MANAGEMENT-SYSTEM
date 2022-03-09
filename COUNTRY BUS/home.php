<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>COUNTRY BUS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
<!--font awesome cdn-->

    <script src="https://kit.fontawesome.com/4bde94238d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <!--start of bootstrap 4 cdn-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<!--End of bootstrap 4 cdn-->



    <!--start of bootstrap 5 cdn-->

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!--End of bootstrap 5 cdn-->

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/booking.css">


</head>

<body>

<!-- ======= Header ======= -->
<header id="header">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1 class="text-light"><a href="home.php"><span>COUNTRY BUS</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
             <a href="home.php"><img src="assets/img/coach-3206326.png" alt="" class="img-fluid"></a>
        </div>

        <div class="contact-link float-right">
            <a href="general%20login.php">LOGIN</a>
        </div>

    </div>
</header><!-- End #header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!--        *********bringing the home.php*******-->
        <?php
        $page = isset($_GET['page']) ?$_GET['page'] : "aerohome";
        include $page.'.php';
        ?>

        <!--********* end of bringing the home.php*******-->
<!--        <p class="msape">You can pay via <img src="assets/img/msape.png" alt="msape" width="70px" height="50px"></b></p>-->

    </div>
    <div class="modal fade" id="confirm_modal" role='dialog'>
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                </div>
                <div class="modal-body">
                    <div id="delete_content"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="uni_modal" role='dialog'>
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="uni_modal_right" role='dialog'>
        <div class="modal-dialog modal-full-height  modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fa fa-arrow-right"></span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<br><br><br><br><br>

<div id="portfolio" class="container">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12 text-center">
                <br><br><br>
                <h2 class="mb-4">Partner Companies</h2>
                <hr class="divider">

            </div>
        </div>
        <div class="row no-gutters">
            <?php
            $cats = $conn->query("SELECT * FROM airlines_list order by rand() asc");
            while($row=$cats->fetch_assoc()):
                ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-box" href="#">
                        <img class="img-fluid" src="aeroassetsimg/img/<?php echo $row['logo_path'] ?>" alt="" />

                        <div class="port-content text-center">
                            <a class="btn-primary btn">Check Bus</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</div>
<script>

    $('.view_prod').click(function(){
        uni_modal_right('Product','assets/view_prod.php?id='+$(this).attr('data-id'))
    })
    $('.select2').select2({
        placeholder:'Select Departure',
        width:'100%'
    })
    $('[name="trip"]').on("keypress change keyup",function(){
        if($(this).val() == 1){
            $('#rdate').hide()
        }else{
            $('#rdate').show()
        }
    })
</script>

</section>

<main id="main">

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact Us</h2>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <address>00618 Lusaka Road, Nairobi, Kenya</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="bi bi-phone"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+254 712590033">+254 712590033</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="courtewampedsoftwares@gmail.com">courtewampedsoftwares@gmail.com</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="form-check form-group ps-0">
                        <input id="privacy-policy" type="checkbox" name="privacy" value="accept" required>
                        <label class="form-check-label ps-1" for="privacy-policy">
                            Accept our <a href="terms.html">terms of service</a> and <a href="privacy.html">privacy policy</a>
                        </label>
                    </div>
                    <div class="text-center"><button name="send" type="submit">Send Message</button></div>
                </form>
            </div>

        </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Country Bus</span></strong>. All Rights Reserved
        </div>
    </div>
</footer>

<!-- End #footer -->

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

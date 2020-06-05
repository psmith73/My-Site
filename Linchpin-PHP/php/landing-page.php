<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linchpin Coffee</title>
    <link href="https://fonts.googleapis.com/css?family=Spartan:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../sass/landing-page.scss">
    <link rel="stylesheet" href="../css/landing-page.css">
</head>
<body>
   
    <main class="full-screen-nav">
        <section class="landing parallax overlay">
            <video autoplay muted loop class="video">
                <source src="../video/video.mp4" type="video/mp4">
            </video>   
            <div class="logo d-flex flex-column-reverse justify-content-between flex-lg-row justify-content-lg-around flex-nowrap align-items-center text-center">
                <div class="col-1 col-1 col-lg-7 d-flex flex-column justify-content-end align-items-lg-end flex-nowrap">
                    <div class="down-arrow">
                        <p>Keep Scrolling</p>
                        <i class="fas fa-angle-double-down" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-2 col-11 col-lg-5 d-flex flex-column justify-content-center flex-nowrap justify-content-lg-end align-items-center">
                    <img class="linchpin" src="../images/linchpin-coffee.svg" alt="A Linchpin which is the logo for Linchpin Coffee">
                    <br>
                    <span class="name">Linchpin Coffee</span>
                    <br>
                    <span class="slogan">Coffee holds it all together</span>
                </div>  
            </div>
        </section>
        <section class="nav-item d-flex flex-column align-items-center justify-content-center static-story">
             <h2>Story Time</h2>
            <p>The riveting story of how some coffee lovers came to start their own coffee shop</p>
            <a class="button" href="story.php">Learn More <i class="fas fa-arrow-right"></i></a>
        </section>
        <section class="nav-item d-flex flex-column align-items-center justify-content-center parallax overlay bg-beans">
            <h2>The Beans</h2>
            <p>We're not saying we have the best coffee beans around, but.....we are</p>
            <a class="button" href="beans.php">Coffee Heaven <i class="fas fa-arrow-right"></i></a>
        </section>
        <section class="nav-item d-flex flex-column align-items-center justify-content-center static-brew">
            <h2>Brew It Up</h2>
            <p>You are moments away from learning how to brew the best coffee of your entire life</p>
            <a class="button" href="brew.php">Let's Brew This <i class="fas fa-arrow-right"></i></a>
        </section>
        <section class="nav-item d-flex flex-column align-items-center justify-content-center parallax overlay bg-blog">
            <h2>From Coffee With Love</h2>
            <p>Who doesn't want to read want to read all about the amazing world of coffee</p>
            <a class="button" href="blog.php">The Blog <i class="fas fa-arrow-right"></i></a>
        </section>
        <section class="nav-item d-flex flex-column align-items-center justify-content-center static-contact">
            <h2>Coffee Talk</h2>
            <p>We want to hear from you! Yes, you. No, not that other person. YOU!</p>
            <a class="button" href="contact.php">Talk To Us <i class="fas fa-arrow-right"></i></a>
        </section>

        <footer class ="d-flex flex-row flex-nowrap justify-content-around align-items-start">
            <div class="location">
                <h3>Location</h3>
                <p>100 Coffee Way </p>
                <p>Birmingham, AL</p>
            </div>
    
            <div class="hours">
                <h3>Hours</h3>
                <p>Monday-Friday: 7am-3pm</p>
                <p>Saturday: 9am-5pm</p>
                <p>Sunday: Closed</p>
            </div>
    
            <div class="footer-name">
                <h1>Linchpin Coffee</h1>
            </div>
    
            <div class="social">
                <h3>Follow Us!</h3>
                <a><i class="fab fa-instagram"></i></a>
                <a><i class="fab fa-facebook-square"></i></a>
            </div>
        </footer>
    </main>

    <script src="https://kit.fontawesome.com/6600f7d498.js" crossorigin="anonymous"></script>   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
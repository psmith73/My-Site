<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linchpin Coffee | Contact Us</title>
    <link href="https://fonts.googleapis.com/css?family=Spartan:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../sass/contact.scss">
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>

    <?php
        include "header.php";
    ?>
    
    <div class="banner d-flex flex-column justify-content-center align-items-center">
        <h1>Contact Us</h1> 
        <div class="divide"></div>    
    </div>
    
    <div class="contact-form d-flex flex-nowrap flex-column flex-lg-row justify-content-between align-items-center">
        <div class="chat col-lg-6">
            <h3>Let's Chat</h3>
            <p>Hey friends! We want to hear from you. If you want to carry or serve our products, tell us how much you enjoyed everything, or if something wasn’t up to your/our standard please give us a shout.</p>
            <br>
            <p>100 Coffee Way </p>
            <p>Birmingham, AL</p>
        </div>

        <div class="form col-lg-6">
            <form>   
                <label class="screen-reader-text" for="name">Name</label>   
                <input name="name" id="name" type="text" class="feedback-input" placeholder="Name" />   
                <label class="screen-reader-text" for="email">Email</label>
                <input name="email" id="email" type="text" class="feedback-input" placeholder="Email" />
                <label class="screen-reader-text" for="text">Message</label>
                <textarea name="text" id="text" class="feedback-input" placeholder="Comment"></textarea>
                <input type="submit" value="SUBMIT"/>
            </form>
        </div>
    </div>

    <?php
        include "footer.php";
    ?>

    <script src="https://kit.fontawesome.com/6600f7d498.js" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
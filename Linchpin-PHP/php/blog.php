<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linchpin Coffee | Brew Guide</title>
    <link href="https://fonts.googleapis.com/css?family=Spartan:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../sass/blog.scss">
    <link rel="stylesheet" href="../css/blog.css">
</head>
<body>

    <?php
        include "header.php";
    ?>

    <div class="banner d-flex flex-column justify-content-center align-items-center">
        <h1>The Blog</h1>
        <div class="divide"></div>
    </div>
    
    <div class="blog-posts d-flex flex-column flex-nowrap justify-content-between align-items-center">
        
        <!-- PHP LOADING IN CONTENT DYNAMICALLY -->

        <?php 
            include "blog-loop.php";
            if ( $blogs && count( $blogs ) ){
                foreach( $blogs as $key => $blog ):
                    // the key will be the index of the array you are working on. think of this like the variable i. also remember that php arrays are 0 indexed
                    $odd = ($key+1) % 2 === 1 ? true : false;

                    // ( condition ? do if true : do if false ) -> this is ternary style, super useful for simple boolean logic, especially if you want to echo something out
                    echo '<div class="blog-post'. ( $odd ? '-reverse' : '' ) .'">'.
                            ( $odd ? '' : '<img src="'. $blog['image']['src'] .'" alt="'. $blog['image']['alt'] .'">' ).
                            '<div class="blog-post-description">'.
                            '<h2>'. $blog['title'] .'</h2>'.
                            '<p class="tagline">'. $blog['shortText'] .'</p>'.
                            '<time class="date">Published '. $blog['date'] .'</time>'.
                            '<a href="post.php?id='. $blog['id'] .'" id="btnOne" class="button">Read More <i class="fas fa-arrow-right"></i></a>'.
                            '</div>'.
                            ( $odd ? '<img src="'. $blog['image']['src'] .'" alt="'. $blog['image']['alt'] .'">' : '' ).
                        '</div>';
                endforeach;
            }
        ?>
    </div>  
    
    <?php
        include "footer.php";
    ?>

    <script src="https://kit.fontawesome.com/6600f7d498.js" crossorigin="anonymous"></script>
    <script src="../js/blog.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
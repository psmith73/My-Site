<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linchpin Coffee | Brew Guide</title>
    <link href="https://fonts.googleapis.com/css?family=Spartan:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../sass/post.scss">
    <link rel="stylesheet" href="../css/post.css">
</head>
<body>

    <?php
        include "header.php";
    ?>

    <div class="banner d-flex flex-column justify-content-center align-items-center">
        <h1>The Blog</h1>
        <div class="divide"></div>
    </div>
    
        
        <!-- PHP LOADING IN CONTENT DYNAMICALLY -->
        <?php
         include "blog-loop.php";
        //  get the url parameter for the post id
         $blog_id = $_GET["id"];
         //  filter the blogs array to return the blog with the selected id, this should return an array with a single post in it
         $blog = array_filter($blogs, function( $single_blog_array ) use ( $blog_id ){
            return $single_blog_array['id'] === $blog_id;
        });

        //  check if blog id is a number and the blog actually exists
         if ( is_numeric($blog_id) && $blog ){
            //  reset the blog post break it out of the parent array
            $blog = reset($blog);
            // print out the blog
            echo '<div class="post">'. 
                '<h2>'. $blog['title'] .'</h2>'.
                '<img src="'. $blog['image']['src'] .'" alt="'. $blog['image']['alt'] .'">'.
                $blog['postContent'] .
                '<a class="button" href="blog.php"><i class="fas fa-arrow-left"></i> Back To Blog</a>'. 
                '</div>';
         } else {
            //  else show a no blog selected text or 404 stuff
            echo '<div class="post">'. 
                '<h2>Whoops! No post found!</h2>'.
                '<p>The post you were looking for could not be found. Please check the url or go back to the blog page.</p>'.
                '<a class="button" href="blog.php"><i class="fas fa-arrow-left"></i> Back To Blog</a>'. 
                '</div>';
         }
        ?>
    <?php
        include "footer.php";
    ?>

    <script src="https://kit.fontawesome.com/6600f7d498.js" crossorigin="anonymous"></script>
    <!-- <script src="../js/post.js"></script> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
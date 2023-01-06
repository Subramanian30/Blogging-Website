<?php

    include "logic.php";

?>

<html>
<head>
    
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="index.css">
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blog using PHP & MySQL</title>
</head>
<body background="background.png">
    <div class="banner">
          
            <div class="navbar">
                <img src="logo.jpg" class="logo">
                <ul>
                    <li><b><a href="expert.php">Home</a></b></li>
                    <li><b><a href="selection.php">Blogs</a></b></li>
                    
                    
                    
                    <li><b><a href="feedback.html">FeedBack</a></b></li>
                    
                    <li><b><a href="home.php">Logout</a></b></li>

                </ul>
            </div>
        

            </div>
    

        <div class="container mt-5">

        <!-- Display any info -->
        
        

        <!-- Display posts from database -->
        <div class="row">
            
                
            
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-name">Name:<?php echo $q['name'];?></h5>
                            
                            <h5 class="card-title">Title:<?php echo $q['title'];?></h5>
                            <h5 class="card-rating">Rating:<?php echo $q['rating'];?>/5</h5>
                            <p class="card-text">Content:<?php echo substr($q['content'], 0, 50);?>...</p>
                            <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
       
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>


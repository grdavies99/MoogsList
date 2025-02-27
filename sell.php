<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Pubcral · Home</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
    
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Place your stylesheet here-->
    
</head>

<body>

<?php
    include 'header.php';
    ?>

    <main role="main" class="container-fluid bg clearfix">

        <!-- <div class=" whitebg text-center mt-5 p-3">
            <h1>This</h1>
            <p class="lead"><b>Going to college already costs too much, your books shouldn't have to. </b></p>
        </div> -->
        <div class="row h-100">
        <div class=" whitebg col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto my-auto text-center form p-4">
                    <h1>find out how much your book is worth!</h1>
<!--        <div class="text-center mt-5 pt-5">-->
            <form class="justify-content-center form-inline" method="GET" action="sellCTRL.php">
            <input class="form-control mr-sm-2" name="isbn" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form></div></div>

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
    <footer class="">
    <div class="footer-copyright text-center bg-primary py-3">© 2020 Copyright:
        <a href="index.html" class="text-dark">DormTrooper</a>
    </div>
</footer>
</html>
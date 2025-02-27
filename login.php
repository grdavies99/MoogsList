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

        <div class=" whitebg text-center mt-5 p-3" >
            <h1>DormTrooper: Books with morals</h1>
            <p class="lead"><b>Going to college already costs way too much, your Learning materials shouldn't. </b></p>
        </div>
        <div class="row h-75">
            <div class=" whitebg col-xl-3 col-lg-4 col-md-5 col-sm-8 mx-auto my-auto  form p-4">
                <h1>Login</h1>
                <!--        <div class="text-center mt-5 pt-5">-->
                <form class="justify-content-center form-block" method="POST" action="log.php" >
                    <div class="form-group">
                        <label class="bold"><b>Username</b></label>
                        <input class="form-control mr-sm-2 ml-1" type="text" placeholder="Username" name="Username"></div>
                    <div class="form-group">
                        <label><b>Password</b></label>
                    <input class="form-control mr-sm-2 ml-1" type="password" placeholder="password" name="password">
                        </div>
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Login </button>
                </form>
            </div>
        </div>

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
<?php
include ("footer.php");
?>

</html>

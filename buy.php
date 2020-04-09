<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Starter Template · Bootstrap</title>

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

    <main role="main" class="clearfix container-fluid my-5  bg-light">
        <h1 class="jumbotron text-primary text-center">Discover the better way to buy books today!</h1>
        <div class="wrapper">
            <nav>
                <div class="sidebar-header ">
                    <a href="index.html">
                        <h3>DormTrooper</h3>
                    </a>
                </div>

                <ul class="list-unstyled components ">
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                <form class="justify-content-center">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-1" type="submit">Search</button>
                </form>
            </nav>

            <div class="gallery mt-5 mx-auto container row" id="gallery">

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mx-auto mb-3 pics card animation all"><a href="product$isbn.php">
                        <h2 class="card-header">Here is the textbook</h2>
                        <img class="card-img" src="images/testbook.jpg">

                        <p class="card-footer">it costs this much</p>
                    </a>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mx-auto mb-3 pics card animation all"><a href="product$isbn.php">
                        <h2 class="card-header">Here is the textbook</h2>
                        <img class="card-img" src="images/testbook.jpg">

                        <p class="card-footer">it costs this much</p>
                    </a>
                </div>

                <div class=" col-xl-3 col-lg-4 col-md-6 col-sm-12 mx-auto mb-3 pics card animation all"><a href="product$isbn.php">
                        <h2 class="card-header ">Here is the textbook</h2>
                        <img class="card-img" src="images/testbook.jpg">

                        <p class="card-footer ">it costs this much</p>
                    </a>

                </div>
                <div class=" col-xl-3 col-lg-4 col-md-6 col-sm-12 mx-auto mb-3 pics card animation all"><a href="product$isbn.php">
                        <h2 class="card-header">Here is the textbook</h2>
                        <img class="card-img" src="images/testbook.jpg">

                        <p class="card-footer">it costs this much</p>
                    </a>
                </div>
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
<footer class="">
    <div class="footer-copyright text-center bg-primary py-3">© 2020 Copyright:
        <a href="index.html" class="text-dark">DormTrooper</a>
    </div>
</footer></html>
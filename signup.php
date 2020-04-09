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

<!--
        <div class=" whitebg text-center mt-5 p-3">
            <h1>DormTrooper: Books with morals</h1>
            <p class="lead"><b>Going to college already costs too much, your books shouldn't have to. </b></p>
        </div>
-->
        <div class="row h-75">
            <div class=" whitebg col-xl-3 col-lg-4 col-md-5 col-sm-8 mx-auto my-auto  form p-4">
                <h1>Login</h1>
                <!--        <div class="text-center mt-5 pt-5">-->
                <form class="justify-content-center form-block" method="POST" action="sign.php">
                    <div class="form-group">
                        <label class="bold"><b>First Name</b></label>
                        <input class="form-control mr-sm-2 ml-1" type="text" placeholder="First Name" name="FName">
                    </div>
                    <div class="form-group">
                        <label><b>Last Name</b></label>
                        <input class="form-control mr-sm-2 ml-1" type="text" placeholder="Last Name" name="LName">
                    </div>
                    <div class="form-group">
                        <label class="bold"><b>Email</b></label>
                        <input class="form-control mr-sm-2 ml-1" type="text" placeholder="JaneDoe@DormTrooper.com" name="email">
                    </div>
                    <div class="form-group">
                        <label><b>Adress</b></label>
                        <input class="form-control mr-sm-2 ml-1" type="text" placeholder="123 main st" name="address">
                    </div>
                    <div class="form-group">
                        <label class="bold"><b>City</b></label>
                        <input class="form-control mr-sm-2 ml-1" type="text" placeholder="City" name="city">
                    </div>
                    <div class="form-group">
                        <label><b>State</b></label>
                        <select class="form-control mr-sm-2 ml-1" type="sel" name="state">
                            <option value="AL">AL</option>
                            <option value="AK">AK</option>
                            <option value="AR">AR</option>
                            <option value="AZ">AZ</option>
                            <option value="CA">CA</option>
                            <option value="CO">CO</option>
                            <option value="CT">CT</option>
                            <option value="DC">DC</option>
                            <option value="DE">DE</option>
                            <option value="FL">FL</option>
                            <option value="GA">GA</option>
                            <option value="HI">HI</option>
                            <option value="IA">IA</option>
                            <option value="ID">ID</option>
                            <option value="IL">IL</option>
                            <option value="IN">IN</option>
                            <option value="KS">KS</option>
                            <option value="KY">KY</option>
                            <option value="LA">LA</option>
                            <option value="MA">MA</option>
                            <option value="MD">MD</option>
                            <option value="ME">ME</option>
                            <option value="MI">MI</option>
                            <option value="MN">MN</option>
                            <option value="MO">MO</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="NC">NC</option>
                            <option value="NE">NE</option>
                            <option value="NH">NH</option>
                            <option value="NJ">NJ</option>
                            <option value="NM">NM</option>
                            <option value="NV">NV</option>
                            <option value="NY">NY</option>
                            <option value="ND">ND</option>
                            <option value="OH">OH</option>
                            <option value="OK">OK</option>
                            <option value="OR">OR</option>
                            <option value="PA">PA</option>
                            <option value="RI">RI</option>
                            <option value="SC">SC</option>
                            <option value="SD">SD</option>
                            <option value="TN">TN</option>
                            <option value="TX">TX</option>
                            <option value="UT">UT</option>
                            <option value="VT">VT</option>
                            <option value="VA">VA</option>
                            <option value="WA">WA</option>
                            <option value="WI">WI</option>
                            <option value="WV">WV</option>
                            <option value="WY">WY</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="bold"><b>Zip Code</b></label>
                        <input class="form-control mr-sm-2 ml-1" type="text" placeholder="90210" name="zip">
                    </div>
                    <div class="form-group">
                        <!--                        <script>$("#phone").mask("999-999-9999")</script>-->
                        <label><b>Phone Number</b></label>
                        <input class="form-control mr-sm-2 ml-1" type="tel" placeholder="1234567890" name="phone">
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
<footer class="">
    <div class="footer-copyright text-center bg-primary py-3">© 2020 Copyright:
        <a href="index.html" class="text-dark">DormTrooper</a>
    </div>
</footer>

</html>

<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href="index.html">Dormtrooper</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="about.php">About</a>
            </li>

            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Books</a>
                <div class="dropdown-menu " aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="buy.php">Buy</a>
                    <a class="dropdown-item" href="sell.php">Sell</a>
                </div>
            </li>
        </ul>

    </div><?php
    include 'connec.php';
    if (!empty($_SESSION['login_user'])){
        $DTID = $_SESSION['login_user'];
    $sql = "SELECT * FROM users WHERE DTID=$DTID";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
        echo '<p class="text-right  my-auto">Welcome Back'.$row[FName].'</p>';
    }
    else{
        echo '<p class="text-right  my-auto"><a class="text-light" href="login.php">Login</a> <a class="text-light" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="blank">|</a> <a class="text-light" href="signup.php">Sign Up</a> </p>';
    }
    
    ?>
<!--    <p class="text-right  my-auto"><a class="text-light" href="login.php">Login</a> <a class="text-light" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="blank">|</a> <a class="text-light" href="signup.php">Sign Up</a> </p>-->
</nav>

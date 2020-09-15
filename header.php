

<nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top">
    <a class="navbar-brand" href="index.html">MoogsList</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="about.php">About</a>
            </li>

            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Restaurants</a>
                <div class="dropdown-menu " aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="buy.php">How It Works</a>
                    <a class="dropdown-item" href="sell.php">Get Involved</a>
                </div>
            </li>
        </ul>

    </div>
    <?php
    include 'connec.php';
    if (isset($_COOKIE['login_user'])){
        $DTID = $_COOKIE['login_user'];
    $sql = "SELECT * FROM users WHERE MoogID=$DTID";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // $active = $row['active'];
        echo '<p class="text-right text-light my-auto">Welcome Back '.$row['Fname'].'</p>';
    }
    else{
        echo '<p class="text-right  my-auto"><a class="text-light" href="login.php">Login</a> <a class="text-light" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="blank">|</a> <a class="text-light" href="signup.php">Sign Up</a> </p>';
    }
    
    ?>
<!--    <p class="text-right  my-auto"><a class="text-light" href="login.php">Login</a> <a class="text-light" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="blank">|</a> <a class="text-light" href="signup.php">Sign Up</a> </p>-->
</nav>

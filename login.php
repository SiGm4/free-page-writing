<?php
    if (isset($_GET['signedUp']) && $_GET['signedUp']==1){
        echo "Signup successful. Now login.";
    }
    if(isset($_POST['username'],$_POST['password'])){
        include 'login_query.php';
    }
?>
<html>

<head>
    <title>Free Morning Pages Writing</title>
    <meta charset="UTF-8">
    <meta name="description" content="Free writing and journaling. Get your morning pages out there.">
    <meta name="keywords" content="writing, journaling, 750words, morning, pages, three, artist, julia, cameron">
    <meta name="author" content="Dimitris Gkiokas, Panagiotis Zisis">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="signup.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <?php include 'navbar.php';?>
    <div class="jumbotron">
        <div class="container" id="jumbotron-cont">
            <div class="container signup-container">
                <div class="col-md-6 col-md-offset-3 signup-inner-container">
                    <div class="col-md-8 col-md-offset-2">
                        <form id="signup-form" class="text-center" action="" method="post">
                            <h2>Log In</h2>
                            <span id="error">
                                <?php 
                                if (isset($error)){
                                    echo $error;
                                }
                                ?>
                            </span>
                            <div class="form-group has-feedback">
                                <!--<label for="username">Username</label>-->
                                <input type="text" name="username" id="username" placeholder="Username" class="form-control narrow" required></input>
                                <i class="glyphicon glyphicon-user form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback">
                                <!--<label for="password">Password</label>-->
                                <input type="password" name="password" id="password" placeholder="Password" class="form-control narrow" required></input>
                                <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                            </div>
                            <button type="submit" id="signupBtn" class="btn btn-block btn-primary">Log In</button>
                            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js" type="text/javascript"></script>
    <script src="signup.js" type="text/javascript"></script>
</body>
</html>
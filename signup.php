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
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid" id="nav-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="index.html">
                    <img class="logo-responsive" id="logo" src="basic_logo.png" alt="Morning Pages Logo"></img>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="signup.php">SIGN UP</a></li>
                    <li><a href="#">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <div class="container" id="jumbotron-cont">
            <div class="container signup-container">
                <div class="col-md-6 col-md-offset-3 signup-inner-container">
                    <div class="col-md-8 col-md-offset-2">
                        <form id="signup-form">
                            <h3>Sign Up</h3>
                            <div class="form-group has-feedback">
                                <!--<label for="email">E-mail</label>-->
                                <input type="text" name="email" id="email" placeholder="email@provider.com" class="form-control narrow"></input>
                                <i class="glyphicon glyphicon-envelope form-control-feedback"></i>                                
                            </div>
                            <div class="form-group has-feedback">
                                <!--<label for="username">Username</label>-->
                                <input type="text" name="username" id="username" placeholder="Username" class="form-control narrow"></input>
                                <i class="glyphicon glyphicon-user form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback">
                                <!--<label for="password">Password</label>-->
                                <input type="password" name="password" id="password" placeholder="Password" class="form-control narrow"></input>
                                <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback">
                                <!--<label for="confirm">Confirm Password</label>-->
                                <input type="password" name="confirm" id="confirm" placeholder="Confirm Password" class="form-control narrow"></input>
                                <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                            </div>
                            <button type="submit" class="btn btn-default">Sign Up</button>
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
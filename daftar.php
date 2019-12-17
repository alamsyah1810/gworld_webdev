<!DOCTYPE html>
<html>

<head>
    <title>Gaming World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='css/bootstrap.min.css'>
    <script src="script/jquery.min.js"></script>
    <script src='js/bootstrap.min.js'></script>

    <style>
        body {
            background-color: rgb(255, 136, 0);
            background-image: url(register_bg.jpg)
        }

        .container-fluid {
            padding: 3px 15px;
        }

        .navbar {
            margin-bottom: 0;
            z-index: 9999;
            border: 0;
            font-size: 14px;
            line-height: 1.42857143;
            letter-spacing: 2px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
            opacity: 0.9;

        }

        .daftar .post {
            background-position: center;
            max-width: 200px;
            width: 40;
            height: 40;
            text-align: center;
            padding-top: 60px;
            float: center;
            padding-left: 600px;
        }

        .register {
            text-align: center;
            padding-top: 50px;
            float: center;
        }

        * {
            margin: 0px;
            padding: 0px;
        }

        .header {
            width: 30%;
            margin: 50px auto 0px;
            color: white;
            background: black;
            opacity: 0.7;
            text-align: center;
            border: 0px solid #B0C4DE;
            border-bottom: none;
            border-radius: 10px 10px 0px 0px;
            padding: 20px;
            position: relative;
            top: 120px;
        }

        .daftar form  {
            width: 30%;
            margin: 0px auto;
            padding: 20px;
            border: 1px solid #B0C4DE;
            background: white;
            border-radius: 0px 0px 10px 10px;
            position: relative;
            top: 120px
        }

        .daftar .input-group {
            margin: 10px 0px 10px 0px;
        }

        .daftar .input-group label {
            display: block;
            text-align: left;
            margin: 3px;
        }

        .daftar .input-group input {
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        .daftar .btn {
            padding: 10px;
            font-size: 15px;
            color: white;
            background: black;
            border: none;
            opacity: 0.7;
            border-radius: 5px;
        }

        .daftar .error {
            width: 92%;
            margin: 0px auto;
            padding: 10px;
            border: 1px solid #a94442;
            color: #a94442;
            background: #f2dede;
            border-radius: 5px;
            text-align: left;
        }

        .daftar .success {
            color: #3c763d;
            background: #dff0d8;
            border: 1px solid #3c763d;
            margin-bottom: 20px;
        }

       .daftar .username input {
            position: relative;
            left: 55px;
            width: 50%
        }

       .daftar .email input {
            position: relative;
            left: 87px;
            width: 50%
        }

        .daftar .password input {
            position: relative;
            left: 58px;
            width: 50%
        }

        .daftar .nohp input {
            position: relative;
            left: 79px;
            width: 50%
        }

        .daftar .confirmpassword input {
            position: relative;
            left: 1px;
            width: 50%
        }

        .daftar .submit {
            position: relative;
            top: 10px;
            text-align: center;
        }

        .daftar .member {
            position: relative;
            text-align: center;
            top: 20px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">GamingWorld</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="news.html">Gaming News</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
            </ul>
            <form class="navbar-form navbar-right" action="/action_page.php">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </nav>

    <div class="container">

    </div>

    <div class="homepage" id="home">
        <div class="game-page">

            <div class="daftar">

            </div>

        </div>
    </div>


    <div class="header">
        <h2>Register</h2>
    </div>

    <div class="daftar">
    <form method="post" action="register_recive.php">
        <div class="username">
            <label>Username</label>
            <input type="text" name="username" value="" required>
        </div>
        <div class="email">
            <label>Email</label>
            <input type="text" name="email" value="" required>
        </div>
        <div class="password">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <div class="confirmpassword">
            <label>Confirm password</label>
            <input type="password" name="confirmpassword" required>
        </div>

        <div class="nohp">
            <label>NO HP</label>
            <input type="text" name="nohp" required>
        </div>
        <div class="submit">
            <button type="submit" class="btn" name="register_btn">Register</button>
        </div>
        <p class="member">Already a member ? <a href="login.php">Sign in</a></p>
    </form>
    </div>


</body>

</html>
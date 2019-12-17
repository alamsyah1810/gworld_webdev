<!DOCTYPE html>
<html>

<head>

  <meta name="google-signin-scope" content="profile email">
  <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>

  <title>Gaming World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href='css/bootstrap.min.css'>
  <script src="script/jquery.min.js"></script>
  <script src='js/bootstrap.min.js'></script>

  <style>
    body {
      background-color: rgb(255, 136, 0);
      opacity: 0, 5;
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


    * {
      box-sizing: border-box
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

    /* style the container */
    .container {
      background-position: center;
      border-radius: 0px 0px 10px 10px;
      position: relative;
      top: 115px;
      height: 220px;
      padding-top: 100px;
      margin: 0px auto;
      width: 30%;
      background-color: white;
      border: 1px solid #B0C4DE;
    }

    /* style inputs and link buttons */


    .container .col .uname {
      bottom: 90px;
      min-width: 180%;
      right: 55%;
      float: right;
      position: relative;
    }

    .container .col .pass {
      bottom: 85px;
      min-width: 180%;
      right: 55%;
      float: right;
      position: relative;
    }

    .container .col .button {
      right: 75%;
      margin: auto;
      width: 60%;
      height: 35px;
      border-radius: 4px;
      bottom: 40px;
      font-size: 17px;
      position: relative;
      background-color: black;
      opacity: 0.7;
    }

    .container .col .fb-btn {
      float: left;
      left: 28%;
      padding-top: 10px;
      width: 110%;
      height: 40px;
      top: 100px;
      border-radius: 4px;
      font-size: 12px;
      color: white;
      position: relative;
      text-align: center;
      bottom: 0px;
      background-color: #3B5998;
      box-shadow: 1px 2px 3px gray;
    }

    .container .col .twitter-btn {
      float: right;
      left: 160%;
      width: 110%;
      padding-top: 10px;
      top: 60px;
      color: white;
      height: 40px;
      border-radius: 4px;
      text-align: center;
      font-size: 12px;
      position: relative;
      background-color: #55ACEE;
      box-shadow: 1px 2px 3px gray;
    }

    .container .col .google-btn {
      float: right;
      padding-top: 10px;
      left: 95%;
      width: 110%;
      top: 70px;
      color: white;
      height: 40px;
      border-radius: 4px;
      text-align: center;
      font-size: 12px;
      position: relative;
      background-color: #dd4b39;
      box-shadow: 1px 2px 3px gray;
    }

    .container .vl-innertext {
      font-size: 20px;
      position: relative;
      bottom: 5px;
    }

    .container .login-text {
      position: relative;
      bottom: 95px;
    }

    input:hover,
    .btn:hover {
      opacity: 1;
    }

    /* add appropriate colors to fb, twitter and google buttons */
    .fb {
      background-color: #3B5998;
      color: white;
    }

    .twitter {
      background-color: #55ACEE;
      color: white;
    }

    .google {
      background-color: #dd4b39;
      color: white;
    }

    /* style the submit button */
    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    /* Two-column layout */
    .col {
      float: left;
      width: 50%;
      margin: auto;
      padding: 0 50px;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* vertical line */
    .vl {
      position: absolute;
      left: 50%;
      transform: translate(-50%);
      padding-top: 70px;
      height: 175px;
    }

    /* text inside the vertical line */
    .inner {
      position: absolute;
      top: 50%;
      transform: translate(-50%, -50%);
      background-color: #f1f1f1;
      border: 1px solid #ccc;
      border-radius: 50%;
      padding: 8px 10px;
    }

    /* hide some text on medium and large screens */
    .hide-md-lg {
      display: none;
    }

    /* bottom container */
    .bottom-container .row .daftar {
      right: 85px;
      position: relative;
      color: black;
      bottom: 27px;
      text-align: center;
    }

    .bottom-container .row .lupa {
      float: right;
      color: black;
      text-align: center;
      position: relative;
      bottom: 60px;
      right: 42%;
    }

    /* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 650px) {
      .col {
        width: 100%;
        margin-top: 0;
      }

      /* hide the vertical line */
      .vl {
        display: none;
      }

      /* show the hidden text on small screens */
      .hide-md-lg {
        display: block;
        text-align: center;
      }
    }
  </style>
</head>

<body>


  <nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">GamingWorld</a>
      </div>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
      </ul>
      
    </div>
  </nav>

  <div class="header">
    <h2>Log In</h2>
  </div>

  <div class="container">
    <form action="recive.php" method="POST">
      <div class="row">
        <div class="vl">
          
        </div>

        <div class="col">
          
        </div>

        <div class="col">
          <div class="hide-md-lg">
           
          </div>
          <input class="uname" type="text" name="username" placeholder="Username" required>
          <input class="pass" type="password" name="password" placeholder="Password" required>
          <input class="button" type="submit" value="Login">
        </div>

      </div>
    </form>
  </div>

  <div class="bottom-container">
    <div class="row">
      <div class="daftar">
        <a href="daftar.php" class="btn">Daftar</a>
      </div>
      
    </div>
  </div>
  </div>
  </div>



</body>

</html>
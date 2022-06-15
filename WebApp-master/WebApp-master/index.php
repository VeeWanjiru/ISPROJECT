<!--
 * File : index.php (Home)
 * Developer : Agney Patel
 * Website : www.agney.vishwasetu.com
 * Copyright © Agney Patel 2016
 -->
<!DOCTYPE html>
<head>
   <title>Home</title>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <!-- <img src='wallpaper.jpg' style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;opacity:0.3;'> -->
   <nav class="white" role="navigation">
      <div class="nav-wrapper container">
         <a id="logo-container" href="index.php" class="brand-logo">Web App</a>
         <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="search.php">Search</a></li>
         </ul>
         <ul id="nav-mobile" class="side-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="search.php">Search</a></li>
         </ul>
         <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
   </nav>
   <img src='wallpaper.jpg' style='top:0px;left:0px;width:100%;height:100%;z-index:-1;'>
      <div class="section">
         <div class="row">
            <div class="col s12 center">
               <h3><i class="mdi-content-send brown-text"></i></h3>
               <h4>FAMA</h4>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="section">
         <div class="row">
            <div class="row">
            <p>This is a sample web application using PHP, MySQL, HTML, CSS, JS with signup, login, search and validation functionality.</p>
         </div>
      </div>
   </div>
   </div>
   <footer class="page-footer teal">
      <div class="container">
         <div class="row">
            <div class="col l6 s12">
               <h5 class="white-text">About</h5>
               <p class="grey-text text-lighten-4">This simple web app collects user data, stores in the database and can retrieve the data according to the user input along with login and logout options.</p>
            </div>
            <div class="col l3 s12">
               <h5 class="white-text">Version</h5>
               <ul>
                  <li><a class="white-text">HTML : 5</a></li>
                  <li><a class="white-text">CSS : 3</a></li>
                  <li><a class="white-text">Javascript : 1.7</a></li>
                  <li><a class="white-text">PHP : 7.0.8</a></li>
                  <li><a class="white-text">MySQL : 5.5.42</a></li>
               </ul>
            </div>
            <div class="col l3 s12">
               <h5 class="white-text">At a glance</h5>
               <ul>
                  <li><a class="white-text">Simplified web page</a></li>
                  <li><a class="white-text">Dynamic web site</a></li>
                  <li><a class="white-text">Responsive Design</a></li>
                  <li><a class="white-text">Built on Macintosh</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="footer-copyright">
         <div class="container">
            Made by <a class="brown-text text-lighten-3" href="http://agney.vishwasetu.com" target="blank">Agney Patel</a>
         </div>
      </div>
   </footer>
   <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script src="js/materialize.js"></script>
   <script src="js/init.js"></script>
</body>
</html>

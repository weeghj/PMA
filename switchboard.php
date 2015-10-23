<?php
  session_start();
  if(isset($_POST['submit'])) {  
        unset($_SESSION['username']);
        // Remove cookie
        setcookie('username', '', 0, "/");
        setcookie('password', '', 0, "/");
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="PMA Switchboard" content="">
    <meta name="Author" content="Xmart IT Consulting">
    <link rel="shortcut icon" href="http://www.elopak.com/resources/layout/icons/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="http://www.elopak.com/resources/layout/icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="http://www.elopak.com/resources/layout/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="http://www.elopak.com/resources/layout/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="http://www.elopak.com/resources/layout/icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="http://www.elopak.com/resources/layout/icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="http://www.elopak.com/resources/layout/icons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="http://www.elopak.com/resources/layout/icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="http://www.elopak.com/resources/layout/icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="http://www.elopak.com/resources/layout/icons/apple-touch-icon-152x152.png" />
    <link rel="icon" href="../../favicon.ico">

    <title>Switchboard - ELOPAK Project Management</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/pma.css" rel="stylesheet">
      
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easyui.min.js"></script>

  </head>

  <body id="application" class="background-dark template-product">

     <div class="row">
         <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/manicon.png" class="img-responsive">
                <div class="caption">
                    <h3>Project Leader</h3>
                    <p>Projects where I'm Responsible</p>
                    <a href="#" class="btn btn-primary" role="button">Open</a>
                </div>
            </div>
         </div>
         <div class="col-2m-6 col-md-4">
             <div class="thumbnail">
                 <img src="images/groupicon.png" class="img-responsive">
                 <div class="caption">
                     <h3>Project Roles</h3>
                     <p>Projects where I'm...</p>
                     <a href="#" class="btn btn-primary" role="button">Button</a>
                 </div>
             </div>
         </div>
         <div class="col-2m-6 col-md-4">
             <div class="thumbnail">
                 <img src="images/meetingicon.png" class="img-responsive">
                 <div class="caption">
                     <h3>Thumbnail label 2</h3>
                     <p>ladieladiela</p>
                     <a href="#" class="btn btn-primary" role="button">Button</a>
                 </div>
             </div>
         </div>

    </div>
      <hr>

      <footer>
        <p>&copy; Xmart IT 2015</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>

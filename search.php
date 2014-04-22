
<!DOCTYPE html>
<html lang="en">
  <head>
  <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="t	ext/javascript"></script>
    <meta charset="utf-8">
    <title>WestMonroe - Lunch - Find</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap-1/css/bootstrap.css" rel="stylesheet">
	 <link href="styles/search.css" rel="stylesheet">
    <link href="bootstrap-1/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand">Fuck West Monroe</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
            <button type="submit" class="btn" href="logout.php">Logout</button>   
            </p>
            <ul class="nav">
	      <li><a href="main.html">Home</a></li>
              <li><a href="find.html">Find</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav" id="sidebar">
            <ul class="nav nav-list">
              <li class="nav-header">Lunch Options</li>
              
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span6">
          <div class="hero-unit">
	
	<p>Use the search bar below to search for a resturant if you know what you want, otherwise head over to the find tab and find a resturant that you would want to eat at </p>	
 
	<div>
            <form class="form-search" action="search.php" method="post">
              <input type="text" class="search-query" name="search">
              <button type="submit" class="btn">Fuck West Monroe</button>
            </form>
            </div>
          </div>
        </div><!--/span-->
           <div class="span3">


        </div>
      </div><!--/row-->
<hr>
      
<footer>
<p>&copy; Fuck West Monroe.</p>
</footer>

</div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-1/js/bootstrap.min.js"></script>
	<script src="sidebar.js"></script>

  </body>
</html>

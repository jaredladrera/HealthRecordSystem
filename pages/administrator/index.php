<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
		<link rel="stylesheet" href="../../css/admin.css">

  </head>
  <body>
		
			<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a href="index.html" class="logo">Health Monitoring</a></h1>
        <ul class="list-unstyled components mb-5">

          <li>
              <a href="index.php?page=dashboard"><span class="fa fa-user mr-3"></span> Dashboard</a>
          </li>
          <li>
            <a href="index.php?page=users"><span class="fa fa-sticky-note mr-3"></span>All Users</a>
          </li>
          <li>
            <a href="index.php?page=patients"><span class="fa fa-sticky-note mr-3"></span> Patient</a>
          </li>
          <li>
            <a href="index.php?page=accountSettings"><span class="fa fa-paper-plane mr-3"></span>Account Settings</a>
          </li>

          <li>
            <a href="../../functions/logout.php"><span class="fa fa-paper-plane mr-3"></span> Logout</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
                  <?php 

                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
  
                             $display = "pages/".$page.'.php';
                        

                        include($display);
                    }else{
                        $page = 'dashboard';
                        $display = "pages/".$page.'.php';
                        include($display);
                    }
                ?>
      </div>
		</div>

    <script src="../../dependency/jquery.min.js"></script>
    <script src="../../dependency/popper.min.js"></script>
    <script src="../../dependency/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="../../javascript/admin.js"></script>
  </body>
</html>
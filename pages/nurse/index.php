<?php 
session_start();
// if(!isset($_SESSION['id']) && !isset($_SESSION['account_type'])) {
//   header("Location: ../../index.php");
// }
include "../../functions/mysqliConnection.php";
$database = new Database;


?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Nurse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
			<link rel="stylesheet" href="../../css/nurse.css">
			<!-- <link rel="stylesheet" href="../../css/chart.css"> -->
      <link rel="stylesheet" href="../../dependency/datatables/datatables.min.css">
      <link rel="stylesheet" href="../../dependency/font-awesome/css/font-awesome.min.css">
    </head>
    <body>
		
      <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
          <div class="p-4 pt-5">
            <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../../images/logo2.jpg);" style="background-color: white;"></a>
            <ul class="list-unstyled components mb-5">
              
              <li>
	              <a href="index.php?page=dashboard">Dashboard </a>
              </li>
              <!-- <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                  <li>
                    <a href="#">Page 1</a>
                  </li>
                <li>
                  <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                  </li>
                </ul>
              </li> -->
	          <li>
              <a href="index.php?page=patient">Patient list</a>
	          </li>
	          <!-- <li>
              <a href="#">Announcement</a>
	          </li> -->
	          <li>
              <a href="index.php?page=accountSettings">Account Settings</a>
	          </li>
	        </ul>
          
	        <div class="footer">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>
          

          
	      </div>
    	</nav>
      
      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                  <li class="nav-item ">
                    <a href="../../functions/logout.php" class="btn btn-danger btn-sm">Logout</a>
                  </li>
                  
                </ul>
            </div>
          </div>
        </nav>
        
        <!-- Content here -->
        
        
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
    <script src="../../dependency/datatables/datatables.min.js"></script>
    <script src="../../javascript/nurse.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.3/lottie.min.js"></script>
    <script src="../../dependency/alert/js/alt-alert.js"></script>
  </body>
</html>

<script>
$(document).ready(function() {
  //patient.php table
  $('#patientTable').DataTable();
  $.ajax({
    url: "http://localhost/HealthRecordSystem/functions/chart_data.php",
    method: "GET",
    success: function(data) {

var ctx = document.getElementById('myChart').getContext('2d');


var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',
    backgroundColor: 'rgba(0, 0, 0, 0.1)',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: 'Total ',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [data.jan, data.feb, data.march, data.apr, data.may, data.june, data.july, data.aug, data.sept, data.oct, data.nov, data.dec],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
              ],
              borderWidth: 3
        }]
    },

});

    },
    error: function(data) {
        console.log(data);
    }
})

}); // end of onready


</script>
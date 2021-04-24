<?php
include_once "../../functions/mysqliConnection.php";
$database = new Database;
session_start();
if(!isset($_SESSION['id']) && !isset($_SESSION['account_type'])) {
  header("Location: ../../index.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Administrator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
		<link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/chart.css">
      <link rel="stylesheet" href="../../dependency/datatables/datatables.min.css">
      <link rel="stylesheet" href="../../dependency/font-awesome/css/font-awesome.min.css">

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
	  		<h1><a href="index.php?page=dashboard" class="logo">Health Monitoring</a></h1>
        <ul class="list-unstyled components mb-5">

          <li>
              <a href="index.php?page=dashboard"><span class="fa fa-user mr-3"></span> Dashboard</a>
          </li>
          <li>
            <a href="index.php?page=users"><span class="fa fa-users mr-3"></span>All Users</a>
          </li>
          <li>
            <a href="index.php?page=patients"><span class="fa fa-sticky-note mr-3"></span> Patient</a>
          </li>
          <li>
            <a href="index.php?page=logs"><span class="fa fa-sign-in mr-3" ></span> Logs</a>
          </li>
          <li>
            <a href="index.php?page=accountSettings"><span class="fa fa-cog mr-3"></span>Account Settings</a>
          </li>

          <li>
            <a href="../../functions/logout.php"><i class="fa fa-power-off mr-3" ></i> Logout</a>
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
    <script src="../../dependency/datatables/datatables.min.js"></script>
    <script src="../../javascript/admin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.3/lottie.min.js"></script>
    <script src="../../dependency/alert/js/alt-alert.js"></script>
  </body>
</html>
<script>
// for user.php page table
$(document).ready(function() {
  $('.userTable').DataTable();
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
    options:{
      legend: {
      display: false
    }  
    }
});

    },
    error: function(data) {
        console.log(data);
    }
})

}); // end of onready


// function graphClickEvent(event, array){
//     alert("hello");
// }

(function($) {

"use strict";

var fullHeight = function() {

  $('.js-fullheight').css('height', $(window).height());
  $(window).resize(function(){
    $('.js-fullheight').css('height', $(window).height());
  });

};
fullHeight();

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

})(jQuery);


$(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
    input.attr("type", "text");
    } else {
    input.attr("type", "password");
}
});


</script>
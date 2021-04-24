

<div class="container">
    <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-plus-square"></i>
        <span class="count-numbers">
        <!-- this is for total patient -->
        <?php $sql = $database->conn->query("SELECT COUNT(id) as total FROM patients"); ?>
        <?php $data = $sql->fetch_array(); ?>
        <?php echo $data['total']; ?>
        </span>
        <span class="count-name">Total Patients</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-thermometer-full"></i>
        <span class="count-numbers">
        <!-- this is for total major patient -->
        <?php $sql = $database->conn->query("SELECT COUNT(id) as total FROM patients WHERE issue_status = 'major'"); ?>
        <?php $data = $sql->fetch_array(); ?>
        <?php echo $data['total']; ?>
        </span>
        <span class="count-name">Serious Issues</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-thermometer-half"></i>
        <span class="count-numbers">
        <!-- this is for total minor patient -->
        <?php $sql = $database->conn->query("SELECT COUNT(id) as total FROM patients WHERE issue_status = 'minor'"); ?>
        <?php $data = $sql->fetch_array(); ?>
        <?php echo $data['total']; ?>
        </span>
        <span class="count-name">Minor Issues</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <span class="count-numbers">
        <!-- this is for total minor patient -->
        <?php $sql = $database->conn->query("SELECT COUNT(id) as total FROM accountinformation "); ?>
        <?php $data = $sql->fetch_array(); ?>
        <?php echo $data['total']; ?>
        </span>
        <span class="count-name">System Users</span>
      </div>
    </div>
  </div>
<div class="row">

<?php 
 $currentYear = date("Y");

  $january_minor = $database->conn->query("SELECT COUNT(id) as jan_minor FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 01 AND issue_status='minor'");
  $january_major = $database->conn->query("SELECT COUNT(id) as jan_major FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 01 AND issue_status='major'");
  $jan_minor = $january_minor->fetch_array();
  $jan_major = $january_major->fetch_array();

  $february_minor = $database->conn->query("SELECT COUNT(id) as feb_minor FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 02 AND issue_status='minor'");
  $february_major = $database->conn->query("SELECT COUNT(id) as feb_major FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 02 AND issue_status='major'");
  $feb_minor = $february_minor->fetch_array();
  $feb_major = $february_major->fetch_array();

  $march_minor = $database->conn->query("SELECT COUNT(id) as mar_minor FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 03 AND issue_status='minor'");
  $march_major = $database->conn->query("SELECT COUNT(id) as mar_major FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 03 AND issue_status='major'");
  $mar_minor = $march_minor->fetch_array();
  $mar_major = $march_major->fetch_array();

  $april_minor = $database->conn->query("SELECT COUNT(id) as apr_minor FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 04 AND issue_status='minor'");
  $april_major = $database->conn->query("SELECT COUNT(id) as apr_major FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 04 AND issue_status='major'");
  $apr_minor = $april_minor->fetch_array();
  $apr_major = $april_major->fetch_array();

  $mayo_minor = $database->conn->query("SELECT COUNT(id) as may_minor FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 05 AND issue_status='minor'");
  $mayo_major = $database->conn->query("SELECT COUNT(id) as may_major FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 05 AND issue_status='major'");
  $may_minor = $mayo_minor->fetch_array();
  $may_major = $mayo_major->fetch_array();

  $june_minor = $database->conn->query("SELECT COUNT(id) as jun_minor FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 06 AND issue_status='minor'");
  $june_major = $database->conn->query("SELECT COUNT(id) as jun_major FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 06 AND issue_status='major'");
  $jun_minor = $june_minor->fetch_array();
  $jun_major = $june_major->fetch_array();

  $july_minor = $database->conn->query("SELECT COUNT(id) as jul_minor FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 07 AND issue_status='minor'");
  $july_major = $database->conn->query("SELECT COUNT(id) as jul_major FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 07 AND issue_status='major'");
  $jul_minor = $july_minor->fetch_array();
  $jul_major = $july_major->fetch_array();

  $august_minor = $database->conn->query("SELECT COUNT(id) as aug_minor FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 08 AND issue_status='minor'");
  $august_major = $database->conn->query("SELECT COUNT(id) as aug_major FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 08 AND issue_status='major'");
  $aug_minor = $august_minor->fetch_array();
  $aug_major = $august_major->fetch_array();

  $april_minor = $database->conn->query("SELECT COUNT(id) as apr_minor FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 04 AND issue_status='minor'");
  $april_major = $database->conn->query("SELECT COUNT(id) as apr_major FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 04 AND issue_status='major'");
  $apr_minor = $april_minor->fetch_array();
  $apr_major = $april_major->fetch_array();

  $mayo_minor = $database->conn->query("SELECT COUNT(id) as may_minor FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 05 AND issue_status='minor'");
  $mayo_major = $database->conn->query("SELECT COUNT(id) as may_major FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 05 AND issue_status='major'");
  $may_minor = $mayo_minor->fetch_array();
  $may_major = $mayo_major->fetch_array();

  
  $september_minor = $database->conn->query("SELECT COUNT(id) as sept_minor FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 09 AND issue_status='minor'");
  $september_major = $database->conn->query("SELECT COUNT(id) as sept_major FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 09 AND issue_status='major'");
  $sept_minor = $september_minor->fetch_array();
  $sept_major = $september_major->fetch_array();
  
  $october_minor = $database->conn->query("SELECT COUNT(id) as oct_minor FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 10 AND issue_status='minor'");
  $october_major = $database->conn->query("SELECT COUNT(id) as oct_major FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 10 AND issue_status='major'");
  $oct_minor = $october_minor->fetch_array();
  $oct_major = $october_major->fetch_array();

  $november_minor = $database->conn->query("SELECT COUNT(id) as nov_minor FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 11 AND issue_status='minor'");
  $november_major = $database->conn->query("SELECT COUNT(id) as nov_major FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 11 AND issue_status='major'");
  $nov_minor = $november_minor->fetch_array();
  $nov_major = $november_major->fetch_array();

  $december_minor = $database->conn->query("SELECT COUNT(id) as dec_minor FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 12 AND issue_status='minor'");
  $december_major = $database->conn->query("SELECT COUNT(id) as dec_major FROM patients WHERE YEAR(date_issue) = '$currentYear' AND MONTH(date_issue) = 12 AND issue_status='major'");
  $dec_minor = $december_minor->fetch_array();
  $dec_major = $december_major->fetch_array();


?>

<div class="container-fluid mt-4">
<!-- Large modal -->
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-lg">Summary Report</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Status Summary Reports</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">

        <table class="table table-dark table-hover">
            <thead>
              <tr>
                <th scope="col">Month</th>
                <th scope="col">Minor</th>
                <th scope="col">Major</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>January</td>
                <th ><?php echo $jan_minor['jan_minor']; ?></th>
                <th ><?php echo $jan_major['jan_major']; ?></th>
              </tr>
              <tr>
                <td>February</td>
                <th ><?php echo $feb_minor['feb_minor']; ?></th>
                <th ><?php echo $feb_major['feb_major']; ?></th>
              </tr>
              <tr>
                <td>March</td>
                <th ><?php echo $mar_minor['mar_minor']; ?></th>
                <th ><?php echo $mar_major['mar_major']; ?></th>
              </tr>
              <tr>
                <td>April</td>
                <th ><?php echo $apr_minor['apr_minor']; ?></th>
                <th ><?php echo $apr_major['apr_major']; ?></th>
              </tr>
              <tr>
                <th >May</th>
                <th ><?php echo $may_minor['may_minor']; ?></th>
                <th ><?php echo $may_major['may_major']; ?></th>
              </tr>
              <tr>
                <th >June</th>
                <th ><?php echo $jun_minor['jun_minor']; ?></th>
                <th ><?php echo $jun_major['jun_major']; ?></th>
              </tr>
              <tr>
                <th >July</th>
                <th ><?php echo $jul_minor['jul_minor']; ?></th>
                <th ><?php echo $jul_major['jul_major']; ?></th>
              </tr>
              <tr>
                <th >August</th>
                <th ><?php echo $aug_minor['aug_minor']; ?></th>
                <th ><?php echo $aug_major['aug_major']; ?></th>
              </tr>
              <tr>
                <th >September</th>
                <th ><?php echo $sept_minor['sept_minor']; ?></th>
                <th ><?php echo $sept_major['sept_major']; ?></th>
              </tr>
              <tr>
                <th >October</th>
                <th ><?php echo $oct_minor['oct_minor']; ?></th>
                <th ><?php echo $oct_major['oct_major']; ?></th>
              </tr>
              <tr>
                <th >November</th>
                <th ><?php echo $nov_minor['nov_minor']; ?></th>
                <th ><?php echo $nov_major['nov_major']; ?></th>
              </tr>
              <tr>
                <th >December</th>
                <th ><?php echo $dec_minor['dec_minor']; ?></th>
                <th ><?php echo $dec_major['dec_major']; ?></th>
              </tr>
             
            </tbody>
          </table>

        </div>

    </div>
  </div>
</div>



        <canvas id="myChart"></canvas>
       

</div>
</div>

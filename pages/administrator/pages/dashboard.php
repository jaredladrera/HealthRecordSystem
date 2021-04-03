<div class="container">
    <div class="row justify-content-center">
        <img src="../../images/bsulogo.png" alt="" srcset="">
    </div>

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



        <canvas id="myChart"></canvas>
       

</div>
</div>
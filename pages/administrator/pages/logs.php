<?php
$log_id = $_SESSION['logs_id'];
$sql = $database->conn->query("SELECT * FROM logs WHERE id != '$log_id'");
?>
<style>
.form-control {
    border: 1px solid black;
}
.form-group span {
    color: red;
}
</style>
<div class="container">

<table class="table" id="patientTable" style="margin-top: 4rem;">
  <thead class="thead-light">
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Date In</th>
      <th scope="col">Time In</th>
      <th scope="col">Date Out</th>
      <th scope="col">Time Out</th>
      <th scope="col">Status</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
  <?php while($row = $sql->fetch_array()): ?>
      <tr>
      <td><?php echo $row['login_username']; ?></td>
      <td><?php echo $row['date_in']; ?></td>
      <td><?php echo $row['time_in']; ?></td>
      <td><?php echo $row['date_out']; ?></td>
      <td><?php echo $row['time_out']; ?></td>
      <td><?php echo $row['date_out'] && $row['time_out'] ? "<span class='badge badge-secondary'>Offline</span>" : "<span class='badge badge-success'>Online</span>" ; ?></td>
 
      <td>
        <button class="btn btn-danger" onclick="deleteLogs(<?php echo $row['id']; ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
      </td>
      </tr>
    <?php endwhile; ?>

    
  </tbody>
</table>

 


<br>

<div class="row">
    <h2 class="text-center">Notice</h2>
    <p>This system is a property of Batangas State University. Any unauthorized used of this system outside the 
    campus can be punishable under Republic Act No. 8293 or the Philippine Copyright Law.
    All Rights Reserved 2021.</p>
</div>

</div>
<script>

function deleteLogs(id) {
 
    Alt.alternative({
  status:'question',        
  showConfirmButton:true,
  showCancelButton: true,
  stop:true,
  title:'Are You Sure?',
  text:'Your data will be lost!'})
  .then((res) => {
    Alt.alternative({
      status:'loading'
    });
    if (res) {
    $.ajax({ 
        url: '../../functions/fetchAjax.php',
         method: 'post',
        dataType: 'text',
         data: {
            key: 'deleteLogs',
            id: id
         }, success: function(response){
              setTimeout(() => {
                Alt.alternative({
                  status:'success'
                })
                location.reload();
              },2000)
        }
    
    });



 
    }
})
}


</script>

<?php 
$sql = $database->conn->query("SELECT * FROM accountinformation");

?>

<div class="container">

<table class="table userTable" style="margin-top: 3rem;">
  <thead class="thead-light">
    <tr>
      <th scope="col">Fullname</th>
      <th scope="col">Last</th>
      <th scope="col">ID Number</th>
      <th scope="col">Accoun Status</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
      <?php while($row = $sql->fetch_array()):?>
        <tr>

          <td id="id_<?php echo $row['id']; ?>"><?php echo $row['name']." ".$row['lastname']; ?></td>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['id_number']; ?></td>
          <td><?php echo $row['account_status']; ?></td>
          <td>
          <button type="button" class="btn btn-info" onclick="modalOpenForAccountUpdate(<?php echo $row['id']; ?>)">
            Change Status
          </button>
            <button class="btn btn-danger" onclick="deleteAccount(<?php echo $row['id']; ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
          </td>

        </tr>
      <?php endwhile; ?>

     
    
  </tbody>
</table>

<div class="modal fade" id="accountStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">

            <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
      
            <div class="form-group">
              <label for=""><b>Update Account Status</b></label>
              <input type="hidden" id="userId">
              <select class="form-control" id="status" style="border:1px solid black">
                <option value="user">User</option>
                <option value="nurse">Nurse</option>
                <option value="admin">Administrator</option>

              </select>
              <p class="text-center mt-2 text-success" style="font-weight:bold;" id="statusMessage"></p>
            </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" onclick="updateAccountStatus()">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


</div>
<script>

function updateAccountStatus() {
  let status = document.getElementById('status').value;
  let accountId = document.getElementById('userId').value;

  $.ajax({ 
    url: '../../functions/fetchAjax.php',
    method: 'post',
    dataType: 'text',
    data: {
      key: 'updateAccountStatus',
      status: status,
      id: accountId
    }, success: function(response) {
        document.getElementById("statusMessage").innerHTML = "Please wait...";
        
        setTimeout(function(){ location.reload(); }, 2000);
    }
  })

} 

function modalOpenForAccountUpdate(id) {

    $('#accountStatus').modal('show');
    $('#userId').val(id);
}

function deleteAccount(id) {
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
        key: 'deleteAccount',
        id: id
      }, success: function(response) {
          $('#id_'+id).parent().remove();
      }
    })
 
    }
})
} //end function


</script>


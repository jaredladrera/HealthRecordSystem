<?php
$sql = $database->conn->query("SELECT * FROM patients");
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
      <th scope="col">Fullname</th>
      <th scope="col">Contact #</th>
      <th scope="col">ID Number</th>
      <th scope="col">Issue</th>
      <th scope="col">Status</th>
      <th scope="col">Operations</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = $sql->fetch_array()): ?>
      <tr>
      <td><?php echo $row['name']." ".$row['lastname']; ?></td>
      <td><?php echo $row['contact_number']; ?></td>
      <td><?php echo $row['id_number']; ?></td>
      <td><?php echo $row['issue']; ?></td>
      <td><?php echo $row['issue_status'] == 'major' ? '<span class="badge badge-danger">'.$row['issue_status'].'</span>': '<span class="badge badge-primary">'.$row['issue_status'].'</span>'; ?></td>
      <td>


        <button class="btn btn-primary" onclick="patientDetails(<?php echo $row['id']; ?>)"><i class="fa fa-info-circle" aria-hidden="true"></i></button>
        <button class="btn btn-danger" onclick="deletePatient(<?php echo $row['id']; ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
 
      </td>
      <td>
        <div class="form-group">
            <select class="form-control" onchange="requestPrint(<?php echo $row['id']; ?>)" id="printRequest">
            <option value="" disabled selected>PDF File</option>
            <option value="only"><a href="google.com"> Print only</a></option>
            <option value="all"><a href="#"> Print all</a></option>
            </select>
        </div>
      </td>
      </tr>
    <?php endwhile; ?>

    
  </tbody>
</table>

   <!-- The Modal -->
   <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title" id="modalTitle"></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">

            <div class="container-fluid">

                <div class="row">
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="name">Name <span>*</span></label>
                            <input type="text" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="lastname">Lastname <span>*</span></label>
                            <input type="text" id="lastname"  class="form-control">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="id_number">ID Number <span>*</span></label>
                            <input type="text" id="id_number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="issue">Issue / Problem <span>*</span></label>
                            <input type="text" id="issue" class="form-control">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="contact_number">Contact Number <span>*</span></label>
                            <input type="text" id="contact_number" class="form-control">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="age">Age <span>*</span></label>
                            <input type="text" id="age" class="form-control">
                        </div>
                    </div>
                </div>                
                <div class="row">
                    <div class="col col-md-4">
                    <div class="form-group">
                        <label for="gender">Gender <span>*</span></label>
                        <select class="form-control" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="guardian">Guardian's Full Name <span>*</span></label>
                            <input type="text" id="guardian" class="form-control">
                        </div>
                    </div>
                    <div class="col col-md-4">
                    <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-md-4">
                        <div class="form-group">
                                <label for="parent_conact">Parent's Contact Number</label>
                                <input type="text" id="parent_contact" class="form-control">
                            </div>
                    </div>
                    <div class="col col-md-4">
                    <div class="form-group">
                            <label for="date_issue">Date</label>
                            <input type="date" id="date_issue" class="form-control">
                        </div>
                    </div>
                    <div class="col col-md-4">
                    <div class="form-group">
                            <label for="time_issue">Time</label>
                            <input type="time" id="time_issue" class="form-control">
                            <p id="timeDetails" style="font-weight: bolder;"></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-md-4">
 
                    <div class="form-group">
                        <label for="issue_status">Status <span>*</span></label>
                        <select class="form-control" id="issue_status">
                            <option value="minor">Minor</option>
                            <option value="major">Major</option>
                        </select>
                    </div>
  
                    </div>
                    <div class="col col-md-8">
                    <div class="form-group">
                        <label for="note">Notes</label>
                        <textarea class="form-control" id="notes" rows="3"></textarea>
                    </div>
                    </div>
     
                </div>

            </div>
                <input type="hidden" id="patientID">

            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <button  class="btn btn-secondary" id="savePatientsBtn" onclick="savePatients()" >Save</button>
            <button  class="btn btn-secondary" id="updatePatientsBtn" onclick="updatePatients()" >Update</button>
       
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
        </div>
    </div> 
    <!-- End modal -->


<br>

<div class="row">
    <h2 class="text-center">Notice</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit doloremque ratione placeat sapiente eaque consequatur animi culpa, perspiciatis fuga veniam error, aliquid ipsum, sequi accusamus! Aut expedita laudantium, neque nemo adipisci ratione tempora doloremque, voluptates nihil sapiente ut corporis iure libero recusandae, repudiandae quas corrupti! Tempora impedit eius error neque! Maiores rem dolores magnam quia mollitia cumque esse corporis labore, veritatis eum vel, explicabo velit. Nihil, veniam ex explicabo obcaecati beatae accusamus, adipisci ad facere iste molestias id perspiciatis eveniet sequi repudiandae tempora amet labore consectetur ullam fuga voluptatum nesciunt magnam? Fuga quas est cupiditate! Possimus repellat cumque ipsum voluptates.</p>
</div>

</div>
<script>

function patientDetails(id) {
    $.ajax({ 
         url: '../../functions/fetchAjax.php',
         method: 'post',
         dataType: 'json',
         data: {
             key: 'getUpdatingData',
             id: id
         }, success: function(response){
    
             $('#name').val(response.name);
             $('#lastname').val(response.lastname);
             $('#id_number').val(response.id_number);
             $('#issue').val(response.issue);
             $('#contact_number').val(response.contact_number);
             $('#age').val(response.age);
             $('#gender').val(response.gender);
             $('#guardian').val(response.guardian);
             $('#issue_status').val(response.issue_status);
             $('#parent_contact').val(response.parent_contact);
             $('#notes').val(response.note);
             $('#address').val(response.address);
             $('#patientID').val(response.id);
             document.getElementById("date_issue").value = response.date_issue;
             document.getElementById("timeDetails").innerHTML = response.time_issue;

             console.log(response.time_issue)
    
             document.getElementById('modalTitle').innerHTML = 'Update Patient';
             document.getElementById("savePatientsBtn").style.display = "none";
             document.getElementById("updatePatientsBtn").style.display = "";
             $('#myModal').modal('show');
         }
    
    });

           
} // end function

function deletePatient(id) {

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
            key: 'deletePatient',
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

} // end function

function updatePatients() {
  let name = $('#name').val();
  let lastname = $('#lastname').val();
  let id_number = $('#id_number').val();
  let issue = $('#issue').val();
  let contact_number = $('#contact_number').val();
  let age = $('#age').val();
  let gender = $('#gender').val();
  let guardian = $('#guardian').val();
  let issue_status = $('#issue_status').val();
  let parent_contact = $('#parent_contact').val();
  let note = $('#notes').val();
  let address = $('#address').val();
  let id = $('#patientID').val();
  let date_issue = $('#date_issue').val();
  let timeDetails = document.getElementById('time_issue').value === '' ? document.getElementById('timeDetails').innerText : getFullTime();

  if(name == '' || lastname == '' || id_number == '' || issue == '' || contact_number == '' || address == '') {
    Alt.alternative({
    status:'warning',
    showConfirmButton:false,
    title:'Incompelte Credentials!',
    text:'Please complete all fields before you save!'
    })
  } else {
  $.ajax({ 
                    url: '../../functions/fetchAjax.php',
                    method: 'post',
                    dataType: 'text',
                    data: {
                        key: 'updatePatient',
                        id: id,
                        name: name,
                        lastname: lastname,
                        address: address,
                        contact_number: contact_number,
                        gender: gender,
                        age: age,
                        id_number: id_number,
                        guardian: guardian,
                        issue_status: issue_status,
                        issue: issue,
                        note: note,
                        parent_contact: parent_contact,
                        date_issue: date_issue,
                        time_issue: timeDetails
                    }, success: function(response){
                        Alt.alternative({
                        status:'success',
                        title:'Success',
                        text: response
                        }).then((res) => {
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        });
                    }
    
    });

  }
} //end

function requestPrint(id) {
  var request = document.getElementById("printRequest").value;

    $.ajax({ 
            url: '../../forms/clearance.php',
            method: 'post',
            dataType: 'text',
            data: {
                id: id,
                request: request
            }, success: function(response){
                window.open("../../forms/clearance.php");
            }
    
    });

 
}




</script>

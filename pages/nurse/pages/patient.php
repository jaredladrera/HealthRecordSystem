<?php
$sql = $database->conn->query("SELECT * FROM patients");
?>

<style>
span {
    color: red;
}
</style>
<div class="container">
    <div class="row" style="margin-bottom:2rem;">
    <div class="col col-md-12">
    <button type="button" class="btn btn-info float-right" onclick="openModalSaving()">
        New Patient
    </button>

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

                        <div class="form-group">
                            <label for="medecine">Medecine Take</label>
                            <input type="text" id="medecine" class="form-control" >
                        </div>
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
    </div>
    </div>

<!-- table can't render perfectly in row division  -->



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
      </td>
      <td>
        <div class="form-group">
            <select class="form-control" onchange="requestPrint(<?php echo $row['id']; ?>, this.value)" id="printRequest">
            <option value="" disabled selected>PDF File</option>
            <option value="only">Print only</option>
            <option value="all"> Print all</option>
            </select>
        </div>
      </td>
      </tr>
    <?php endwhile; ?>

    
  </tbody>
</table>



<div class="row">
    <h2 class="text-center">Notice</h2>
    <p>This system is a property of Batangas State University. Any unauthorized used of this system outside the 
campus can be punishable under Republic Act No. 8293 or the Philippine Copyright Law.
All Rights Reserved 2021.</p>
</div>

</div>

<script>    
$(document).ready(function() {
    
    $('#patientTable').DataTable();
});


function getFullTime() {
  let timeInput = document.getElementById('time_issue');
  var timeSplit = timeInput.value.split(':'),
    hours,
    minutes,
    meridian;
  hours = timeSplit[0];
  minutes = timeSplit[1];
  if (hours > 12) {
    meridian = 'PM';
    hours -= 12;
  } else if (hours < 12) {
    meridian = 'AM';
    if (hours == 0) {
      hours = 12;
    }
  } else {
    meridian = 'PM';
  }
  return hours + ':' + minutes + ' ' + meridian;
}

function openModalSaving() {
     $('#name').val("");
     $('#lastname').val("");
     $('#id_number').val("");
     $('#issue').val("");
     $('#contact_number').val("");
     $('#age').val("");
     $('#gender').val("");
     $('#guardian').val("");
     $('#issue_status').val("");
     $('#parent_contact').val("");
     $('#notes').val("");
     $('#address').val("");
     $('#patientID').val("");
     $('#time_issue').val("");
     $('#date_issue').val("");
     document.getElementById('timeDetails').innerHTML = '';
    document.getElementById('modalTitle').innerHTML = 'New Patient';
    document.getElementById("savePatientsBtn").style.display = "";
    document.getElementById("updatePatientsBtn").style.display = "none";
    $('#myModal').modal('show');
}


function savePatients() {

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
  let medecine = $('#medecine').val();
  let date_issue = $('#date_issue').val();

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
                        key: 'save_patient',
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
                        medecine: medecine,
                        time_issue: getFullTime()
                    }, success: function(response){
            
                        Alt.alternative({
                        status:'success',
                        title:'Success',
                        text: response
                        }).then((res) => {
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        })

                    }
    
                });

  }


 
} // end function

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

             document.getElementById('modalTitle').innerHTML = 'Update Patient';
             document.getElementById("savePatientsBtn").style.display = "none";
             document.getElementById("updatePatientsBtn").style.display = "";
             $('#myModal').modal('show');
            var fetch_time = response.time_issue;
            var split_time = fetch_time.split(" ");
            console.log(split_time[0]);
             var time = response.time_issue;
            var hours = Number(time.match(/^(\d+)/)[1]);
            var minutes = Number(time.match(/:(\d+)/)[1]);
            var AMPM = time.match(/\s(.*)$/)[1];
            if(AMPM == "PM" && hours<12) hours = hours+12;
            if(AMPM == "AM" && hours==12) hours = hours-12;
            var sHours = hours.toString();
            var sMinutes = minutes.toString();
            if(hours<10) sHours = "0" + sHours;
            if(minutes<10) sMinutes = "0" + sMinutes;
            document.getElementById("time_issue").value = sHours + ":" + sMinutes;
         }
    
    });

           
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

function requestPrint(id, val) {
  var request = document.getElementById("printRequest").value;


    window.open("../../forms/clearance.php?id="+id+"&request="+val);


 
}



</script>

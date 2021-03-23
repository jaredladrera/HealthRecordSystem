<style>
span {
    color: red;
}
</style>
<div class="container">
    <div class="row" style="margin-bottom:2rem;">
    <div class="col col-md-12">
    <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#myModal">
        New Patient
    </button>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">New Patient</h4>
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
                            <label for="mother">Mother's Full Name <span>*</span></label>
                            <input type="text" id="mother" class="form-control">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="father">Father's Full Name <span>*</span></label>
                            <input type="text" id="father" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-4">
                    <div class="form-group">
                            <label for="parent_conact">Parent's Contact Number</label>
                            <input type="text" id="parent_contact" class="form-control">
                        </div>
                    <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control">
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


            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <button  class="btn btn-secondary" onclick="savePatients()" >Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
        </div>
    </div>

    </div>
    </div>

<!-- table can't render perfectly in row division  -->
<table class="table" id="patientTable" style="margin-top: 4rem;">
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

      <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      </tr>

    
  </tbody>
</table>


<div class="row">
    <h2 class="text-center">Notice</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit doloremque ratione placeat sapiente eaque consequatur animi culpa, perspiciatis fuga veniam error, aliquid ipsum, sequi accusamus! Aut expedita laudantium, neque nemo adipisci ratione tempora doloremque, voluptates nihil sapiente ut corporis iure libero recusandae, repudiandae quas corrupti! Tempora impedit eius error neque! Maiores rem dolores magnam quia mollitia cumque esse corporis labore, veritatis eum vel, explicabo velit. Nihil, veniam ex explicabo obcaecati beatae accusamus, adipisci ad facere iste molestias id perspiciatis eveniet sequi repudiandae tempora amet labore consectetur ullam fuga voluptatum nesciunt magnam? Fuga quas est cupiditate! Possimus repellat cumque ipsum voluptates.</p>
</div>

</div>

<script>
$(document).ready(function() {
    $('#patientTable').DataTable();
});


function savePatients() {

  let name = $('#name').val();
  let lastname = $('#lastname').val();
  let id_number = $('#id_number').val();
  let issue = $('#issue').val();
  let contact_number = $('#contact_number').val();
  let age = $('#age').val();
  let gender = $('#gender').val();
//   let mother = $('#mother').val();
//   let father = $('#father').val();
  let parent_contact = $('#parent_contact').val();
  let note = $('#note').val();
  let address = $('#address').val();

  if(name == '' || lastname == '' || id_number == '' || issue == '' || contact_number == '' || address == '') {
    alert('Incomplete credentials');
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
                        // mother: mother,
                        // father: father,
                        issue: issue,
                        note: note,
                        parent_contact: parent_contact
                    }, success: function(response){
                        alert(response);
                        
                    }
    
                });

  }


 
}

</script>

<div class="container">
    <div class="row">
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
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" id="lastname"  class="form-control">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="id_number">ID Number</label>
                            <input type="text" id="id_number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="issue">Issue / Problem</label>
                            <input type="text" id="issue" class="form-control">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="contact_number">Contact Number</label>
                            <input type="text" id="contact_number" class="form-control">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="text" id="age" class="form-control">
                        </div>
                    </div>
                </div>                
                <div class="row">
                    <div class="col col-md-4">
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="mother">Mother's Full Name</label>
                            <input type="text" id="mother" class="form-control">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="father">Father's Full Name</label>
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
            <button  class="btn btn-secondary" >Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
        </div>
    </div>

    </div>
    </div>
<div class="row">
    <table class="table" id="patientTable" style="margin-top: 3rem;">
    <thead class="thead-light">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Full Name</th>
        <th scope="col">Issue</th>
        <th scope="col">ID Number</th>
        <th scope="col">Operations</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Fever</td>
        <td>@mdo</td>
        <td>
            <button class="btn btn-info">Document</button>
            <button class="btn btn-primary">Details</button>
            <button class="btn btn-danger">Delete</button>
        </td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>toothache</td>
        <td>@fat</td>
        <td>
            <button class="btn btn-info">Document</button>
            <button class="btn btn-primary">Details</button>
            <button class="btn btn-danger">Delete</button>
        </td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>headache</td>
        <td>@twitter</td>
        <td>
            <button class="btn btn-info">Document</button>
            <button class="btn btn-primary">Details</button>
            <button class="btn btn-danger">Delete</button>
        </td>
        </tr>
    </tbody>
    </table>
</div><br>

<div class="row">
    <h2 class="text-center">Notice</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit doloremque ratione placeat sapiente eaque consequatur animi culpa, perspiciatis fuga veniam error, aliquid ipsum, sequi accusamus! Aut expedita laudantium, neque nemo adipisci ratione tempora doloremque, voluptates nihil sapiente ut corporis iure libero recusandae, repudiandae quas corrupti! Tempora impedit eius error neque! Maiores rem dolores magnam quia mollitia cumque esse corporis labore, veritatis eum vel, explicabo velit. Nihil, veniam ex explicabo obcaecati beatae accusamus, adipisci ad facere iste molestias id perspiciatis eveniet sequi repudiandae tempora amet labore consectetur ullam fuga voluptatum nesciunt magnam? Fuga quas est cupiditate! Possimus repellat cumque ipsum voluptates.</p>
</div>

</div>

<script>
$( document ).ready(function() {
    $('#patientTable').DataTable();
});
</script>

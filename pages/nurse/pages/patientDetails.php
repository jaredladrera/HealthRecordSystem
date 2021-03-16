<style>
  .form-control {
      border: 1px solid black;
  }
  h2{
    font-weight: bold;
  }

  .container {
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px #888888;
  }

</style>
<div class="container" style=" margin-top: 3rem;">
 
    <h2 class="text-center mt-3 mb-3" >Patient Details <?php echo $_SESSION['id']; ?> </h2>

    <div class="row justify-content-center">
        <div class="col col-md-3">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" >
            </div>
        </div>
        <div class="col col-md-3">
            <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" id="lastname" class="form-control">
            </div>
        </div>
        <div class="col col-md-3">
            <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" class="form-control">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-md-3">
            <div class="form-group">
                    <label for="issue">Issue</label>
                    <input type="text" id="issue" class="form-control">
            </div>
        </div>
        <div class="col col-md-3">
            <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" id="age" class="form-control">
            </div>
        </div>
        <div class="col col-md-3">
        <div class="form-group">
                        <label for="gender">Gender <span>*</span></label>
                        <select class="form-control" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-md-3">
            <div class="form-group">
                <label for="mother">Mother</label>
                <input type="text" id="mother" class="form-control">
            </div>
        </div>
        <div class="col col-md-3">
                <div class="form-group">
                        <label for="father">Father</label>
                        <input type="text" id="father" class="form-control">
                </div>
        </div>
        <div class="col col-md-3">
                <div class="form-group">
                        <label for="contact">Contact Number</label>
                        <input type="text" id="contactNumber" class="form-control">
                </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-md-3">
            <div class="form-group">
                <label for="idNumber">ID Number</label>
                <input type="text" id="idNumber" class="form-control">
            </div>
                <div class="form-group">
                        <label for="parent_contact">Parent's contact number</label>
                        <input type="text" id="parent_contact" class="form-control">
                </div>
        </div>
        <div class="col col-md-6">
        <div class="form-group">
                        <label for="note">Notes</label>
                        <textarea class="form-control" id="notes" rows="3"></textarea>
        </div>
        </div>

    </div>

    <div class="row mb-5 mt-3 justify-content-center">
        <button class="btn btn-primary mr-2">Save Changes</button>
    </div>

</div>

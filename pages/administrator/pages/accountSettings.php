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
<div class="container" style="border: 1px solid black; border-radius: 20px; margin-top: 3rem;">
 
    <h2 class="text-center mt-3 mb-3" >Account Settings</h2>

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
                    <label for="middlename">Middle Name</label>
                    <input type="text" id="middleName" class="form-control">
            </div>
        </div>
        <div class="col col-md-3">
            <div class="form-group">
                    <label for="gender">Age</label>
                    <input type="text" id="gender" class="form-control">
            </div>
        </div>
        <div class="col col-md-3">
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="text" id="gender" class="form-control">
                </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-md-3">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" class="form-control">
            </div>
        </div>
        <div class="col col-md-3">
                <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" id="password" class="form-control">
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
        </div>
        <div class="col col-md-3">
                <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" class="form-control">
                </div>
        </div>
        <div class="col col-md-3">

        </div>
    </div>

    <div class="row mb-5 mt-3 justify-content-center">
        <button class="btn btn-primary mr-2">Save Changes</button>
        <button class="btn btn-danger">Reset</button>
    </div>

</div>

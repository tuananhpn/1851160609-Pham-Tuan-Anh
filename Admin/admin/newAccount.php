<div class="col-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">New Account</h4>
            <p class="card-category">Create a new account</p>
        </div>
        <div class="card-body" id="newUserForm">
            <div class="form-group">
                <label class="col-form-label">Full Name:</label>
                <input type="text" class="form-control" name="Name" id="Name" maxlength="30" />
            </div>
            <div class="form-group">
                <label class="col-form-label">Email Account</label>
                <input type="text" class="d-block mw-auto w-100 form-fields form-control w-25" name="email" id="email" />
            </div>
            <div class="form-group">
                <label class="col-form-label">Password</label>
                <input type="password" class="d-block mw-auto w-100 form-fields form-control w-25" name="password" id="pwd" />
            </div>
            <div class="form-group">
                <label class="col-form-label">Confirm Password</label>
                <input type="password" class="d-block mw-auto w-100 form-fields form-control w-25"  name="cfpassword" id="cfpwd" />
            </div>
            <div class="form-group">
                <label class="col-form-label">Address</label>
                <input type="text" class="form-control" name="Address" id="Add" maxlength="30" />
            </div>
            <div class="form-group">
                <label class="col-form-label">Birthday</label>
                <input type="date" class="form-control" name="Birthday" id="birthday" maxlength="30" />
            </div>
            <div class="form-group">
                <label>Level</label>
                <select class="custom-select" name="level" id="level">
                    <option value="">Select one</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
                <div class="invalid-feedback" style="font-size: 12px">Level is required.</div>
            </div>
            <div class="card-bottom">
                <input type="button" class="btn btn-info d-block ml-auto" id="newUserBtn" name="newUserButton" value="ADD NEW" />
            </div>
        </div>
    </div>
</div>

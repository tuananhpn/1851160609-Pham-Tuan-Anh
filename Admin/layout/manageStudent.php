<div class="student-mangenment col-12 mt-3">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Manager Users</h3>
        </div>
        <div class="card-body">
            <div class="input-group mb-3 w-50 mt-5">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">ADFSGFGD</label>
                </div>
                <select class="custom-select" id="classList">
                    <option value="L01">RTERT</option>
                    <option value="L02">TTERTER</option>
                    <option value="L03">ETWTERT</option>
                </select>
                <button type="button" id="searchStudent" class="btn btn-primary">Tra cứu</button>
            </div>
            <div class="manage-student mt-5 table-responsive">
                <table class="table table-hover text-center" id="showUser">
                    <thead>
                        <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Nguyễn Văn A</td>
                            <td>phamnhutuanh@gmail.com</td>
                            <td></td>
                            <td class="d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-secondary mr-2"><i class="fas fa-info"></i></button>
                                <button type="button" class="btn btn-outline-info mr-2" id="editStudentBtn"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-outline-danger" id ="deleteStudentBtn"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

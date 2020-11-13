<div class="col-12 mt-5">
    <div class="card table-big-boy">
        <div class="card-header ">
            <h4 class="card-title">New Post</h4>
            <p class="card-category">Create a new post</p>
            <br />
        </div>
        <div class="card-body" id="newUserForm">
            <div class="form-group col-12">
                <label for="permission">Category</label>
                <select class="custom-select p-13" name="category" id="category">
                    <option value="">Select one</option>
                    <option value="Album">Album</option>
                    <option value="banggia">Bảng giá</option>
                    <option value="kyMB">Kỷ yếu miền Bắc</option>
                    <option value="TourKY">Tour kỷ yếu</option>
                    <option value="ThueTP">Thuê Trang Phục</option>
                    <option value="Tuvan">Góc tư vấn</option>
                    <option value="Lienhe">Liên hệ</option>
                </select>
                <div class="invalid-feedback" style="font-size: 12px">Category is required.</div>
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" />
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" />
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Content</label>
                <textarea rows="10" cols="150" name="contentPost" id="contentPost" class="form-control" placeholder="Here can be your description" value=""></textarea>
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Author</label>
                <input type="text" class="form-control" name="author" id="author" />
            </div>
            <div class="card-bottom">
                <input type="button" class="btn btn-info d-block ml-auto" id="newPostBtn" name="newPostBtn" value="ADD NEW" />
            </div>
        </div>
    </div>
</div>

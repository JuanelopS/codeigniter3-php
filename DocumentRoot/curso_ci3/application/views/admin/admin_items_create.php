<div class="container">
    <div class="row mt-2">
        <div class="col-10">
            <h2>Admin Dashboard - Items</h2>
        </div>
        <div class="col-2">
            <a href="<?= base_url('items') ?>" class="btn btn-secondary active" role="button" aria-pressed="true">Return</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="offset-2 col-4">
            <form>
                <!-- 'Id', 'Code', 'Type', 'Brand', 'Model', 'sn', 'User', 'Location', 'state', 'comments' -->
                <div class="form-group">
                    <label for="Type">Type</label>
                    <input type="text" class="form-control" id="type" placeholder="Type">
                </div>
                <div class="form-group">
                    <label for="Brand">Brand</label>
                    <input type="text" class="form-control" id="brand" placeholder="Brand">
                </div>
                <div class="form-group">
                    <label for="Model">Model</label>
                    <input type="text" class="form-control" id="model" placeholder="Model">
                </div>
                <div class="form-group">
                    <label for="serial_number">Model</label>
                    <input type="text" class="form-control" id="serial_number" placeholder="Serial Number">
                </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="user">User</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User">
            </div>
            <div class="form-group">
                <label for="Location">Location</label>
                <input type="text" class="form-control" id="Location" placeholder="Location">
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" id="State" placeholder="State">
            </div>
            <div class="form-group">
                <label for="comments">Comments</label>
                <textarea class="form-control" id="comments" rows="3" style="resize: none"></textarea>
            </div>
            </form>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col text-center">
            <button type="submit" class="btn btn-primary">Add new item</button>
        </div>
    </div>
</div>
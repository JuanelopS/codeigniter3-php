<div class="container">
    <div class="row mt-2">
        <div class="col-10">
            <h3>Admin Dashboard - Items</h3>
        </div>
        <div class="col-2">
            <a href="<?= base_url('items') ?>" class="btn btn-secondary active" role="button" aria-pressed="true">Return</a>
        </div>
    </div>
    <form action="<?= base_url('items/insert_items') ?>" method="POST">
        <?php if (isset($success)) : ?>
            <div class="offset-4 col-4 text-center alert alert-success" role="alert">
                <?= $success ?>
            </div>
        <?php endif; ?>
        <!-- FIXME: NECESSATY HANDLE ERRORS AND ADD VALIDATION IN BACKEND -->
        <?php if (isset($error)) : ?>
            <div class="offset-4 col-4 text-center alert alert-success" role="alert">
                <?= $error ?>
            </div>
        <?php endif; ?>
        <div class="row mt-4">
            <div class="offset-2 col-4">
                <div class="form-group form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control form-control-sm" id="type" name="type" placeholder="Type">
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control form-control-sm" id="brand" name="brand" placeholder=" Brand">
                </div>
                <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control form-control-sm" id="model" name="model" placeholder="Model">
                </div>
                <div class="form-group">
                    <label for="serial_number">S/N</label>
                    <input type="text" class="form-control form-control-sm" id="serial_number" name="serial_number" placeholder="Serial Number">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control form-control-sm" id="state" name="state" placeholder="State">
                </div>
                <div class="form-group">
                    <label for="invoice">Invoice</label>
                    <input type="text" class="form-control form-control-sm" id="invoice" name="invoice" placeholder="Invoice">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control form-control-sm" id="username" name="username" placeholder="User">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control form-control-sm" id="location" name="location" placeholder="Location">
                </div>
                <div class="form-group">
                    <label for="comments">Comments</label>
                    <textarea class="form-control form-control-sm" id="comments" name="comments" rows="2" style="resize: none"></textarea>
                </div>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Add new item</button>
            </div>
        </div>
    </form>

</div>
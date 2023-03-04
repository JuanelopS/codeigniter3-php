<div class="container">
    <div class="row mt-2">
        <div class="col-10">
            <h3>Admin Dashboard - Items</h3>
        </div>
        <div class="col-2">
            <a href="<?= base_url('items/create_items') ?>" class="btn btn-primary active" role="button" aria-pressed="true">Add item</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?= $itemtable ?>
        </div>
    </div>
</div>
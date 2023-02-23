<div class="container">
    <div class="row mt-2">
        <div class="col">
            <h2>Admin Dashboard</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Range</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $row) : ?>
                        <tr>
                            <th scope="row"><?= $row->id ?></th>
                            <td><?= $row->username ?></td>
                            <td><?= $row->email ?></td>
                            <td><?= $row->range ?></td>
                            <td><?= $row->status ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
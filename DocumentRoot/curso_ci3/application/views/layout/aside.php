<div class="d-flex flex-column p-3 bg-light col-2 justify-content-center">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="<?= base_url('dashboard') ?>" class="nav-link <?= $this->uri->segment('1') === 'dashboard' ? 'active' : '' ?>" aria-current="page">
                Dashboard
            </a>
        </li>
        <!-- options visible only for admin user -->
        <?php if ($this->session->range == 2) : ?>
            <li>
                <a href="<?= base_url('items') ?>" class="nav-link <?= $this->uri->segment('1') === 'items' ? 'active' : '' ?>" aria-current="page">
                    Items
                </a>
            </li>
            <li>
                <a href="<?= base_url('users') ?>" class="nav-link <?= $this->uri->segment('1') === 'users' ? 'active' : '' ?>" aria-current="page">
                    Users
                </a>
            </li>
        <?php endif; ?>
    </ul>
</div>
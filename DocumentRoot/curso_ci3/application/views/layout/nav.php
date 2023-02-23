 <nav class="navbar navbar-light bg-light">
     <div>
         <a class="navbar-brand pl-4">Inventory</a>
     </div>
     <div class="justify-content-end">
         <?php if ($range = $this->session->range) : ?>
             Range: <?= $range ?>
         <?php endif; ?>
         <?php if ($username = $this->session->username) : ?>
             User <?= $username ?>
         <?php endif; ?>
         <a href="<?= base_url('login/logout') ?>">
             <button type="button" class="btn btn-danger">
                 Logout
             </button>
         </a>
     </div>
 </nav>

 <div class="row vh-100">
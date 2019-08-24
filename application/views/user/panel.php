<div class="container">
    <?php $this->load->view('_FlashAlert\flash_alert.php') ?>
    
    <div class="jumbotron">
        <h1 class="display-4">Welcome to <?= $this->session->userdata('USER_NAME') ?></h1>
        <p>My fisrt back-end web</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="#" role="button">Source Code</a>
        <a class="btn btn-danger btn-lg" href="#" role="button">Buy Code</a>
        <p> <h3> Go to our shopping page</p></h3>
        <a class="btn btn-success btn-lg" href="<?= base_url('User/sell_page') ?>" role="button">Shopping page</a>
    </div>
</div>
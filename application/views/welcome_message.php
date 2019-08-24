<!DOCTYPE html>
<html lang="eng">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title><?= $page_title ?></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/index.js"></script>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
      <script src="https://kit.fontawesome.com/d03d22793c.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lo-re.css">
   </head>
   <body>
      <div class="wrapper">
         <header>
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                  <a href="<?= base_url() ?>">MP Page</a>
               </div>
               <div class="menu">
                  <ul>
                     <li><a href="<?= base_url() ?>">Home</a></li>
                     <li><a href="#">About</a></li>
                     <li><a href="<?= base_url('User/sell_page') ?>">Shopping</a></li>
                     <li><a href="#">Contact</a></li>
                     <li>
                     <?php if (!empty($this->session->userdata('USER_ID')) && $this->session->userdata('USER_ID') > 0) { ?>
                    <!-- User isLogin -->
                    <a href="<?= base_url('User/Panel') ?>" class="btn btn-primary my-2 my-sm-0">User Panel</a> &nbsp;
                    <a href="<?= base_url('User/logout') ?>" class="btn btn-danger my-2 my-sm-0">Logout</a>
                <?php } else { ?>
                    <!-- User not Login -->
                    <a href="<?= base_url('User/registration') ?>" class="btn btn-info my-2 my-sm-0">Register</a> &nbsp;
                    <a href="<?= base_url('User/login') ?>" class="btn btn-success my-2 my-sm-0">Login</a>
                <?php } ?>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Login/Registration to know more interest </h1>
        <p>My first back-end page </p>
        <hr class="my-4">
        <button class="btn btn-primary btn-lg" onclick="Troll()"> Source Code </button>
        <a class="btn btn-danger btn-lg" href="#" role="button">Buy Code</a>
        <script>
            function Troll(){
                alert ('Anh chi ban thoi \nDeo co gi la free =)))')
            }
        </script>
    </div>
</div>
</body>
<script src="<?= base_url("assets/js/popper.min.js"); ?>"></script>
<script src="<?= base_url("assets/js/bootstrap.min.js"); ?>"></script>
</html>


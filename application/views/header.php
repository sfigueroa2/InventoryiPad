<!DOCTYPE html>
<html>
        <head>

<link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/bootstrap.css">
<link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css"
   href = "https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:700">

   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
</head>
  <body>
    <?php
    if (isset($this->session->userdata['logged_in'])) {
        $username = ($this->session->userdata['logged_in']['username']);
    }
    ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">IPAD Checkout System</a>
  <div class="collapse navbar-collapse ml-lg-0 ml-3" id="navbarcollapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>index.php/Controller/index">Checkout </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>index.php/Controller/log">Logs</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>index.php/Controller/inventory">Inventory</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>index.php/Controller/user">Users</a>
      </li>
      <li class="nav-item ">
      <a class="nav-link" href="<?php echo base_url();?>index.php/ValidationController/logout">Logout</a>
      </li>
      <li class="nav-item">
      <a class="nav-link disabled text-uppercase" href="#"><?php echo $username ?></a>
      </li>
    </ul></div>
</nav>
<div class="container-fluid bg-white">
<div>
  <div class="row">
  <h3 class="col">Total number of iPads: <span style="color:#ff8200"><?php echo $total[0]['COUNT(*)'];?></span> </h3>
  <h3 class="col">Number Checked-in: <span style="color:#ff8200"><?php echo $in[0]['totalin'];?></span> </h3>
  <h3 class="col">Number Checked-out: <span style="color:#ff8200"><?php echo $out[0]['totalout'];?></span> </h3>
  </div>
</div>
</div>

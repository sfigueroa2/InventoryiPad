<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
  <link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/bootstrap.css">
<link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css"
   href = "https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:700">

  <?php echo validation_errors(); ?>
<div>
  <h1 class="display-3">iPad Checkout System</h1>
</div>


<div class="container" style="margin-bottom:1.5rem">
<div class="card border-secondary mb-3" style="margin-bottom:1.5rem">
<div class="card-header"><h1>OUT</h1></div>
<div class="card-body">
<form method="post" action="<?php echo base_url() . "index.php/Controller/out"?>">
    <div class="form-group row">
    <label for="inputPFirst" class="col-sm-2 control-label text-right">Judge ID</label>
    <div class="col-sm-5">
      <input type="text" name="jid" class="form-control" value=""/>
    </div>
</div>
<div class="form-group row">
  <label for="inputPFirst" class="col-sm-2 control-label text-right">iPad ID</label>
    <div class="col-sm-5">
      <input type="text" name="ipid" class="form-control" value=""/>
    </div>
  </div>
  <div class="form-group d-flex justify-content-center">
  <input id="checkout" name="checkout" type="Submit" class="btn btn-primary btn-lg" value="OUT"/></div>
</div>
</div>
</div>
</form>

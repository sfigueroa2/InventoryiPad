<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Checkout History Log</title>
  </head>
  <body>
<h1>Checkout History Log</h1><hr/>
<div class="container bg-white">
 <table class="table table-striped">
  <thead>
  <tr>
   <th><strong>ID</strong></th>
   <th><strong>Judge ID</strong></th>
   <th><strong>iPad ID</strong></th>
   <th><strong>Status</strong></th>
   <th><strong>Date</strong></th>

 </tr></thead>
  <?php foreach($ipads as $ipad){?>
  <tr>
      <td scope="row"><?php echo $ipad->id;?></td>
      <td><?php echo $ipad->jid;?></td>
      <td><?php echo $ipad->ipid;?></td>
      <td><?php echo $ipad->currstat;?></td>
      <td><?php echo $ipad->data;?></td>

   </tr>
  <?php }?>
</table></div>
</body>
</html>

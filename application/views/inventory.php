<!DOCTYPE html>
<html lang="en">
  <head>
    <title>iPad Inventory List</title>
  </head>
  <body>
<h1>iPad Inventory List</h1><hr/>
<div class="container bg-white">
 <table class="table table-striped">
  <thead>
  <tr>
   <th><strong>iPad ID</strong></th>
   <th><strong>Status</strong></th>

 </tr></thead>
  <?php foreach($ipads as $ipad){?>
  <tr>
      <td scope="row"><?php echo $ipad->ipid;?></td>
      <td><?php echo $ipad->currstat;?></td>

   </tr>
  <?php }?>
</table></div>
</body>
</html>

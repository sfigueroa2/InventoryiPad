<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Users List</title>
  </head>
  <body>
<h1>Users List</h1><hr/>
<div class="container bg-white">
 <table class="table table-striped">
  <thead>
  <tr>
   <th><strong>ID</strong></th>
   <th><strong>Username</strong></th>
   <th><strong>Password</strong></th>

 </tr></thead>
  <?php foreach($users as $user){?>
  <tr>
      <td scope="row"><?php echo $user->id;?></td>
      <td><?php echo $user->username;?></td>
      <td><?php echo $user->password;?></td>


   </tr>
  <?php }?>
</table></div>
</body>
</html>

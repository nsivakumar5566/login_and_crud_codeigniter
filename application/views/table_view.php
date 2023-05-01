<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>
  <h1><a href="<?php echo base_url('Main/viewform');?>">form</a></h1> 

  <form method="post" action="<?php echo base_url('Main/viewtable');?>">
    <div class="form-group">
      <label for="email">search:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="search">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    </form>          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.NO</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>GENDER</th>
        <th>COUNTRY</th>
        <th>COMMENT</th>
        <th>IMAGES</th>
        <th>EDIT</th>
        <th>DELETE</th>
      </tr>
    </thead>
    <tbody>

  <?php
$x=1;
foreach($list as $loop)
  {
  ?>
      <tr>
        <td><?php echo $x++;?></td>
        <td><?php echo $loop['email'];?></td>
        <td><?php echo $loop['password'];?></td>
        <td><?php echo $loop['gender'];?></td>
        <td><?php echo $loop['country'];?></td>
        <td><?php echo $loop['comment'];?></td>
        <td><?php echo $loop['images'];?></td>
        
        <td><a href="<?php echo base_url('Main/editable/'.$loop['userid'])?>">Edit</a></td>
        <td><a href="<?php echo base_url('Main/deletetable/'.$loop['userid'])?>">Delete</a></td>    
       
      </tr>
   <?php
   }
   ?>   
    </tbody>
  </table>
</div>

</body>
</html>

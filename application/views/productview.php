
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
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        
      </tr>
    </thead>
    <tbody>
     <?php
     foreach ($list as $loop)
     	{
     ?>
      <tr>
        <td><?php echo $loop['name']?></td>
        <td><a href="<?php echo base_url('admin/Supermain/product_edit/'.$loop['siva_id'])?>">Edit</a></td>
        <?php
    }
        ?>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>

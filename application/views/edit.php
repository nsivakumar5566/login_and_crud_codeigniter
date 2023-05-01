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
  <h2>Edit form</h2>
  <form method="post" enctype="multipart/form-data" action="<?php echo base_url('Main/updateform');?>">
    <div class="form-group">
      <input type="hidden" class="form-control" id="email"  name="user" value="<?php echo $list[0]['userid'];?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $list[0]['email'];?>">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php echo $list[0]['password'];?>">
    </div>
    <div class="radio">
  <label><input type="radio" name="gender" value="male" <?php if($list[0]['gender']=='male'){ echo "checked";}?>>male</label>
</div>
<div class="radio">
  <label><input type="radio" name="gender" value="female" <?php if($list[0]['gender']=='female'){ echo "checked";}?>>Female</label>
</div>
<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" name="country" id="sel1">
    <option value="">select the country</option>
    <option value="india" <?php if($list[0]['country']=='india'){ echo "selected";}?>>india</option>
    <option value="china" <?php if($list[0]['country']=='china'){ echo "selected";}?>>china</option>
    <option value="jappan" <?php if($list[0]['country']=='jappan'){ echo "selected";}?>>jappan</option>
  </select>
</div>
<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" name="comment"><?php echo $list[0]['comment'];?></textarea>
</div>
<div class="form-group">
      <label for="pwd">IMAGES:</label>
      <input type="file" class="form-control" id="pwd" name="image">
   </div>
    <div class="form-group">
      <input type="hidden" class="form-control"  name="imagename" value="<?php echo $list[0]['images'];?>">
    </div>

<button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

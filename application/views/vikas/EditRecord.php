<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('assets/include/header.php');?>
  <style type="text/css">
  	<?php include('assets/css/style.css'); ?>
  </style>
</head>
<body>
  <?php
    $data = $users->row_array();
    //print_r($data);
  ?>


<div class="signup-form">
    <form method="post" action="">
      <span style="color:gray;float: right;font-weight: 700;">Last Update : <?php echo $data['created_date']; ?></span>
		<span style="font-size: 20px;color: green;margin-left: 8px;">REGID : <?php echo $data['id']; ?></span><br><br>
    
    <div class="form-group">
      <input type="text" class="form-control" value="<?php echo $data['name']; ?>" name="name">
    </div>

    <!-- <div class="form-group">
      <input type="hidden" class="form-control" value="<?php// echo $data['id']; ?>" name="hiddenid">
    </div> -->

    <div class="form-group">
        <input type="text" class="form-control" value="<?php echo $data['email']; ?>" name="email">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" value="<?php echo $data['phone']; ?>" name="phone">
    </div>

		<div class="form-group">
      <input type="text" class="form-control" value="<?php echo $data['password']; ?>" name="password">
    </div>
		  
		<div class="form-group">
      <button type="submit" name="update" class="btn btn-success " value="Update">Update</button>
      <a style="color:white;" href="<?php echo base_url('Welcome/ShowRecords'); ?>" class="btn btn-info ">Back</a>
    </div>
    
</form>

</div>
  
</body>
</html>
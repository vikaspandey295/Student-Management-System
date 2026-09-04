<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('assets/include/header.php');?>
  <style type="text/css">
  	<?php include('assets/css/style.css'); ?>
    .error{color:red;}
  </style>
</head>
<body>
<div class="signup-form">
    <form method="post" name="creatUser" action="<?php echo base_url("Welcome/index"); ?>">
		<span style="font-size: 25px;color: green;margin-left: 8px;">Student Registration Form</span><br><br>
		
    <div class="form-group">
			
      <input type="text" class="form-control" value="<?php echo set_value('name'); ?>" name="name" placeholder="Name" autocomplete="off">
      <?php echo form_error('name','<div class="error">', '</div>');?>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" value="<?php echo set_value('email'); ?>" name="email" placeholder="Email" autocomplete="off">
        <?php echo form_error('email','<div class="error">', '</div>');?>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" value="<?php echo set_value('phone'); ?>" name="phone" placeholder="Phone" autocomplete="off">
      <?php echo form_error('phone','<div class="error">', '</div>');?>
    </div>

		<div class="form-group">
      <input type="password" class="form-control" value="<?php echo set_value('password'); ?>" name="password" placeholder="Creat Password" autocomplete="off">
      <?php echo form_error('password','<div class="error">', '</div>');?>
    </div>
		  
		<div class="form-group">
      <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
    </div><br>
    <?php if($this->session->flashdata('msg')): ?>
       <p style="color: green;"><?php echo $this->session->flashdata('msg'); ?></p>
    <?php endif; ?>
</form>
	<!-- <div class="text-center">Already have an account? <a href="#">Sign in</a></div> -->
  <div class="text-center">Go To Dashboard -> <a href="<?php echo base_url('Welcome/ShowRecords'); ?>" >View All Records</a></div>
</div>
</body>
</html>
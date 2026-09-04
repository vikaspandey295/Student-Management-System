<!DOCTYPE html>
<html>
<head>
	<title>Student Records</title>
	
	<?php include('assets/include/header.php'); ?>
	
</head>
<body style="background-color:wheat;">
	<div class="container"><br>
	<marquee behavior="alternate" >
	  <h2 style="color: green;">Welcome To Student Dashboard</h2>
	</marquee>

    <?php if($this->session->flashdata('msg')): ?>
    <div class="alert alert-success col-md-6" role="alert" style="font-weight: 600;">
       <p style="color: green;"><?php echo $this->session->flashdata('msg'); ?></p>
    </div>
    <?php endif; ?>

	<div class="text-right"><a class="btn btn-success" href="<?php echo base_url('Welcome'); ?>" >Add New User</a></div><br>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Sr.No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
                <th>Created Date</th>
                <th>Acrion</th>
            </tr>
        </thead>
        <tbody>

        	<?php
               $sn=1;
               foreach ($store->result() as $row){
                // print_r($row);
                ?>
            <tr>
            	<td><?php echo $sn; ?></td>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->phone; ?></td>
                <td><?php echo $row->password; ?></td>
                <td><?php echo $row->created_date; ?></td>
                <td>
                    <a href="<?php echo base_url().'Welcome/EditRecords/'.$row->id;?>" class="btn btn-success">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url().'Welcome/DeleteRow/'.$row->id;?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
          <?php $sn++; } ?>
        </tbody>
        <tfoot>
            <tr>
            	<th>First Name</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
                <th>Acrion</th>
            </tr>
        </tfoot>
    </table>
</div>
</body>
</html>
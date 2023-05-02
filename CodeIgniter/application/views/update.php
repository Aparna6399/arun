<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Update Details</h3>
<hr />
</div>
</div>
<!--- Success Message --->
<?php if ($this->session->flashdata('success')) { ?>
<p style="font-size: 18px; color:green"><?php echo $this->session->flashdata('success'); ?></p>
<?php }?>
<!---- Error Message ---->
<?php if ($this->session->flashdata('error')) { ?>
<p style="font-size: 18px; color:red"><?php	echo $this->session->flashdata('error'); ?></p>
 <?php } ?>
<form action="Amin/updatedetails" name="insertdata">
	<input type="hidden" name="userid" value="<?php echo $row['id'];?>">
<!--<?php //echo form_hidden('userid',$row->id);?>-->
<div class="row">
	
<div class="col-md-4"><label>UserName</label>
	<input type="text" name="username" class="form-control" value="<?php echo $row['username'];?>">
</div>
<div class="col-md-4"><label name="password">Password</label>
	<input type="password" name="password" class="form-control" value="<?php echo $row['password'];?>">
	</div>
</div>
<div class="row">
<div class="col-md-4"><label>Email id</label>
	<input type="text" name="emailid" class="form-control" value="<?php echo $row['emailid'];?>">
</div>
<div class="col-md-4"><label>Contactno</label>
	<input type="text" name="mobnumber" class="form-control" value="<?php echo $row['mobilenumber'];?>">
</div>
</div>
<div class="row">
<div class="col-md-8"><b>Address</b>
	<textarea name="address" class="form-control"><?php echo $row['address'];?></textarea>
</div>
</div>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
	<input type="submit" name="Update">

</div>
</div>
</form>
</div>
</div>

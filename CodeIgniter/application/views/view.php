<!DOCTYPE html>
<html>
<head></head>
<body>
<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                  <p class="card-title">Admin Users</p>



<?php if ($this->session->flashdata('success')) { ?>
<p style="font-size: 20px; color:green"><?php echo $this->session->flashdata('success'); ?></p>
<?php }?>
<!---- Error Message ---->
<?php if ($this->session->flashdata('error')) { ?>
<p style="font-size: 20px; color:red"><?php echo $this->session->flashdata('error'); ?></p>
 <?php } ?>
<div class="table-responsive">
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>#</th>
<th>User Name</th>
<th>Password</th>
<th>Email</th>
<th>Contact</th>
<th>Address</th>
</thead>
<tbody>
<?php
$cnt=1;

foreach($records as $row)
{
?>
    <tr>
    <td><?php echo htmlentities($cnt);?></td>
    <td><?php echo htmlentities($row->username);?></td>
    <td><?php echo htmlentities($row->password);?></td>
    <td><?php echo htmlentities($row->emailid);?></td>
    <td><?php echo htmlentities($row->mobilenumber);?></td>
    <td><?php echo htmlentities($row->address);?></td>
   

</tr>
<?php
// for serial number increment
$cnt++;
} ?>
</tbody>
</table>
</div>



                  
                </div>
              </div>
            </div>
          </div>

        </body>
        </html>
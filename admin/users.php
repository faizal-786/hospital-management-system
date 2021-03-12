<?php
require('top.inc.php');
isAdmin();
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from users where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from users order by id asc";
$res=mysqli_query($con,$sql);
?>


<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Users </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Name</th>
							   <th>Email</th>
							   <th>Mobile</th>
							   <th>Referral code</th>
							   <th>Refer From</th>
							   <th>Wallet</th>
							   <th>Date</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['email']?></td>
							   <td><?php echo $row['mobile']?></td>
							   <td><?php echo $row['referral_code']?></td>
							   <td><?php echo $row['refer_from']?></td>
							   <td><?php echo $row['wallet']?></td>
							   <td><?php echo $row['added_on']?></td>
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								echo "<span class='badge badge-info'><a href='?type=downline&referral_code=".$row['referral_code']."'>Downline</a></span>";
								?>
							   </td>
							   <?php $i++;?>
							</tr>
							<?php }  ?>
						 </tbody>
					  </table>
				   </div>
				    Total: <?php echo $i-1?>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>


<?php
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='downline'){
		//$id=get_safe_value($con,$_GET['id']);
		$referral_code=get_safe_value($con,$_GET['referral_code']);
		$downline_sql="select * from users where refer_from='$referral_code'";
		$res=mysqli_query($con,$downline_sql);
		
	}
}

?>

<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Users Downline </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Name</th>
							   <th>Email</th>
							   <th>Mobile</th>
							   <th>Referral code</th>
							   <th>Refer From</th>
							   <th>Wallet</th>
							   <th>Date</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['email']?></td>
							   <td><?php echo $row['mobile']?></td>
							   <td><?php echo $row['referral_code']?></td>
							   <td><?php echo $row['refer_from']?></td>
							   <td><?php echo $row['wallet']?></td>
							   <td><?php echo $row['added_on']?></td>
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								echo "<span class='badge badge-info'><a href='?type=downline&referral_code=".$row['referral_code']."'>Downline</a></span>";
								?>
							   </td>
							   <?php $i++;?>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				    Total: <?php echo $i-1?>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>



<?php
require('footer.inc.php');
?>
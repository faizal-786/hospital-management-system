<?php
require('top.inc.php');
$id=$_SESSION['ADMIN_ID'];
$sql="select * from admin_users where id='$id'";
	$res=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($res);
	//prx($row);
	
?>

<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Payment </h4>
				   <h6>My balance: <?php echo $row['wallet'] ?> </h6>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					 
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>

 <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Account</strong></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								
								<div class="form-group">
									<label for="id" class=" form-control-label">ID</label>
									<input type="text" name="id" placeholder="Enter User ID" class="form-control myform-control">
								</div>
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block mybtn">
							   <span id="payment-button-amount">Search</span>
							   </button>
							   <div class="field_error"></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
             </div>
  </div>
  


<?php 
if(isset($_POST['submit'])){
	$id=get_safe_value($con,$_POST['id']);
	$sql="select * from users where id='$id'";
	$res=mysqli_query($con,$sql);
    if($row=mysqli_fetch_assoc($res)){?>
	
  
  <div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Users Information </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th>ID</th>
							   <th>Name</th>
							   <th>Wallet</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							
							<tr>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['wallet']?></td>
							   <td><?php echo "<span class='badge badge-edit mybadge-edit mybadge'><a href='manage_payment.php?id=".$row['id']."'>Add Balance</a></span>&nbsp;";
								?></td>
							   
							   
							   
							   <!--<form method="post" enctype="multipart/form-data">
							   <td><input type="text" name="wallet" placeholder="Add" class="form-control"></td>
							   <td>
							   <button id="payment-button1" name="submit1" type="submit" class="btn btn-lg btn-info btn-block mybtn">
							   <span id="payment-button-amount">Add</span>
							   </button>
							   -->
							   
								
							   </td>
							   </form>
							  
							</tr>
							
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
   } 
}
?>



<?php 
require('footer.inc.php');
?>



<!--

							   if(isset($_POST['submit1'])){
								   $wallet=get_safe_value($con,$_POST['wallet']);
								   $sql1="UPDATE `users` SET `wallet`=$wallet WHERE `id`=$id";
							       mysqli_query($con,$sql1);?>
								 


//if(isset($_POST['submit1'])){
//	$wallet=get_safe_value($con,$_POST['wallet']);
	//while($row=mysqli_fetch_assoc($res)){
	//	$row['wallet']+=$wallet;
	
	//}
//
-->
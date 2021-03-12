<?php
require('top.inc.php');

$wallet='';
$payment='';
$id_admin=$_SESSION['ADMIN_ID'];
$res=mysqli_query($con,"select * from admin_users where id='$id_admin'");
$row=mysqli_fetch_array($res);
$wallet_admin=$row['wallet'];
//prx($wallet_admin);

if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from users where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$wallet=$row['wallet'];
		//prx($payment);
	}else{
		header('location:payment.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$payment=get_safe_value($con,$_POST['payment']);
	$value_user=$payment+$wallet;
	mysqli_query($con,"update users set wallet='$value_user' where id='$id'");//update users balance
	
	$value_admin=$wallet_admin-$payment;
	mysqli_query($con,"update admin_users set wallet='$value_admin' where id='$id_admin'");
	?>
	
	<?php
	header('location:payment.php');
	die();
}
?>



<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Payment</strong></div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="Payment" class=" form-control-label">Payment (Balance : <?php echo $wallet;?>)</label>
									<input type="text" name="payment" placeholder="Enter payment" class="form-control" required value="   ">
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php ?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>


             
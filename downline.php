<?php 
require('top.php');
?>


        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
			
			<?php
			
			if(isset($_REQUEST['referral_code'])) {
				$level_sponsor=$_REQUEST['referral_code'];
				check_my_downline($level_sponsor,$_SESSION['USER_REFERRAL_CODE']);
			}else{
			$level_sponsor=$_SESSION['USER_REFERRAL_CODE'];
			}
			//prx($level_sponsor);
			?>
			
			
                <div class="row">
				<div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line "><?php echo $_SESSION['USER_NAME'];?></h2>
                        </div>
                    </div>
					<div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h5 class="title__line ">User ID : <?php echo $_SESSION['USER_ID'];?></h5>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">S No</th>
                                            <th class="product-name">User ID</th>
                                            <th class="product-price">Name</th>
											<th class="product-remove">Level</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									
										<?php
										  $data=mysqli_query($con,"SELECT * FROM `users` WHERE `refer_from`='$level_sponsor'");
										 // prx($data);
											?>
											
											
											    
											     <?php
												 $a=1;
												 
												  while($user_detail=mysqli_fetch_array($data)){
													  //prx($user_detail);
													 ?>
													 <tr>
													     <td><?php echo $a;?></td>
													     <td><?php echo $user_detail['id']?></td>
														 <td><?php echo $user_detail['name']?></td>
														 <td><a href="downline.php?referral_code=<?php echo $user_detail['referral_code']?>" >Downline</a></td>
												     </tr>
													 <?php
													++$a; 
												  }
												 
												 ?>
											
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                        <div class="buttons-cart">
                                            <a href="<?php echo SITE_PATH?>">Continue Shopping</a>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        
										
<?php require('footer.php')?>        
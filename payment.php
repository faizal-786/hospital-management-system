<?php 
require('top.php');

if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}

$id=$_SESSION['USER_ID'];
$sql="select * from users where id='$id'";
	$res=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($res);
	//prx($row['wallet']);
?>


        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
			
			
			
			
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
                        <div class="section__title--2 text-center">
                            <h5 class="title__line ">Balance : <?php echo $row['wallet'];?></h5>
                        </div>
                     </div>
					 <div class="col-xs-12">
					 <div class="contact-btn">
					 <center>
					 <?php if($row['wallet']>=500){?>
						<button type="button" class="fv-btngreen" onclick="" ><!--disabled id="btn_register"-->>Active</button>
					 <?php } else{ ?>
					 <button type="button" class="fv-btnred" onclick="" ><!--disabled id="btn_register"-->>Not Active</button>
					 <?php }?>
					</center>
					</div>
					
					 </div>
						
                         
                         
                    </div>
                </div>
            </div>
        </div>
        
										
<?php require('footer.php')?>        
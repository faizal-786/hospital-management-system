<?php
require('top.inc.php');
isAdmin();
$result = mysqli_query($con,"SELECT COUNT(*) FROM users;");
$row = mysqli_fetch_array($result);
//no of rows=$row['COUNT(*)'];
$i=0;
$count=0;
$no_of_level=0;
while($count<$row['COUNT(*)']){
	$count=$count+pow(5,$i);
	$no_of_level++;
	$i++;
}

$result1 = mysqli_query($con,"SELECT * FROM users;");
//while($row1=mysqli_fetch_assoc($result1)){
//echo($row1['id']);
//echo($row1['name']);
//}
//die();
?>

<div class="dashboard-wrapper">
 <div class="dashboard-influence">
  <div class="container-fluid dashboard-content">
   <div class="row">
    <div class=" col-lg-12 col-sm-12 card bg-light p-0">
	 <h5 class="card-header">Tree View</h5>
	  <div class="card-body">
	   <?php
       for($i=0;$i<$no_of_level;$i++){
		   $divide=pow(5,$i);
		   
		   ?>
	    <div class="row border p-5 text-center">Level <?php echo $i+1 ?>
	      <?php
		  
		    for($j=0;$j<$divide && $j<$row['COUNT(*)'] && $row1=mysqli_fetch_assoc($result1);$j++){
				
		    ?>
			 <div class="col-<?php echo 12/$divide ?> border p-5 text-center">
			   <img src="images/user2.png" class="img-fluid" alt="" style="width:75px">
			 <p><?php echo $row1['id']." ".$row1['name']?></p>
			 </div>
			<?php
		
			}
			$row['COUNT(*)']-=$divide;
		  ?>
	    </div>
	   <?php }?>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>



<?php
require('footer.inc.php');
?>
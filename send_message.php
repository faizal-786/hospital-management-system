<?php
require('connection.inc.php');
require('functions.inc.php');

if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}

$id=$_SESSION['USER_ID'];


$name=get_safe_value($con,$_POST['name']);
$email=get_safe_value($con,$_POST['email']);
$mobile=get_safe_value($con,$_POST['mobile']);
$comment=get_safe_value($con,$_POST['message']);
$added_on=date('Y-m-d h:i:s');
mysqli_query($con,"insert into contact_us(id,name,email,mobile,comment,added_on) values('$id','$name','$email','$mobile','$comment','$added_on')");
echo "Thank you";
?>


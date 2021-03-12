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
echo($id);
$text=get_safe_value($con,$_POST['text']);

echo($text);
mysqli_query($con,"insert into appointment(id,text,file) values('$id','$text','$file')");

echo "Thank you";
?>

<!--
$name=get_safe_value($con,$_POST['name']);
$disease=get_safe_value($con,$_POST['flexRadioDefault1_n']);
$text=get_safe_value($con,$_POST['text_n']);
$file=get_safe_value($con,$_POST['exampleFormControlFile1']);
$added_on=date('Y-m-d h:i:s');

,name,disease,text,file,added_on
,'$name','$disease','$text','$f','$added_on'
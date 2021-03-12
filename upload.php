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


//This is the directory where images will be saved
$target = "pics";
$target = $target . basename( $_FILES['file']['name']);

//This gets all the other information from the form
$file=$_POST['file'];
$desc=$_POST['desc'];
$pic=($_FILES['file']['name']);




//Writes the information to the database
mysql_query("INSERT INTO picture (file,desc)
VALUES ('$file', '$desc')") ;

//Writes the Filename to the server
if(move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    //Tells you if its all ok
    echo "The file ". basename( $_FILES['uploadedfile']['file']). " has been uploaded, and your information has been added to the directory";
} else {
    //Gives and error if its not
    echo "Sorry, there was a problem uploading your file.";
}

?>
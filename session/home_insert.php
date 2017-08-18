 <?php
	include("check.php");	


$title =  $_POST['title'];
$description = $_POST['description'];
$priority = $_POST['priority'];
$whom = $_POST['whom'];
$mail = $_POST['mail'];
$imger = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO complain (title, description, priority, whom, user, mail) VALUES ('$title', '$description','$priority','$whom','$login_user','$mail');";

if (mysqli_query($conn, $sql)) {
	$last_id = mysqli_insert_id($conn);


} else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$target_dir = "uploads/";
$target_file = $target_dir . " $last_id " . $login_user . " "  . $title . " " .basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {

    		//echo '<script language="javascript"> alert("message successfully sent") </script>';

           //echo "File is an image - " . $check["mime"] . ".";

        $uploadOk = 1;
    } else {
       //echo "File is not an image.";
    	$imger = "File is not an image."  . "<br>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
   //echo "Sorry, file already exists.";
	$imger = "$imger" . "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  //  echo "Sorry, your file is too large.";
    $imger = "$imger" . "Sorry, your file is too large." ;
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

	 $imger = "$imger" . "Sorry, only JPG, JPEG, PNG & GIF files are allowed."  . "<br>";

    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   $imger = "$imger" ."Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
echo $imger . "<h1> <a href='home.php'>Still your complain is regestered</a> </h1>";

   
} else {
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
     	echo "<h1> <a href='home.php'>Your complain regestered .</a> </h1>";


    } else {
     // echo "Sorry, there was an error uploading your file";

    	$imger = "$imger" . "Sorry, there was an error uploading your file" ;

    }
}





mysqli_close($conn);

?>
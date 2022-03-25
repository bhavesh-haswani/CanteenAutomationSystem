<?php

$con=mysqli_connect("127.0.0.1:3308","root","","canteen_db");

$cat=$_POST["Category"];
$ItemName=$_POST['ItemName'];
$Price=$_POST['Price'];
$Dis=$_POST['Discount'];

//$target_dir = "uploads/";
//$target_file = $target_dir . basename($_FILES["file"]["fileToUpload"]);
//$ItemImg = $_FILES['file']['fileToUpload'];
//$file = fopen($ItemImg,'1','r');
//$file = fopen($target_file,'r');
//$file_contents = fread($file, filesize($target_file));
//fclose($file);
//$file_contents = addslashes($file_contents);

//uploading image
/*$ItemImg = $_FILES['file']['fileToUpload'];
$file = fopen($ItemImg, 'r');
$file_contents = fread($file, filesize($ItemImg));
fclose($file);
$file_contents = addslashes($file_contents);*/

/*///////////////
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
//Allow certain file formats
$allowTypes = array('jpg','png','jpeg','gif','pdf');

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    //$allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
*/
// Display status message
/*echo $statusMsg;
?>*/
//////////////////////////////////GEEKS FOR GEEKS////////////////////////////////////////////
/*<?php
error_reporting(0);
?>
<?php
  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "image/".$filename;
          
    $db = mysqli_connect("localhost", "root", "", "photos");
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO image (filename) VALUES ('$filename')";
  
        // Execute query
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  $result = mysqli_query($db, "SELECT * FROM image");
?>

/////////////////////////////*/

$qry="select max(MenuItemID) as maxid from menuitems ";
$jd=0;
$run=mysqli_query($con,$qry);
while ($rows=mysqli_fetch_array($run))
      {
                  $jd=$rows[0];
      }
      
if(isset($_POST['submit'])){

    $ItemImg = $_FILES["fileToUpload"]["name"];
    $tempname = $_FILES["fileToUpload"]["tmp_name"];    
    $folder = "img_uploads/".$ItemImg;
    

    $qry="Insert into menuitems(Category,MenuItemID,ItemName,Price,Discount,ItemImg) values ('$cat',$jd+1,'$ItemName','$Price','$Dis','$ItemImg')";
    
    if (mysqli_query($con,$qry)==TRUE)
    {
        
        if (move_uploaded_file($tempname, $folder))  {
            //$msg = "Image uploaded successfully";
            echo '<script> alert("Image uploaded successfully");</script>';
        }else{
            
            //$msg = "Failed to upload image";
            echo '<script> alert("Failed to upload image");</script>';
        }
        echo '<script> alert("Menu Item Added Successful");</script>';
        echo "<script> window.location='../admin.php';</script>";
        
    }
    else
    {
        echo '<script> alert("Please try again");</script>';
        header('refresh:0;url=../admin.php');
    }
}
?>
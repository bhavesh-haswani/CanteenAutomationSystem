<?php
$con=mysqli_connect("127.0.0.1:3308","root","","canteen_db");
$cd=$_POST["catdesc"];



$qry="select max(category) as maxid from menucategory";
$jid=0;
$run=mysqli_query($con,$qry);
while ($rows=mysqli_fetch_array($run))
            {
                        $jid=$rows[0];
            }

if(isset($_POST['submit']))
{
      
      $CatImg = $_FILES['catimgupload']['name'];
      $tempname = $_FILES['catimgupload']['tmp_name'];            
      $folder = "cati_uploads/".$CatImg;
      $qry="Insert into menucategory(category,catdesc,CatImg) values ($jid+1,'$cd','$CatImg')";
      if (mysqli_query($con,$qry)==TRUE)
      {
            if (move_uploaded_file($tempname, $folder))  {
                  //$msg = "Image uploaded successfully";
                  echo '<script> alert("Image uploaded successfully");</script>';
              }else{
                  //$msg = "Failed to upload image";
                  echo '<script> alert("Failed to upload image");</script>';
              }
            echo '<script> alert("Category Added Successful");</script>';
            header('refresh:0;url=../admin.php');
      }
      else
      {
            echo '<script> alert("Please try again");</script>';
            header('refresh:0;url=../admin.php');
      }
      
}
?>
<?php
    session_start();

    $server="127.0.0.1:3308";
    $username="root";
    $password="";
    $database="canteen_db";

    $conn=mysqli_connect($server,$username,$password,$database);

    if(!$conn)  //bh
    {die("Connection Failed:" .mysqli_connect_error());
    }

    //$num=3;

    if(isset($_POST['submit']))
    {
        $name=$_POST['nm'];
        $password=$_POST['pw'];

        /*if($name==""||$password==""){echo "<script>alert('Username and Password required');
            location='../Signinout/login.php';
            </script>"; }//it will be validated under script in adminlogin.php
        else{*/
            $s="Select * from usertable where username= '$name'  && password='$password'";
            $result=mysqli_query($conn,$s);
            $num=mysqli_num_rows($result);
            $vquery="SELECT * FROM usertable WHERE username= '$name' && password='$password' && utype='admin'";
            $vres=mysqli_query($conn,$vquery);
            $numv=mysqli_num_rows($vres);
            //$num=mysqli_num_rows($result);   //$GLOBALS['num']
            if ($num==1){                       // $GLOBALS['num'] == 1
                if($numv==1){
                    $_SESSION['username']=$name;
                    echo "<script>alert('Welcome ".$_SESSION['username']."');
                    location='../Admin/admin.php';
                    </script>";
                }
                else{
                $_SESSION['username']=$name;
                echo "<script>alert('Log in Sucessfull!');
                location='../Customer_Page/customerpageHTML.php';
                </script>";
                /*if($GLOBALS['num'] == 1){
                    //header('location:Customer Page.html');
                    header('location:../Customer_Page/customerpageHTML.php');
                }*/
                }            
            }
            else{
                    //$GLOBALS['num'] = 0;
                    // echo "<script>alert('Username and password don't match!!Try Again!');</script>";
                    echo "<script type='text/javascript'>alert('Incorrect Username or Password! Try Again!');
                    location.href='../Signinout/login.php';
                    </script>";
                    //header('location:../Signinout/login.php');            
            }
        /*}*/
    }
    mysqli_close($conn);
?>

   <?php
        

            $x=$_POST['username'];
            $y=$_POST['password'];
            $servername="localhost";
            $username="root";
            $password="";
            $db="test1";
            
                $link= new mysqli($servername,$username,$password,$db) or die("CANNOT CONNECT");


                $res=mysqli_query($link,"select * from accounts where uname='$x' && pass='$y' ");
            
                $count = mysqli_num_rows($res);

               
 $row=mysqli_fetch_array($res); // if uname/pass correct it returns must be 1 row
   
   if( $count == 1 && $row['pass']==$y ) 
   {
       session_start();
       $_SESSION['var'] = "alex";
       
       
       
       // If session variable is not set it will redirect to login page
if(isset($_SESSION['var']) )
{
  header("location: secured.html");
  exit;
}
//    $_SESSION[''] = $row['uname'];
//       $_SESSION['loggedIn'] = true;
//    header("Location: secured.html");
   }
else 
{
   // $errMSG = "Invalid User!try again...";
   // echo "alert('Wrong Username or Password......TRY AGAIN');";
   //   $_SESSION['loggedIn'] = false;
    //$custom_message='';
    //header("Location: login.html");
      unset($_SESSION['var']);
    echo "<script type='text/javascript'>alert('Wrong Username or Password......TRY AGAIN');
                    window.location='login.html';</script>";
    

   }

    ?>

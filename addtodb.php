
   <?php
            
            $x=$_POST['username1'];
            $y=$_POST['password1'];
            $servername="localhost";
            $username="root";
            $password="";
            $db="test1";
            $email1=$_POST['email1'];

if($x==NULL)
{
 
      echo "<script type='text/javascript'>alert(' Username cannot be empty......TRY AGAIN');
                    window.location='register.html';</script>";
    exit;
    
    //header("Location:register.html");
}

if($y==NULL)
{
 
      echo "<script type='text/javascript'>alert(' password cannot be empty......TRY AGAIN');
                    window.location='register.html';</script>";
    exit;
    
    //header("Location:register.html");
}

$len=strlen($y);
if($len<6 || $len>15)
{
     echo "<script type='text/javascript'>alert(' password size incorrect......TRY AGAIN');
                    window.location='register.html';</script>";
    exit;
}

                $link= new mysqli($servername,$username,$password,$db) or die("CANNOT CONNECT");
             $pre="INSERT INTO accounts (uname,pass) VALUES ('$x','$y')";
                
             if(mail("$email1" ,"Welcome to Letsride","thank you for registering with lets ride"))
             {
                 echo 'mailsent';
             }

                $res=mysqli_query($link,"$pre");
      print "succesfully registered";
              
                        header("Location:secured.html");
    ?>
